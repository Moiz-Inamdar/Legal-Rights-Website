<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\ArticlesModel;
use App\Models\AuthModel;
use App\Models\CategoriesModel;
use App\Models\LawsModel;
use App\Models\RightsModel;

class AdminController extends BaseController
{

    public function login()
    {
        return view('auth/login');
    }

    public function authLogin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $authModel = new AuthModel();
        $authData = $authModel->where('USER_NAME', $username)->first();
        if (!empty($authData)) {
            if ($authData['PASSWORD'] == $password) {
                session()->set('name', $authData['USER_NAME']);
                session()->set('id', $authData['AUTH_ID']);
                return redirect()->to('admin/rights')->with('success', 'Login successful');
            } else {
                return redirect()->back()->with('error', 'Incorrect password');
            }
        } else {
            return redirect()->back()->with('error', 'User not found');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }

    public function resetPassword(){
        return $this->adminView('auth/reset_password');
    }
    public function passwordUpdate()
    {
        $oldpasword = $this->request->getPost('old_password');
        $newPassword = $this->request->getPost('new_password');
        $id = session()->get('id');
        $authModel = new AuthModel();
        $authData = $authModel->where('AUTH_ID', $id)->first();
        if ($authData['PASSWORD'] == $oldpasword) {
            $authModel->update($id, ['PASSWORD' => $newPassword]);
            return redirect()->to('login')->with('success', 'Passsword reset successful');
        } else {
            return redirect()->back()->with('error', 'Incorrect old password');
        }
    }

    public function index(): string
    {
        return view('welcome_message');
    }
    public function articlelist(): string
    {
        $articleModel = new ArticlesModel();
        $articlelist = $articleModel->findAll();
        $data['list'] = $articlelist;
        $data['pageTitle'] = "Articles ";
        return $this->adminView('article_list', $data);
    }
    public function articleSave()
    {

        $articleId = $this->request->getPost('edit_id');

        $articleTitle = $this->request->getPost('article_title');
        $articleContent = $this->request->getPost('article_content');
        $data = [
            'ARTICLE_TITLE' => $this->request->getPost('article_title'),
            'ARTICLE_CONTENT' => $this->request->getPost('article_content'),
            'ARTICLE_AUTHOR' => $this->request->getPost('article_author'),
            'ARTICLE_PUBLISHED' => $this->request->getPost('article_published'),
        ];
        $articleModel = new ArticlesModel();
        if (!empty($articleId) && $articleId > 0) {

            $result = $articleModel->update($articleId, $data);
        } else {
            $result = $articleModel->insert($data);
        }
        if ($result) {
            return redirect()->back()->with('success', 'Saved successfully');

        } else {
            return redirect()->back()->with('error', 'Failed to save data');

        }
    }



    public function rightlist(): string
    {
        $rightModel = new RightsModel();
        $articleModel = new ArticlesModel();  

        $articles = $articleModel->findAll();
        $data['articles'] = $articles;
        $rightlist = $rightModel->join('ARTICLE', 'ARTICLE.ARTICLE_ID=RIGHTS.RIGHT_ARTICLE_ID', 'left')->findAll();
        $data['list'] = $rightlist;
        $data['pageTitle'] = "Rights ";
        return $this->adminView('right_list', $data);
    }
    public function rightSave()
    {

        $rightId = $this->request->getPost('edit_id');

        $rightTitle = $this->request->getPost('right_title');
        $rightdescription = $this->request->getPost('right_description');
        $data = [
            'RIGHT_TITLE' => $this->request->getPost('right_title'),
            'RIGHT_DESCRIPTION' => $this->request->getPost('right_description'),
            'RIGHT_ARTICLE_ID' => $this->request->getPost('right_article')
        ];
        $rightModel = new RightsModel();
        if (!empty($rightId) && $rightId > 0) {

            $result = $rightModel->update($rightId, $data);
        } else {
            $result = $rightModel->insert($data);
        }
        if ($result) {
            return redirect()->back()->with('success', 'Saved successfully');

        } else {
            return redirect()->back()->with('error', 'Failed to save data');

        }
    }
    private function getUniqueColumn($module)
    {
        switch ($module) {
            case 'RIGHTS':
                return "RIGHT_ID";
            case 'CATEGORIES':
                return "CATEGORY_ID";
            case 'LAWS':
                return "LAW_ID";
            case 'ARTICLE':
                return "ARTICLE_ID";

            default:
                # code...
                break;
        }
    }
    public function deleteData()
    {
        $id = $this->request->getPost('deleteId');
        $module = $this->request->getPost('module');
        $uniqueColumn = $this->getUniqueColumn($module);
        $adminModel = new AdminModel();
        $result = $adminModel->deleteData($module, [$uniqueColumn => $id]);
        if ($result) {
            return redirect()->back()->with('success', 'Deleted Successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to Delete');

        }

    }


















    public function lawList(): string
    {
        $lawModel = new LawsModel();
        $lawlist = $lawModel->findAll();
        $data['list'] = $lawlist;
        $data['pageTitle'] = "Laws ";
        return $this->adminView('law_list', $data);
    }

    public function lawSave()
    {

        $lawId = $this->request->getPost('edit_id');

        $lawName = $this->request->getPost('law_name');
        $lawdescription = $this->request->getPost('law_description');
        $data = [
            'LAW_NAME' => $this->request->getPost('law_name'),
            'LAW_DESCRIPTION' => $this->request->getPost('law_description'),
            'LAW_YEAR_ENACTED' => $this->request->getPost('year_enacted'),
            'LAW_CATEGORY' => $this->request->getPost('law_category'),



        ];
        $lawModel = new LawsModel();
        if (!empty($lawId) && $lawId > 0) {

            $result = $lawModel->update($lawId, $data);
        } else {
            $result = $lawModel->insert($data);
        }
        if ($result) {
            return redirect()->back()->with('success', 'Saved successfully');

        } else {
            return redirect()->back()->with('error', 'Failed to save data');

        }
    }




    public function categoryList(): string
    {
        $categoryModel = new CategoriesModel();
        $categorylist = $categoryModel->findAll();
        $data['list'] = $categorylist;
        $data['pageTitle'] = "Categories ";
        return $this->adminView('category_list', $data);
    }
    public function categorySave()
    {

        $categoryId = $this->request->getPost('edit_id');

        $categoryName = $this->request->getPost('category_name');
        $categorydescription = $this->request->getPost('category_description');
        $data = [
            'CATEGORY_NAME' => $this->request->getPost('category_name'),
            'CATEGORY_DESCRIPTION' => $this->request->getPost('category_description'),


        ];
        $categoryModel = new CategoriesModel();
        if (!empty($categoryId) && $categoryId > 0) {

            $result = $categoryModel->update($categoryId, $data);
        } else {
            $result = $categoryModel->insert($data);
        }
        if ($result) {
            return redirect()->back()->with('success', 'Saved successfully');

        } else {
            return redirect()->back()->with('error', 'Failed to save data');

        }
    }

}

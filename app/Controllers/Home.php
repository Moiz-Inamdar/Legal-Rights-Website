<?php

namespace App\Controllers;
use App\Models\AdminModel;
use App\Models\ArticlesModel;
use App\Models\CategoriesModel;
use App\Models\LawsModel;
use App\Models\RightsModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }
    public function about(): string
    {
        return view("web/header").view("web/about");
        
    }
    public function contact(): string
    {
        return view("web/header").view("web/contact");
        
    }
    public function userRights(): string
    {
        $rightModel = new RightsModel();
        $rightlist = $rightModel->join('ARTICLE','ARTICLE.ARTICLE_ID=RIGHTS.RIGHT_ARTICLE_ID','left')->findAll();
        $data['list'] = $rightlist;
        $data['pageTitle'] = "Rights "; 
        return $this->webView('web/rights', $data);
    }

    public function rightDetail($id) {
        $rightModel = new RightsModel();
        $articleModel = new ArticlesModel();
        $rightDetail = $rightModel->join('ARTICLE', 'ARTICLE.ARTICLE_ID = RIGHTS.RIGHT_ARTICLE_ID', 'left')
                                  ->where('RIGHTS.RIGHT_ID', $id)
                                  ->first();
        if (!$rightDetail) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Right with ID $id not found.");
        }
        $relatedArticles = $articleModel->where('ARTICLE_ID', $id)->findAll();
        $data['right'] = $rightDetail;
        $data['relatedArticles'] = $relatedArticles;
        $data['pageTitle'] = "Rights Detail";
        return $this->webView('web/rightDetail', $data);
    }
    
    public function userArticles(): string
    {
        $articleModel = new ArticlesModel();
        $articlelist = $articleModel->findAll();
        $data['list'] = $articlelist;
        $data['pageTitle'] = "Articles "; 
        return $this->webView('web/articles', $data);
    }

    public function articleDetail($id)
    {
        // Load the model
        $articleModel = new ArticlesModel();
        $rightsModel = new RightsModel();

        $article = $articleModel->find($id);

        if (!$article) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Article with ID $id not found.");
        }

        // Prepare the data for the view
        $relatedRights = $rightsModel->where('RIGHT_ARTICLE_ID', $id)->findAll();
        $data['article'] = $article;
        $data['relatedRights'] = $relatedRights;
        $data['pageTitle'] = "Article Detail";

        // Return the view with the data
        return $this->webView('web/articleDetail', $data);
    }
    
    public function articleSave(){
         
        $articleId = $this->request->getPost('edit_id');
        
        $articleTitle = $this->request->getPost('article_title');
        $articleContent = $this->request->getPost('article_content');
        $data =[
            'ARTICLE_TITLE' =>$this->request->getPost('article_title'),
            'ARTICLE_CONTENT'=>$this->request->getPost('article_content'),
            'ARTICLE_AUTHOR'=>$this->request->getPost('article_author'),
            'ARTICLE_PUBLISHED'=>$this->request->getPost('article_published'),

            
            
        ];
        $articleModel = new ArticlesModel();
        if(!empty($articleId) && $articleId>0){
           
          $result =  $articleModel->update($articleId,$data);
        }else{
          $result = $articleModel->insert($data);
        }
        if($result){
            return redirect()->back()->with('success','Saved successfully');

        }else{
        return redirect()->back()->with('error','Failed to save data');

        }
    }
    
   

    public function lawList(): string
    {
        $lawModel = new LawsModel();
        $lawlist = $lawModel->findAll();
        $data['list'] = $lawlist;
        $data['pageTitle'] = "Laws "; 
        return view('law_list', $data);
    }

    public function lawSave(){
         
        $lawId = $this->request->getPost('edit_id');
        
        $lawName = $this->request->getPost('law_name');
        $lawdescription = $this->request->getPost('law_description');
        $data =[
            'LAW_NAME' =>$this->request->getPost('law_name'),
            'LAW_DESCRIPTION'=>$this->request->getPost('law_description'),
            'LAW_YEAR_ENACTED'=>$this->request->getPost('year_enacted'),
            'LAW_CATEGORY'=>$this->request->getPost('law_category'),

            
            
        ];
        $lawModel = new LawsModel();
        if(!empty($lawId) && $lawId>0){
           
          $result =  $lawModel->update($lawId,$data);
        }else{
          $result = $lawModel->insert($data);
        }
        if($result){
            return redirect()->back()->with('success','Saved successfully');

        }else{
        return redirect()->back()->with('error','Failed to save data');

        }
    }




    public function categoryList(): string
    {
        $categoryModel = new CategoriesModel();
        $categorylist = $categoryModel->findAll();
        $data['list'] = $categorylist;
        $data['pageTitle'] = "Categories "; 
        return view('category_list', $data);
    }
    public function categorySave(){
         
        $categoryId = $this->request->getPost('edit_id');
        
        $categoryName = $this->request->getPost('category_name');
        $categorydescription = $this->request->getPost('category_description');
        $data =[
            'CATEGORY_NAME' =>$this->request->getPost('category_name'),
            'CATEGORY_DESCRIPTION'=>$this->request->getPost('category_description'),
            
            
        ];
        $categoryModel = new CategoriesModel();
        if(!empty($categoryId) && $categoryId>0){
           
          $result =  $categoryModel->update($categoryId,$data);
        }else{
          $result = $categoryModel->insert($data);
        }
        if($result){
            return redirect()->back()->with('success','Saved successfully');

        }else{
        return redirect()->back()->with('error','Failed to save data');

        }
    }



    
    public function rightSave(){
         
        $rightId = $this->request->getPost('edit_id');
        
        $rightTitle = $this->request->getPost('right_title');
        $rightdescription = $this->request->getPost('right_description');
        $data =[
            'RIGHT_TITLE'=>$this->request->getPost('right_title'),
            'RIGHT_DESCRIPTION'=>$this->request->getPost('right_description'),
            'RIGHT_ARTICLE_ID' =>$this->request->getPost('right_article')
        ];
        $rightModel = new RightsModel();
        if(!empty($rightId) && $rightId>0){
           
          $result =  $rightModel->update($rightId,$data);
        }else{
          $result = $rightModel->insert($data);
        }
        if($result){
            return redirect()->back()->with('success','Saved successfully');

        }else{
        return redirect()->back()->with('error','Failed to save data');

        }
    }
    private function getUniqueColumn($module){
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
    public function deleteData(){
        $id = $this->request->getPost('deleteId');
        $module = $this->request->getPost('module');
        $uniqueColumn= $this->getUniqueColumn($module);
        $adminModel = new AdminModel();
        $result = $adminModel->deleteData($module,[$uniqueColumn=>$id]);
        if($result){
        return redirect()->back()->with('success','Deleted Successfully');
        }else{
        return redirect()->back()->with('error','Failed to Delete');

        }

    }
}

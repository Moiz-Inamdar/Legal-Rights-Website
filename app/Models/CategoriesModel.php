<?php
namespace App\Models;
use CodeIgniter\Model;

class CategoriesModel extends Model{

    public function __construct(){
        parent::__construct();
        $this->db = db_connect();
        $this->builder = $this->db->table('CATEGORIES');
    }

    protected $table = 'CATEGORIES';
    protected $primaryKey = 'CATEGORY_ID';
    protected $useAutoIncrement = true;
    protected $allowedFields =['CATEGORY_NAME','CATEGORY_DESCRIPTION'];
    protected $useTimestamps = true;

    protected $createdField = 'CATEGORY_CREATED';
    protected $updatedField = 'CATEGORY_UPDATED';

    public function search($searchTerm)
    {
        return $this->db->table('CATEGORIES')
            ->like('CATEGORY_NAME',$searchTerm)
            ->orLike('CATEGORY_DESCRIPTION',$searchTerm)
            ->get()
            ->getResultArray();
    }
}
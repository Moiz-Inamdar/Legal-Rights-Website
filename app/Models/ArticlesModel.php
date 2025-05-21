<?php
namespace App\Models;
use CodeIgniter\Model;

class ArticlesModel extends Model{

    public function __construct(){
        parent::__construct();
        $this->db = db_connect();
        $this->builder = $this->db->table('ARTICLE');
    }

    protected $table = 'ARTICLE';
    protected $primaryKey = 'ARTICLE_ID';
    protected $useAutoIncrement = true;
    protected $allowedFields =['ARTICLE_TITLE','ARTICLE_CONTENT','ARTICLE_AUTHOR','ARTICLE_PUBLISHED'];
    protected $useTimestamps = true;

    protected $createdField = 'ARTICLE_CREATED';
    protected $updatedField = 'ARTICLE_UPDATED';

    public function search($searchTerm)
    {
        return $this->db->table('ARTICLE')
            ->like('ARTICLE_TITLE',$searchTerm)
            ->orLike('ARTICLE_CONTENT',$searchTerm)
            ->get()
            ->getResultArray();
    }
}
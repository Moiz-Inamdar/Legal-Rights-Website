<?php
namespace App\Models;
use CodeIgniter\Model;

class RightsModel extends Model{

    public function __construct(){
        parent::__construct();
        $this->db = db_connect();
        $this->builder = $this->db->table('RIGHTS');
    }

    protected $table = 'RIGHTS';
    protected $primaryKey = 'RIGHT_ID';
    protected $useAutoIncrement = true;
    protected $allowedFields =['RIGHT_TITLE','RIGHT_DESCRIPTION','RIGHT_CATEGORY_ID','RIGHT_ARTICLE_ID'];
    protected $useTimestamps = true;  // to store current time

    protected $createdField = 'RIGHT_CREATED';
    protected $updatedField = 'RIGHT_UPDATED';

    public function search($searchTerm)
    {
        return $this->db->table('RIGHTS')
            ->like('RIGHT_TITLE',$searchTerm)
            ->orLike('RIGHT_DESCRIPTION',$searchTerm)
            ->get()
            ->getResultArray();
    }
}
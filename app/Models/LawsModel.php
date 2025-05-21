<?php
namespace App\Models;
use CodeIgniter\Model;

class LawsModel extends Model{

    public function __construct(){
        parent::__construct();
        $this->db = db_connect();
        $this->builder = $this->db->table('LAWS');
    }

    protected $table = 'LAWS';
    protected $primaryKey = 'LAW_ID';
    protected $useAutoIncrement = true;
    protected $allowedFields =['LAW_NAME','LAW_DESCRIPTION','LAW_YEAR_ENACTED','LAW_CATEGORY_ID','LAW_LINK'];
    protected $useTimestamps = true;

    protected $createdField = 'LAW_CREATED';
    protected $updatedField = 'LAW_UPDATED';

    public function search($searchTerm)
    {
        return $this->db->table('LAWS')
            ->like('LAW_NAME',$searchTerm)
            ->orLike('LAW_DESCRIPTION',$searchTerm)
            ->get()
            ->getResultArray();
    }
}
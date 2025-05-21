<?php
namespace App\Models;
use CodeIgniter\Model;

class AdminModel extends Model{

    public function __construct(){
        parent::__construct();
        $this->db = db_connect();
    }

    public function deleteData($table,$where){
        $this->builder= $this->db->table($table);
        return $this->builder->where($where)->delete();

    }
}
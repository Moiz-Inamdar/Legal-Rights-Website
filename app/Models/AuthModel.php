<?php
namespace App\Models;
use CodeIgniter\Model;

class AuthModel extends Model{
  
    protected $table = 'AUTH';
    protected $primaryKey = 'AUTH_ID';
    protected $useAutoIncrement = true;
    protected $allowedFields =['USER_NAME','PASSWORD'];
    protected $useTimestamps = true;

    protected $createdField = 'CREATED';
    protected $updatedField = 'UPDATED';

}
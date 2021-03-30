<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class UserModel extends Model
{
    protected $table      = 'tb_user';
    protected $primaryKey = 'id';

    protected $allowedFields = ['nama_user', 'email_user', 'password', 'jabatan_user', 'level'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getUsers()
    {
        return $this->findAll();
    }
}
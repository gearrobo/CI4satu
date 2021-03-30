<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class DcModel extends Model
{
    protected $table      = 'tb_lokasi';
    protected $primaryKey = 'id';

    protected $allowedFields = ['lokasi', 'IP', 'rack_available', 'latitude', 'longtitude'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getDc()
    {
        return $this->findAll();
    }
}
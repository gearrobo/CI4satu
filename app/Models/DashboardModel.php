<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class DashboardModel extends Model
{
    protected $table = 'tb_lokasi';
    public function getLocations()
    {
        return $this->findAll();
    }
}
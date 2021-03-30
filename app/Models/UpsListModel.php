<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class UpsListModel extends Model
{
    protected $table = 'devices';
    public function getUpsList()
    {
        return $this->findAll();
    }
}
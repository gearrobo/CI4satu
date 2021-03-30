<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class UpsModel extends Model
{
    protected $table = 'ups';
    public function getUps()
    {
        return $this->findAll();
    }
}
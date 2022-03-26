<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class File extends Model{
    protected $table = 'files';
    protected $primaryKey = "id";
    protected $allowedFields = ['name','type','created_at'];
}
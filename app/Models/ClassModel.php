<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class ClassModel extends Model{
    protected $table = 'classes';
    protected $primaryKey = "id";
    protected $allowedFields = ['curriculum', 'year_level', 'section','created_at'];
}
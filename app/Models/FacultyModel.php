<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class FacultyModel extends Model{
    protected $table = 'faculties';
    protected $primaryKey = "id";
    protected $allowedFields = ['schoolid','first_name', 'last_name', 'email', 'uploaded_flleinfo'];
}
<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class StudentModel extends Model{
    protected $table = 'students';
    protected $primaryKey = "id";
    protected $allowedFields = ['schoolid','first_name', 'last_name', 'email', 'current_class', 'password_clear_text', 'password', 'uploaded_flleinfo'];
}
<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function s()
    {
        echo view('links');
        echo view('sidebar');
        echo view('faculties');
    }
    function index() 
    {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $password = array(); 
        $alpha_length = strlen($alphabet) - 1; 
        for ($i = 0; $i < 8; $i++) 
        {
            $n = rand(0, $alpha_length);
            $password[] = $alphabet[$n];
        }
        return implode($password); 
        echo index();
    }
    

    public function store()
    {  
 
        helper(['form', 'url']);
         
         $db      = \Config\Database::connect();
         $builder = $db->table('file');
 
        $validated = $this->validate([
            'file' => [
                'uploaded[file]',
                'mime_in[file,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[file,4096]',
            ],
        ]);
 
        $msg = 'Please select a valid file';
  
        if ($validated) {
            $avatar = $this->request->getFile('file');
            $avatar->move(WRITEPATH . 'uploads');
 
          $data = [
 
            'name' =>  $avatar->getClientName(),
            'type'  => $avatar->getClientMimeType()
          ];
 
          $save = $builder->insert($data);
          $msg = 'File has been uploaded';
        }
 
       return redirect()->to( base_url('public/index.php/form') )->with('msg', $msg);
 
    }
}

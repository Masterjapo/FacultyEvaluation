<?php

namespace App\Controllers;

use CodeIgniter\Files\File;
use App\Models\FacultyModel;

class Faculties extends BaseController
{
    protected $helpers = ['form'];

    public function index()
    {
      echo view('links');
      echo view('sidebar');
      return view('faculties', ['errors' => []]);
    }

    public function save()
    {
      echo view('links');
      echo view('sidebar');
      $model = new FacultyModel();
        $validationRule = [
          'schoolid'          => 'required|min_length[3]|max_length[20]',
          'firstname'          => 'required|min_length[3]|max_length[20]',
          'lastname'          => 'required|min_length[3]|max_length[20]',
          'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[faculties.email]',
          'userfile' => [
                'label' => 'Image File',
                'rules' => 'uploaded[userfile]'
                    . '|is_image[userfile]'
                    . '|mime_in[userfile,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    . '|max_size[userfile,2048]'
            ],
        ];
        if (! $this->validate($validationRule)) {
            $data = ['errors' => $this->validator->getErrors()];
           
            return view('faculties', $data);
        }

        $img = $this->request->getFile('userfile');

        if (! $img->hasMoved()) {
            $imageName = $img->getRandomName();
           
            $file =  $img->move('uploads/', $imageName);
            

            $data = [
              'schoolid' => $this->request->getVar('schoolid'),
              'first_name' => $this->request->getVar('firstname'),
              'last_name' => $this->request->getVar('lastname'),
              'email' => $this->request->getVar('email'),
              'uploaded_flleinfo' => $imageName];
           
            $model->save($data);
            return view('faculties', $data);
        } else {
            $data = ['errors' => 'The file has already been moved.'];

            return view('faculties', $data);
        }

        echo $imageName;
    }



    
    public function facultyList(){
      $model = new FacultyModel();
      $data['faculties'] = $model->findAll();
      echo view('links');
      echo view('sidebar');
      echo view('faculty-list', $data);
      
  }





}
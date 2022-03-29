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
          'firstname'          => 'required|min_length[3]|max_length[50]',
          'lastname'          => 'required|min_length[3]|max_length[50]',
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
            $file =  $img->move('uploads/faculty', $imageName);
            

            $data = [
              'schoolid' => $this->request->getVar('schoolid'),
              'first_name' => $this->request->getVar('firstname'),
              'last_name' => $this->request->getVar('lastname'),
              'email' => $this->request->getVar('email'),
              'uploaded_flleinfo' => $imageName
            ];
           
            $model->save($data);
            return redirect()->to('/Faculties/facultyList');
        } else {
            $data = ['errors' => 'The file has already been moved.'];

            return view('faculties', $data);
        }

        //echo $imageName;
    }

   





    
    
    public function facultyList(){

      $model = new FacultyModel();
      helper('text');




      $data = [
        'faculties' => $model->paginate(10),
        'pager' => $model->pager,
    ];


      echo view('links');
      echo view('sidebar');
      echo view('faculty-list', $data);
      
  }





  public function edit($id){
    $model = new FacultyModel();
    $data['faculties'] =$model->find($id);
    //print_r ($data);
    
    echo view('links');
    echo view('sidebar');
    return view('edit' ,$data);
    //echo 'kingina';
}


    public function update($id){
      $model = new FacultyModel();
      $faculty = $model->find($id);

      //echo $faculty['uploaded_flleinfo'];

      $file = $this->request->getFile('userfile');
      if($file->isValid() && !$file->hasMoved()){

        $oldImage = $faculty['uploaded_flleinfo'];
        if(file_exists('uploads/faculty'.$oldImage)){
          
            unlink('uploads/faculty'.$oldImage);

        }
        $imageName = $file->getRandomName();
        $file =  $file->move('uploads/faculty', $imageName);
      }else{
        $imageName = $faculty['uploaded_flleinfo'];
      }
      $data = [
        'schoolid' => $this->request->getVar('schoolid'),
        'first_name' => $this->request->getVar('firstname'),
        'last_name' => $this->request->getVar('lastname'),
        'email' => $this->request->getVar('email'),
        'uploaded_flleinfo' => $imageName
      ];
      
      $model->update($id, $data);
      return redirect()->to('/Faculties/facultyList');
      
    } 




      public function delete($id = null){
        $model = new FacultyModel();
        $data['faculties'] = $model->where('id', $id)->delete();
        return redirect()->to('/Faculties/facultyList');
        }




}




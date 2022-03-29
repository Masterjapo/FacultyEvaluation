<?php

namespace App\Controllers;

use CodeIgniter\Files\File;
use App\Models\StudentModel;

class Students extends BaseController
{
    protected $password;
    protected $helpers = ['form'];

    public function index()
    {
      echo view('links');
      echo view('sidebar');
      return view('students', ['errors' => []]);
      
    }


    public function save()
    {
      echo view('links');
      echo view('sidebar');
      $model = new StudentModel();
        $validationRule = [
          'schoolid'          => 'required|min_length[3]|max_length[20]',
          'firstname'          => 'required|min_length[3]|max_length[50]',
          'lastname'          => 'required|min_length[3]|max_length[50]',
          'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[faculties.email]',
          'current_class'          => 'required|min_length[3]|max_length[50]',
          'password'      => 'required|min_length[6]|max_length[200]',
          'userfile' => [
                'label' => 'Image File',
                'rules' => 'uploaded[userfile]'
                    . '|is_image[userfile]'
                    . '|mime_in[userfile,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
            ],
        ];


        if (! $this->validate($validationRule)) {
            $data = ['errors' => $this->validator->getErrors()];
           
            return view('students', $data);
        }

        $img = $this->request->getFile('userfile');

        if (! $img->hasMoved()) {
            $imageName = $img->getRandomName();
            $file =  $img->move('uploads/student', $imageName);
            

            $data = [
              'schoolid' => $this->request->getVar('schoolid'),
              'first_name' => $this->request->getVar('firstname'),
              'last_name' => $this->request->getVar('lastname'),
              'email' => $this->request->getVar('email'),
              'current_class' => $this->request->getVar('current_class'),
              'password' => $this->request->getVar('password'),
              'uploaded_flleinfo' => $imageName
            ];
           
            $model->save($data);
            return redirect()->to('/Students/StudentList');
        } else {
            $data = ['errors' => 'The file has already been moved.'];
            return view('students', $data);
        }

        //echo $imageName;
    }




    public function passwordGenerator($password){
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $password = array(); 
        $alpha_length = strlen($alphabet) - 1; 
        for ($i = 0; $i < 8; $i++) 
        {
            $n = rand(0, $alpha_length);
            $password[] = $alphabet[$n];
        }
        print_r (implode($password));
   }     



    public function StudentList(){

      
        $model = new StudentModel();
        helper('text');
  
        $data = [
          'students' => $model->paginate(10),
          'pager' => $model->pager,
      ];
  
     
        echo view('links');
        echo view('sidebar');
        return view('student-list ', $data);
        
    }





    public function delete($id = null){
        $model = new StudentModel();
            $data['students'] = $model->where('id', $id)->delete();
        return redirect()->to('/Students/StudentList');
        }
    




   public function edit($id){
    
    $model = new StudentModel();
    $data['students'] =$model->find($id);
    //print_r ($data);
    
    echo view('links');
    echo view('sidebar');
    return view('student-edit' ,$data);
    //echo 'kingina';
}





   public function update($id){
    
   

    $model = new StudentModel();
    $student = $model->find($id);

    //echo $student['uploaded_flleinfo'];

    $file = $this->request->getFile('userfile');
    if($file->isValid() && !$file->hasMoved()){

      $oldImage = $student['uploaded_flleinfo'];
      if(file_exists('uploads/student'.$oldImage)){
        
          unlink('uploads/student'.$oldImage);

      }
      $imageName = $file->getRandomName();
      $file =  $file->move('uploads/student', $imageName);
    }else{
      $imageName = $student['uploaded_flleinfo'];
    }
    $data = [
      'schoolid' => $this->request->getVar('schoolid'),
      'first_name' => $this->request->getVar('firstname'),
      'last_name' => $this->request->getVar('lastname'),
      'email' => $this->request->getVar('email'),
      'current_class' => $this->request->getVar('current_class'),
      'uploaded_flleinfo' => $imageName
    ];
    
    $model->update($id, $data);
    return redirect()->to('/Students/StudentList');

    
  } 






//   public function aaa()
//     {
//         $session = session();
//         $model = new StudentModel();
//         $schoolid = $this->request->getVar('schoolid');
//         $password = $this->request->getVar('password');
//         $data = $model->where('schoolid', $schoolid)->first();
        
//         if($data){
//             $pass = $data['password'];
//             $verify_pass = password_verify($password, $pass);
//             if($password == $pass){
//                 $ses_data = [
//                     'id'       => $data['id'],
//                     'schoolid'     => $data['schoolid'],
//                     'logged_in'     => TRUE
//                 ];
//                 $session->set($ses_data);
//                 //echo "success";
//                 return redirect()->to('/Students/StudentList');
//             }else{
//                 $session->setFlashdata('msg', 'Wrong Password');
//                 return redirect()->to('/register');
//             }
//         }else{
//             $session->setFlashdata('msg', 'schoolid not Found');
//             return redirect()->to('/faculties');
//         }

//         }

      
    



//     public function login(){



//         $session = session();
//         $model = new StudentModel();
//         $schoolid = $this->request->getVar('schoolid');
//         $password = $this->request->getVar('password');
//         $data = $model->where('schoolid', $schoolid)->first();
        
//         if($data){
//             $pass = $data['password'];
//             $verify_pass = password_verify($password, $pass);
//             if($password == $pass){
//                 $ses_data = [
//                     'id'       => $data['id'],
//                     'schoolid'     => $data['schoolid'],
//                     'logged_in'     => TRUE
//                 ];
//                 $session->set($ses_data);
//                 //echo "success";
//                 return redirect()->to('/Students/StudentList');
//             }else{
//                 $session->setFlashdata('msg', 'Wrong Password');
//                 return redirect()->to('/register');
//             }
//         }else{
//             $session->setFlashdata('msg', 'schoolid not Found');
//             return redirect()->to('/faculties');
//         }



//     //     $model = new StudentModel();
//     //     $schoolid = $this->request->getVar('schoolid');
//     //     $password = $this->request->getVar('password');
//     //     $data = $model->where('schoolid', $schoolid)->first();
//     //     $pass = $data['password'];
//     //     if($data){
//     //     if ($password == $pass){
            
//     //         return redirect()->to('/Students/StudentList');
//     //     }
//     // }

//     //     else{
//     //         echo "wrong";
//     //         return redirect()->to('/Students/StudentList');
//     //     }

//         echo view('studlogin');
//     }


}




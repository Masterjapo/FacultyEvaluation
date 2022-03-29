<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\StudentModel;
  
class Login extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('login');
    } 
  
    public function studentLogin()
    {
        helper(['form']);
        echo view('studlogin');
    } 







    public function auth()
    {
        
        $session = session();
        $model = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $model->where('username', $username)->first();
      
        if($data){
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'id'       => $data['id'],
                    'username'     => $data['username'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/Home');
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg', 'username not Found');
            return redirect()->to('/login');
        }
    }




    // public function studentAuth()
    // {
    //     $session = session();
    //     $model = new StudentModel();
    //     $schoolid = $this->request->getVar('schoolid');
    //     $password = $this->request->getVar('password');
    //     $data = $model->where('schoolid', $schoolid)->first();
        
    //     if($data){
    //         $pass = $data['password'];
    //         $verify_pass = password_verify($password, $pass);
    //         if($password == $pass){
    //             $ses_data = [
    //                 'id'       => $data['id'],
    //                 'schoolid'     => $data['schoolid'],
    //                 'logged_in'     => TRUE
    //             ];
    //             $session->set($ses_data);
    //             //echo "success";
    //             return redirect()->to('/Students/StudentList');
    //         }else{
    //             $session->setFlashdata('msg', 'Wrong Password');
    //             return redirect()->to('/register');
    //         }
    //     }else{
    //         $session->setFlashdata('msg', 'schoolid not Found');
    //         return redirect()->to('/faculties');
    //     }
        
    // }



    
    // public function studentLogout()
    // {
    //     $model = new StudentModel();
    //     $student = $model->find($id);
    //     $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    //     $password = array(); 
    //     $alpha_length = strlen($alphabet) - 1; 
    //     for ($i = 0; $i < 8; $i++) 
    //     {
    //         $n = rand(0, $alpha_length);
    //         $password[] = $alphabet[$n];
    //     }
    //     $newPassword = implode($password);
    
    
    //     $data = [
    //         'password' => $newPassword,
    //       ];
          
    //       $model->update($id, $data);
    //       return redirect()->to('/Students/StudentList');
    // }
} 



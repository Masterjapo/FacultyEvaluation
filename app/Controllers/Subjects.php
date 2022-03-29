<?php

namespace App\Controllers;
use App\Models\SubjectModel;
class Subjects extends BaseController
{
function index() {
    $model = new SubjectModel();
    helper('text');
    $data['subjects'] =$model->findAll();
    echo view('links');
    echo view('sidebar');
    return view('subject', $data);
}
public function save()
{
    helper(['form']);
    $rules = [
        'subject_code'      => 'required|min_length[1]|max_length[40]',
        'subject'      => 'required|min_length[1]|max_length[40]',
        'description'      => 'required|min_length[1]|max_length[255]',
    ];
    if($this->validate($rules)){
        $model = new SubjectModel();
        $data = [
            'subject_code' => $this->request->getVar('subject_code'),
            'subject' => $this->request->getVar('subject'),
            'description' => $this->request->getVar('description'),
        ];
        $model->save($data);
        return redirect()->to('/Subjects');
    }else{
        $data['validation'] = $this->validator;
        echo view('/Faculties', $data);
    }
}
public function delete($id = null){
    $model = new SubjectModel();
    $data['subjects'] = $model->where('id', $id)->delete();
    return redirect()->to('/Subjects');
    }
public function edit($id){
        $model = new SubjectModel();
        $data['subjects'] =$model->find($id);
        echo view('links');
        echo view('sidebar');
        return view('update-subject' ,$data);
    }
public function update($id){
    $model = new SubjectModel();
    $subjects = $model->find($id);
    $data = [
        'subject_code' => $this->request->getVar('subject_code'),
            'subject' => $this->request->getVar('subject'),
            'description' => $this->request->getVar('description'),
    ];
    $model->update($id, $data);
    return redirect()->to('/Subjects');
    } 
}

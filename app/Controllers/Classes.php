<?php

namespace App\Controllers;
use App\Models\ClassModel;
class Classes extends BaseController
{
function index() {
    $model = new ClassModel();
    helper('text');
    $data['classes'] =$model->findAll();
    echo view('links');
    echo view('sidebar');
    return view('class', $data);
}
public function save()
{
    helper(['form']);
    $rules = [
        'curriculum'      => 'required|min_length[1]|max_length[40]',
        'year_level'      => 'required|min_length[1]|max_length[40]',
        'section'      => 'required|min_length[1]|max_length[40]',
    ];
    if($this->validate($rules)){
        $model = new ClassModel();
        $data = [
        'curriculum' => $this->request->getVar('curriculum'),
        'year_level' => $this->request->getVar('year_level'),
        'section' => $this->request->getVar('section'),
        ];
        $model->save($data);
        return redirect()->to('/Classes');
    }else{
        $data['validation'] = $this->validator;
        echo view('/Classes', $data);
    }
}
public function delete($id = null){
    $model = new ClassModel();
    $data['classes'] = $model->where('id', $id)->delete();
    return redirect()->to('/Classes');
    }
public function edit($id){
        $model = new ClassModel();
        $data['classes'] =$model->find($id);
        echo view('links');
        echo view('sidebar');
        return view('update-class' ,$data);
    }
public function update($id){
    $model = new ClassModel();
    $classes = $model->find($id);
    $data = [
        'curriculum' => $this->request->getVar('curriculum'),
        'year_level' => $this->request->getVar('year_level'),
        'section' => $this->request->getVar('section'),
    ];
    $model->update($id, $data);
    return redirect()->to('/Classes');
    } 
}

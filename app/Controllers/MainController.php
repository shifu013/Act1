<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MainModel;

class MainController extends BaseController
{
    public function test()
    {
        $M = new MainModel();
        $data['main'] = $M->findAll();
        //var_dump($data);
        return view('main', $data);
    }
    public function save()
    {
        $data = [
        'studentID' => $this -> request -> getPost('studentID'),
        'fullName' => $this -> request -> getPost('fullName'),
        'yearLevel' => $this -> request -> getPost('yearLevel'),
        'Program' => $this -> request -> getPost('Program'),
        ];
        $main = new MainModel();
        $main -> save ($data);
    }
    public function index()
    {
        
    }
}

<?php

namespace App\Controllers;

use App\Models\LoginModel;

class Panel extends BaseController
{
    public function index(){
        echo view('templates/header');
		echo view('page/panel/index');
        echo view('templates/footer');
    }
}
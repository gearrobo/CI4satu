<?php

namespace App\Controllers;
use App\Models\UpsModel;
use App\Models\UpsListModel;

class Ups extends BaseController
{
    public function index(){
        $ups = new UpsModel();
        $data = $ups->getUps();
        $upslist = new UpsListModel();
        $list = $upslist->getUpsList();
        echo view('templates/header');
		echo view('page/ups/index', compact('data','list'));
        echo view('templates/footer');
    }
}
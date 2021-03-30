<?php

namespace App\Controllers;

class Sensor extends BaseController
{
	public function index()
	{
        echo view('templates/header');
		echo view('page/sensor/index');
        echo view('templates/footer');
	}

}

<?php namespace App\Controllers;
 
use App\Models\UserModel;
use App\Models\DcModel;

class Setting extends BaseController
{
	public function index()
	{
		 $users = new UserModel();
         $data = $users->getUsers();

		 $dc = new DcModel();
		 $dcim = $dc->getDc();
        
        echo view('templates/header');
		echo view('page/setting/index', compact('data','dcim'));
        echo view('templates/footer');
	}

	public function addLocation()
	{
		 $users = new UserModel();
         $data = $users->getUsers();

		 $dc = new DcModel();
		 $dcim = $dc->getDc();
        
        echo view('templates/header');
		echo view('page/setting/addlocation', compact('data','dcim'));
        echo view('templates/footer');
	}

}

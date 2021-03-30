<?php

namespace App\Controllers;

use App\Models\LoginModel;

class Home extends BaseController
{
	public function __construct()
	{
		helper('form');
	}
	
	public function index()
	{
		return view('auth/login');
	}

	public function register()
	{
		session();
		$data = [
			'validate' => \Config\Services::validation(),
		];
		return view('auth/register', $data);
	}

	public function cek_login()
	{
		$username = $this->request->getPost('username');
		$password = $this->request->getPost('password');
		
		echo $username;
		echo $password;
	}

}

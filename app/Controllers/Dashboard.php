<?php namespace App\Controllers;
 
use App\Models\DashboardModel;

class Dashboard extends BaseController
{
	public function index()
	{
		$locations = new DashboardModel();
        $data = $locations->getLocations();

		echo view('templates/header');
		echo view('page/dashboard/index', compact('data'));
		echo view('templates/footer');
	}

}
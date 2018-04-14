<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminHome;

class AdminHomeController extends Controller
{
    public function index(){
		$datas = AdminHome::all();
    	return view('dashboard-admin.admin-home', ['datas' => $datas]);
	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminHome;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class AdminHomeController extends Controller
{
	public function __construct(){
    	$this->middleware('admin');
    }

    public function index(){
		$datas = AdminHome::all();
    	return view('dashboard-admin.admin-home', ['datas' => $datas]);
	}
}

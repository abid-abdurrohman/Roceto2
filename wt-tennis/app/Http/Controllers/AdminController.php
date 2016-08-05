<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Http\Requests; 
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\Input;
use Redirect;
use Validator;
use Session;
use Illuminate\Http\Request;

class AdminController extends Controller
{
	protected $rules = [
    	'username' => ['required'], 
    	'password' => ['required'],
    ];

    public function index()
	{
		return view('admin.log.login');
	}

	public function pro_login()
	{
		

	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\input;
use App\Individual;
use App\Http\Controllers\Controllers;
use Redirect;
use App\Http\Requests;

class Reg_caturController extends Controller
{
    	protected $rules = [ 
		'fullname' => ['required'], 
        'nickname' => ['required'],
        'no_hp' => ['required'],
        'ttl' => ['required'],
    ];

    public function index() 
    { 
    	return view('reg_match.reg_catur'); 
    }

    public function create() 
    { 
    	return view('reg_match.reg_catur'); 
    }

    public function store(Request $request) 
    {
        $this->validate($request, $this->rules); 
    	$input = Input::all(); 
    	Individual::create( $input ); 
    	return Redirect::route('reg_catur.index'); 
    }


}

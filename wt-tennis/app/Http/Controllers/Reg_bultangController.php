<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\input;
use App\Model\Group;
use App\Http\Controllers\Controllers;
use Redirect;
use App\Http\Requests;

class Reg_bultangController extends Controller
{
    protected $rules = [
        'nama_tim' => ['required'],
        'nama_kapten' => ['required'],
        'no_hp' => ['required'],
        'warna_kostum' => ['required'],
        'jml_pemain' => ['required']
    ];

    public function index()
    {
    	return view('reg_match.reg_bultang');
    }

    public function create()
    {
    	return view('reg_match.reg_bultang');
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->rules);
    	$input = Input::all();
    	Group::create( $input );
    	return Redirect::route('reg_bultang.index');
    }

    public function show($id)
    {
    	$group = Group::find($id);
    	return view('reg_match.reg_bultang', compact('group'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Group;
use App\Model\Individual;
use App\Http\Controllers\Controllers;
use App\Http\Requests;

class RegisterController extends Controller
{
    protected $rules = [
        'nama_tim' => ['required'],
        'nama_kapten' => ['required'],
        'no_hp' => ['required'],
        'warna_kostum' => ['required'],
        'jml_pemain' => ['required']
    ];

    public function regBasket()
    {
        return view('reg_match.reg_basket');
    }

    public function store_regBasket(Request $request)
    {
        $this->validate($request, $this->rules);
        $input = $request->all();
        Group::create($input);
        return redirect()->action('RegisterController@regBasket');
    }

    public function regBultang()
    {
        return view('reg_match.reg_bultang');
    }

    public function store_regBultang(Request $request)
    {
        $this->validate($request, $this->rules);
        $input = $request->all();
        Group::create($input);
        return redirect()->action('RegisterController@regBultang');
    }

    public function regCatur()
    {
        return view('reg_match.reg_catur');
    }

    public function store_regCatur(Request $request)
    {
        $this->validate($request, $this->rules);
        $input = $request->all();
        Individual::create($input);
        return redirect()->action('RegisterController@regCatur');
    }

    public function regFutsal()
    {
        return view('reg_match.reg_futsal');
    }

    public function store_regFutsal(Request $request)
    {
        $this->validate($request, $this->rules);
        $input = $request->all();
        Group::create($input);
        return redirect()->action('RegisterController@regFutsal');
    }

    public function regLompat()
    {
        return view('reg_match.reg_lompat');
    }

    public function store_regLompat(Request $request)
    {
        $this->validate($request, $this->rules);
        $input = $request->all();
        Individual::create($input);
        return redirect()->action('RegisterController@regLompat');
    }

    public function regMarathon()
    {
        return view('reg_match.reg_marathon');
    }

    public function store_regMarathon(Request $request)
    {
        $this->validate($request, $this->rules);
        $input = $request->all();
        Individual::create($input);
        return redirect()->action('RegisterController@regMarathon');
    }

    public function regSwim()
    {
        return view('reg_match.reg_swim');
    }

    public function store_regSwim(Request $request)
    {
        $this->validate($request, $this->rules);
        $input = $request->all();
        Individual::create($input);
        return redirect()->action('RegisterController@regSwim');
    }

    public function regVoli()
    {
        return view('reg_match.reg_voli');
    }

    public function store_regVoli(Request $request)
    {
        $this->validate($request, $this->rules);
        $input = $request->all();
        Group::create($input);
        return redirect()->action('RegisterController@regVoli');
    }
}

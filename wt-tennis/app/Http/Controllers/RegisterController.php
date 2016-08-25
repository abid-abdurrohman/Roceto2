<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Participant;
use App\Model\Category;
use App\Model\Event;
use App\Http\Controllers\Controllers;
use App\Http\Requests;

class RegisterController extends Controller
{
    protected $rules = [
        'nama_tim' => ['required'],
        'nama_kapten' => ['required'],
        'no_hp' => ['required'],
        'warna_kostum' => ['required'],
        'jumlah_pemain' => ['required'],
        'atas_nama' => ['required'],
        'no_rek' => ['required'],
        'nama_bank' => ['required'],
    ];

    public function index($id)
    {
        $category = Category::findOrFail($id);
        $event_id = $category->event_id;
        $event = Event::findOrFail($event_id);
        return view('register.register', compact('category', 'event'));
    }

    public function store($id, Request $request)
    {
        $this->validate($request, $this->rules);
        $input = $request->all();
        $input['category_id'] = $id;
        $input['status'] = 'waiting';
        Participant::create($input);
        return redirect()->action('HomeController@index');
    }

}

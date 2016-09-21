<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Participant;
use App\Model\Category;
use App\Model\Event;
use App\Http\Controllers\Controllers;
use App\Http\Requests;

use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    protected $rules = [
        'nama_tim' => ['required'],
        'logo_tim' => ['required'],
        'no_hp' => ['required'],
        'email' => ['required'],
        'warna_kostum' => ['required'],
        'jumlah_pemain' => ['required'],
        
    ];

    public function index($id)
    {
        $events = Event::findOrFail($id);
        return view('register.register', compact('events'));
    }

    public function store($id, Request $request)
    {
        $this->validate($request, $this->rules);
        $input = $request->all();
         $photo = $request->logo_tim->getClientOriginalName();
        $destination = 'images/participant/';
        $request->logo_tim->move($destination, $photo);
        $input['logo_tim'] = $destination.$photo;
        $input['event_id'] = $id;
        $input['status'] = 'waiting';
        $input['user_id'] = Auth::user()->id;
        Participant::create($input);
        return redirect()->action('RegisterController@index', $id);
    }


}

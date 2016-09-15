<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Category;
use App\Model\Participant;
use App\Model\Event;
use App\Model\BuktiPembayaran;

use App\Http\Controllers\Controllers;
use App\Http\Requests;

class BuktiBayarController extends Controller
{
    protected $rules = [
    	'atas_nama' => ['required'],
    	'no_rek'	=> ['required'],
    	'bank'		=> ['required'],
    	'thumbnail'	=> ['required'],
    ];

    public function store($id, Request $request)
    {
    	return dd($input);
    	$this ->validate($request, $this->$rules);
    	$input = $request->all();
    	
    	$photo = $request->thumbnail->getClientOriginalName();
        $destination = 'images/bukti/';
        $request->thumbnail->move($destination, $photo);

        $input['thumbnail'] = $destination.$photo;
        $input['participant_id'] = $id;

    	BuktiPembayaran::create($input);
        return redirect()->action('HomeController@index');

    }
}

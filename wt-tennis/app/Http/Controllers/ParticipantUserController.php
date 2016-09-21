<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\Participant;

class ParticipantUserController extends Controller
{
		public function index($id)
    {
        $participants = Participant::findOrFail($id);
        return view('participant.index', compact('participants'));
    }

    public function update($id, Request $request)
    {
    	 /*$this->validate($request, [
            'nama_tim' => ['required'],
            'no_hp' => ['required'],
            'email' => ['required'],
            'warna_kostum' => ['required'],
            'jumlah_pemain' => ['required'],
        ]);
    	$input = $request->all();
        $participants = Participant::findOrFail($id);
        $input['category_id'] = $request->id;
        $participants->update($input);
        return redirect()->action('ParticipantUserController@index',$id)->with('info','Participant has been edited');*/
    }

}

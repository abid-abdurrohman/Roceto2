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
   
}

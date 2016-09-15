<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Match;
use App\Model\Participant;
use App\Http\Requests;

class EventStreamController extends Controller
{
    public function index()
    {
        $matches = Match::paginate();
        return view('video.index', compact('matches'));
    }

    public function show($id)
    {
        $matches = Match::findOrFail($id);
        $participants = Participant::all();
        $videos = Match::inRandomOrder()->where('category_id', $matches->id)->limit(6)->get();
        return view('video.video', compact('matches', 'participants', 'videos'));
    }
}

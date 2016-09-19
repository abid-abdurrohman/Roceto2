<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Event;
use App\Model\Match;
use App\Http\Requests;

class EventMatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::paginate(5);
        return view('admin.match.event', compact('events'));
    }

    public function show($id)
    {
        $events = Event::findOrFail($id);
        $matches = Match::where('event_id', $id)->paginate(5);
        return view('admin.match.index', compact('matches', 'events'));
    }

}

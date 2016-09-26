<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Event;
use App\Model\Rank;
use App\Http\Requests;

class EventRankController extends Controller
{
    public function index()
    {
        $events = Event::paginate(5);
        return view('admin.rank.event', compact('events'));
    }

    public function show($id)
    {
        $events = Event::findOrFail($id);
        $ranks = Rank::where('event_id', $id)->paginate(5);
        return view('admin.rank.index', compact('ranks', 'events'));
    }
}

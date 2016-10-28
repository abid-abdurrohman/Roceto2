<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Event;
use App\Model\Match;
use App\Model\Match_team;
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
        $match_teams = Match_team::join('matches', 'matches.id', '=', 'match_teams.match_id')
          ->join('participants', 'participants.id', '=', 'match_teams.participant_id')
          ->select('participants.nama_tim as nama_participant', 'participants.logo_tim as logo_participant',
          'match_teams.score as team_score', 'match_teams.comment as team_comment', 'matches.*')
          ->where('match_id', $id)->get()->toArray();
        $videos = Match::inRandomOrder()->where('event_id', $matches->event_id)->limit(3)->get();
        return view('video.video', compact('matches', 'participants', 'videos', 'match_teams'));
    }
}

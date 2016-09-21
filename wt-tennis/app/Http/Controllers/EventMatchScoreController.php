<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Event;
use App\Model\Match;
use App\Model\Match_team;
use App\Http\Requests;

class EventMatchScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matches = Match::join('events', 'events.id', '=', 'matches.event_id')
          ->select('events.nama as nama_event', 'matches.*')->paginate(5);
        return view('admin.match_score.event', compact('matches'));
    }

    public function show($id)
    {
        $matches = Match::findOrFail($id);
        $match_teams = Match_team::join('matches', 'matches.id', '=', 'match_teams.match_id')
          ->join('participants', 'participants.id', '=', 'match_teams.participant_id')
          ->select('participants.nama_tim as nama_participant', 'participants.logo_tim as logo_participant',
          'match_teams.score as team_score', 'match_teams.comment as team_comment', 'matches.*')
          ->where('match_id', $id)->get()->toArray();
        $match_team = Match_team::where('match_id', $id)->get()->toArray();
        return view('admin.match_score.index', compact('matches', 'match_teams', 'match_team'));
    }

    public function update(Request $request, $id, $id_team)
    {
        $this->validate($request, [
            'score' => 'required',
            'comment' => 'required',
        ]);
        $input = $request->all();
        $match_teams = Match_team::findOrFail($id_team);
        $match_teams->update($input);
        return redirect()->action('EventMatchScoreController@show', [$id])->with('info', 'Match has been updated');
    }

    public function endmatch($id)
    {
        $match = Match::findOrFail($id);
        $match['status'] = 'done';
        $match->update();
        return redirect()->action('EventMatchScoreController@index')->with('info','Match has been done');
    }

    public function startmatch($id)
    {
        $match = Match::findOrFail($id);
        $match['status'] = 'playing';
        $match->update();
        return redirect()->action('EventMatchScoreController@show', [$id])->with('info','Match has start');
    }
}

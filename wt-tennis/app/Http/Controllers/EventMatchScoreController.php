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
     public function event()
     {
         $events = Event::paginate(5);
         return view('admin.match_score.event', compact('events'));
     }

    public function index($id)
    {
        $events = Event::findOrFail($id);
        $matches = Match::join('events', 'events.id', '=', 'matches.event_id')
          ->select('events.nama as nama_event', 'matches.*')->where('matches.event_id',$id)->paginate(5);
        return view('admin.match_score.match', compact('events', 'matches'));
    }

    public function show($id, $id_match)
    {
        $events = Event::findOrFail($id);
        $matches = Match::findOrFail($id_match);
        $match_teams = Match_team::join('matches', 'matches.id', '=', 'match_teams.match_id')
          ->join('participants', 'participants.id', '=', 'match_teams.participant_id')
          ->select('participants.nama_tim as nama_participant', 'participants.logo_tim as logo_participant',
          'match_teams.score as team_score', 'match_teams.comment as team_comment', 'matches.*')
          ->where('match_id', $id_match)->get()->toArray();
        $match_team = Match_team::where('match_id', $id_match)->get()->toArray();
        return view('admin.match_score.index', compact('events', 'matches', 'match_teams', 'match_team'));
    }

    public function update(Request $request, $id, $id_match, $id_team)
    {
        $this->validate($request, [
            'score' => 'required',
            'comment' => 'required',
        ]);
        $input = $request->all();
        $match_teams = Match_team::findOrFail($id_team);
        $match_teams->update($input);
        return redirect()->action('EventMatchScoreController@show', [$id, $id_match])->with('info', 'Match has been updated');
    }

    public function endmatch($id, $id_match)
    {
        $match = Match::findOrFail($id_match);
        $match['status'] = 'done';
        $match->update();
        // $match_teams = Match_team::where('match_id', $id_match)->get();
        // foreach ($match_teams as $match_team){
        //     $team_list[$match_team->id] = $match_team->score;
        // }
        //
        // foreach ($match_teams as $match_team){
        //     $teams = Match_team::findOrFail($match_team->id);
        //     $teams['status'] = "win"
        // }
        return redirect()->action('EventMatchScoreController@index', [$id])->with('info','Match has been done');
    }

    public function startmatch($id, $id_match)
    {
        $match = Match::findOrFail($id_match);
        $match['status'] = 'playing';
        $match->update();
        return redirect()->action('EventMatchScoreController@show', [$id, $id_match])->with('info','Match has start');
    }
}

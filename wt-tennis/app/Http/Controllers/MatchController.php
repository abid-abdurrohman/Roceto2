<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Participant;
use App\Model\Event;
use App\Model\Match;
use App\Model\Member;
use App\Model\Match_team;
use App\Http\Requests;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index($id)
    {
       /* $events = Event::findOrFail($id);
        $matches = Match::where('event_id', $id)->paginate(5);
        return view('admin.match.index', compact('matches', 'events'));*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
       /* $events = Event::findOrFail($id);
        $matches = Match::where('event_id', $id)->paginate(5);
        return view('admin.match.index', compact('matches', 'events'));*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $this->validate($request, [
            'no_match' => 'required',
            'nama' => 'required',
            'waktu' => 'required',
            'tempat' => 'required',
            'youtube' => 'required',
            'deskripsi' => 'required',
        ]);
        $input = $request->all();
        $events = Event::findOrFail($id);
        $input['event_id'] = $events->id;
        $input['status'] = "available";
        Match::create($input);
        return redirect()->action('EventMatchController@show', [$events->id])->with('success', 'Match has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $id_match)
    {
        $events = Event::findOrFail($id);
        $matches = Match::findOrFail($id_match);
        $match_teams = Match_team::where('match_id', $id_match)->join('participants', 'participants.id', '=', 'match_teams.participant_id')
          ->select('participants.nama_tim as nama_participant', 'match_teams.*')->get();
        $participants = Participant::where('event_id', $id)->lists('nama_tim', 'id');
        return view('admin.match.show', compact('events', 'matches', 'participants', 'match_teams'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $id_match)
    {
        $events = Event::findOrFail($id);
        $matches = Match::findOrFail($id_match);
        return view('admin.match.edit', compact('events', 'matches'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $id_match)
    {
        $this->validate($request, [
            'no_match' => 'required',
            'nama' => 'required',
            'waktu' => 'required',
            'tempat' => 'required',
            'youtube' => 'required',
            'deskripsi' => 'required',
        ]);
        $input = $request->all();
        $events = Event::findOrFail($id);
        $matches = Match::findOrFail($id_match);
        $input['status'] = "available";
        $matches->update($input);
        return redirect()->action('EventMatchController@show', [$events->id])->with('info', 'Match has been edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $id_match)
    {
        $events = Event::findOrFail($id);
        $match = Match::findOrFail($id_match);
        $match->delete();
        return redirect()->action('EventMatchController@show', [$events->id])->with('danger', 'Event has been deleted');
    }
}

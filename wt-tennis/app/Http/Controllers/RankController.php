<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Event;
use App\Model\Rank;
use App\Http\Requests;

class RankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
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
            'title' => 'required',
            'deskripsi' => 'required',
            'point' => 'required',
        ]);
        $input = $request->all();
        $events = Event::findOrFail($id);
        $input['event_id'] = $events->id;
        Rank::create($input);
        return redirect()->action('EventRankController@show', [$events->id])->with('success', 'Rank has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $id_rank)
    {
        $rank = Rank::findOrFail($id_rank);
        $events = Event::findOrFail($id);
        return view('admin.rank.show', compact('rank', 'events'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $id_rank)
    {
        $ranks = Rank::findOrFail($id_rank);
        $events = Event::findOrFail($id);
        return view('admin.rank.edit', compact('ranks', 'events'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $id_rank)
    {
        $this->validate($request, [
            'title' => 'required',
            'deskripsi' => 'required',
            'point' => 'required',
        ]);
        $input = $request->all();
        $events = Event::findOrFail($id);
        $rank = Rank::findOrFail($id_rank);
        $input['event_id'] = $events->id;
        $rank->update($input);
        return redirect()->action('EventRankController@show', [$events->id])->with('info', 'Rank has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $id_rank)
    {
        $events = Event::findOrFail($id);
        $ranks = Rank::findOrFail($id_rank);
        $ranks->delete();
        return redirect()->action('EventRankController@show', [$events->id])->with('danger','Rank has been deleted');
    }
}

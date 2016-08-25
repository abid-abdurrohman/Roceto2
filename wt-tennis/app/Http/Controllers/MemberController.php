<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Participant;
use App\Model\Member;
use App\Http\Requests;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $participant = Participant::findOrFail($id);
        return view('admin.member.index', compact('participant'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $participant = Participant::findOrFail($id);
        return view('admin.member.create', compact('participant'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'tgl_lhr' => 'required',
            'no_hp' => 'required',
            'posisi' => 'required',
            'no_punggung' => 'required',
        ]);
        $input = $request->all();
        $participant = Participant::findOrFail($id);
        $input['participant_id'] = $participant->id;
        Member::create($input);
        return redirect()->action('ParticipantController@show', $participant->id)->with('success', 'Member has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $id_member)
    {
        $participant = Participant::findOrFail($id);
        $member = Member::findOrFail($id_member);
        return view('admin.member.show', compact('participant', 'member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $id_member)
    {
        $participant = Participant::findOrFail($id);
        $member = Member::findOrFail($id_member);
        return view('admin.member.edit', compact('participant', 'member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $id_member)
    {
        $this->validate($request, [
            'nama' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'tgl_lhr' => 'required',
            'no_hp' => 'required',
            'posisi' => 'required',
            'no_punggung' => 'required',
        ]);
        $participant = Participant::findOrFail($id);
        $member = Member::findOrFail($id_member);
        $input = $request->all();
        $member->update($input);
        return redirect()->action('ParticipantController@show', [$participant->id])->with('info', 'Member has been edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $id_member)
    {
        $participant = Participant::findOrFail($id);
        $member = Member::findOrFail($id_member);
        $member->delete();
        return redirect()->action('ParticipantController@show', $participant->id)->with('danger', 'Member has been deleted');
    }
}

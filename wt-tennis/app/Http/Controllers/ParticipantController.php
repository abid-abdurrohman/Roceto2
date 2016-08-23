<?php

namespace App\Http\Controllers;

use App\Model\Participant;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $participants = Participant::paginate(5);

        return view('admin.participant.index', compact('participants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.participant.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_tim' => 'required',
            'nama_kapten' => 'required',
            'no_hp' => 'required',
            'warna_kostum' => 'required',
            'jml_pemain' => 'required',
        ]);
        $input = $request->all();
        Participant::create($input);
        return redirect()->action('ParticipantController@index')->with('success', 'Participant has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $participants = Participant::findOrFail($id);

        return view('admin.participant.show', compact('participants'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $participants = Participant::findOrFail($id);

        return view('admin.participant.edit', compact('participants'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'detail' => 'required',
        ]);
        $participants = Participant::findOrFail($id);
        $participants->update($request->all());
        return redirect()->action('participantController@index')->with('info','participant has been edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $participants = participant::findOrFail($id);
        $participants->delete();
        return redirect()->action('participantController@index')->with('danger','participant has been deleted');
    }

     public function search(Request $request)
    {
        $temp_search = $request->get('search');
        $search = '%'.$temp_search.'%';
        $participants = DB::table('participants')
                ->where('id', 'LIKE', $search)
                ->orwhere('nama', 'LIKE', $search)
                ->orwhere('detail', 'LIKE', $search)
                ->paginate(5);

        return view('admin.participant.search', compact('participants','temp_search'));
    }
}

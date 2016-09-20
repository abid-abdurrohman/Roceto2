<?php

namespace App\Http\Controllers;

use App\Model\Participant;
use App\Model\Category;
use App\Model\Event;
use App\Model\Member;
use App\Model\BuktiPembayaran;
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
        $events = Event::lists('nama','id');
        $participants = Participant::join('events', 'events.id', '=', 'participants.event_id')
          ->select('events.nama as nama', 'participants.*')->paginate(5);
        return view('admin.participant.index', compact('participants', 'events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       /* $category = Category::lists('nama','id');
        return view('admin.participant.create', compact('category'));*/
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
            'nama_tim' => ['required'],
            'logo_tim' => ['required'],
            'no_hp' => ['required'],
            'email' => ['required'],
            'warna_kostum' => ['required'],
            'jumlah_pemain' => ['required'],
        ]);
        $input = $request->all();
        $input['status'] = 'waiting';
        $photo = $request->thumbnail->getClientOriginalName();
        $destination = 'images/participant/';
        $request->thumbnail->move($destination, $photo);
        $input['thumbnail'] = $destination.$photo;
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
        $participants = Participant::join('events', 'events.id', '=', 'participants.event_id')
          ->select('events.nama as nama', 'participants.*')->findOrFail($id);
        $members = Member::where('participant_id', $id)->get();
        return view('admin.participant.show', compact('participants', 'members'));
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
            'nama_tim' => ['required'],
            'logo_tim' => ['required'],
            'no_hp' => ['required'],
            'email' => ['required'],
            'warna_kostum' => ['required'],
            'jumlah_pemain' => ['required'],
        ]);
        $participants = Participant::findOrFail($id);
        $input = $request->all();
        $input['event_id'] = $participants->event_id;
        $photo = $request->logo_tim->getClientOriginalName();
        $destination = 'images/participant/';
        $request->logo_tim->move($destination, $photo);
        $input['logo_tim'] = $destination.$photo;
        $participants->update($input);
        return redirect()->action('ParticipantController@show', compact('id'))->with('info','Participant has been edited');
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
        return redirect()->action('ParticipantController@index')->with('danger','Participant has been deleted');
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

    public function validation($id)
    {
        $participants = participant::findOrFail($id);
        $participants['status'] = 'validated';
        $participants->update();
        return redirect()->action('ParticipantController@bukti_pembayaran', compact('id'))->with('info','Participant has been validated');
    }

    public function bukti_pembayaran($id)
    {
        $bukti_pembayaran = BuktiPembayaran::where('participant_id', $id)->first();
        $participant=participant::findOrFail($id);
        return view('admin.participant.bukti_pembayaran.formin', compact('bukti_pembayaran', 'participant'));
    }
}

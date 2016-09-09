<?php

namespace App\Http\Controllers;

use App\Model\Participant;
use App\Model\Category;
use App\Model\Event;
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
        $participants = Participant::join('categories', 'categories.id', '=', 'participants.category_id')
          ->select('categories.nama as nama_category', 'participants.*')->paginate(5);
        $category = Category::selectRaw('categories.id, categories.nama, categories.event_id')
              ->leftJoin('events','events.id','=','categories.event_id')->get();
        return view('admin.participant.index', compact('participants', 'events', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::lists('nama','id');
        return view('admin.participant.create', compact('category'));
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
            'no_hp' => ['required'],
            'email' => ['required'],
            'warna_kostum' => ['required'],
            'jumlah_pemain' => ['required'],
            'kategori' => ['required'],
        ]);
        $input = $request->all();
        $input['category_id'] = $request->kategori;
        $input['status'] = 'waiting';
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
        $participants = Participant::findOrFail($id)->join('categories', 'categories.id', '=', 'participants.category_id')
          ->select('categories.nama as nama_category', 'participants.*')->first();
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
        $category = Category::lists('nama','id');
        return view('admin.participant.edit', compact('participants', 'category'));
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
            'no_hp' => ['required'],
            'email' => ['required'],
            'warna_kostum' => ['required'],
            'jumlah_pemain' => ['required'],
            'kategori' => ['required'],
        ]);
        $participants = Participant::findOrFail($id);
        $participants['category_id'] = $request->kategori;
        $participants->update($request->all());
        return redirect()->action('ParticipantController@index')->with('info','Participant has been edited');
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
        return redirect()->action('ParticipantController@index')->with('info','Participant has been validated');
    }
}

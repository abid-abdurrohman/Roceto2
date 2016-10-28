<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;

use App\Model\Participant;
use App\Model\Category;
use App\Model\Event;
use App\Model\Member;
use App\Model\BuktiPembayaran;
use App\Model\Pemasukan;
use App\Model\User;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   /* public function show_event($id)
    {
        $events = Event::findOrFail($id);
        $participants = Participant::join('events', 'events.id', '=', 'participants.event_id')->where('events.id' , $id)
          ->select('events.nama as nama_event, events.id as event_id', 'participants.*')->paginate(5);
        return view('admin.participant.index', compact('participants', 'events'));
    }
*/


    /*Untuk menampilkan(admin/participant-user/{user_id})*/
    public function show_event($id)
    {
      $user = User::findOrFail($id);
        $participants = Participant::join('events', 'events.id', '=', 'participants.event_id')
        ->where('participants.user_id', $id)->select('events.nama as nama_event', 'participants.*')->get();
        return view('admin.participant.user_participant', compact('user', 'participants'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  

/*    public function store(Request $request, $id)
    {
        $this->validate($request, [
            'nama_tim' => ['required'],
            'logo_tim' => ['required'],
            'no_hp' => ['required'],
            'warna_kostum' => ['required'],
        ]);
        $events = Event::findOrFail($id);
        $input = $request->all();
        $input['status'] = 'regitered';
        $photo = $request->logo_tim->getClientOriginalName();
        $destination = 'images/participant/';
        $request->logo_tim->move($destination, $photo);
        $input['logo_tim'] = $destination.$photo;
        $input['event_id'] = $id;
        Participant::create($input);
        return redirect()->action('ParticipantController@index')->with('success', 'Participant has been created');
    }*/

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /*Untuk show participant berdasarkan user*/
    public function show($id, $id_participant)
    {
        $user   = User::findOrFail($id);

        $participants = Participant::join('events', 'events.id', '=', 'participants.event_id')->join('users' , 'users.id' , '=' , 'participants.user_id')->select('events.nama as nama', 'events.biaya_pendaftaran as biaya_pendaftaran', 'participants.*' , 'users.*')->findOrFail($id_participant);
        $members = Member::where('participant_id', $id_participant)->get();
        return view('admin.participant.show', compact('participants', 'user', 'members'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /*Untuk edit data participant*/
    public function edit($user_id, $id_participant)
    {
        $user = User::findOrFail($user_id);
        $participants = Participant::findOrFail($id_participant);
        return view('admin.participant.edit', compact('participants', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /*Untuk update data setelah di edit*/
    public function update(request $request, $id, $id_participant)
    {
        $this->validate($request, [
            'nama_tim' => ['required'],
            'logo_tim' => ['required'],
            'no_hp' => ['required'],
            'warna_kostum' => ['required'],
        ]);
        $user = User::findOrFail($id);
        $participants = Participant::findOrFail($id_participant);
        $input = $request->all();
        $input['event_id'] = $participants->event_id;
        $input['user_id']  = $participants->user_id; 
        $photo = $request->logo_tim->getClientOriginalName();
        $destination = 'images/participant/';
        $request->logo_tim->move($destination, $photo);
        $input['logo_tim'] = $destination.$photo;
        $participants->update($input);
        return redirect()->action('ParticipantController@show', [ $id, $id_participant])->with('info','Participant has been edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /*Untuk mendelet data cancle*/
    public function destroy($id, $id_participant)
    {
        $events = Event::findOrFail($id);
        $participants = participant::findOrFail($id_participant);
        $participants->delete();
        return redirect()->action('ParticipantController@index')->with('danger','Participant has been deleted');
    }

    public function search(Request $request)
    {
        $events = Event::findOrFail($id);
        $temp_search = $request->get('search');
        $search = '%'.$temp_search.'%';
        $participants = DB::table('participants')
                ->where('id', 'LIKE', $search)
                ->orwhere('nama', 'LIKE', $search)
                ->orwhere('detail', 'LIKE', $search)
                ->paginate(5);

        return view('admin.participant.search', compact('participants','temp_search'));
    }



    /*Untuk validasi bukti pembayaran*/
    public function validation($user_id)
    {
        $user = User::findOrFail($user_id);
        $participants = Participant::join('events', 'events.id', '=' , 'participants.event_id')->join('bukti_pembayaran', 'bukti_pembayaran.user_id', '=' , 'participants.user_id')->where('participants.user_id', $user_id)->select('events.biaya_pendaftaran as jumlah' , 'bukti_pembayaran.*' ,'participants.*')->get();
       
        foreach ($participants as $participant)
        {
          $participant['status'] = 'validated';
          $participant->update();
          $pemasukan = new Pemasukan();
          $pemasukan->nama = 'pemasukan_pendaftaran';

          $pemasukan->event_id = $participant->event_id;
          $pemasukan->participant_id = $participant->id;
          $pemasukan->jumlah = $participant->jumlah;
          $pemasukan->save();
        }

        return redirect()->action('ParticipantController@bukti_pembayaran', [$user_id])->with('info','Participant has been validated');
    }


    /*Untuk melihat data participant yang upload bukti*/
    public function bukti_pembayaran($user_id)
    {
        $user= User::findOrFail($user_id);
        $bukti_pembayaran = User::join('participants', 'participants.user_id', '=' , 'users.id')->join('bukti_pembayaran', 'bukti_pembayaran.user_id', '=' , 'users.id')->where('users.id', $user_id)->select('bukti_pembayaran.*','participants.status as status_participant' , 'participants.nama_tim as nama' , 'users.*' )->get();
        return view('admin.participant.bukti_pembayaran.formin', compact('bukti_pembayaran', 'user'));
    }

    /*Untuk show data user participant*/
    public function event_index()
    {
        $user_event = User::where('is_admin', 0)->paginate(5);
        return view('admin.participant.user_index', compact('user_event'));
    }


    /*Untuk View cancle lomba*/
    public function pembayaran()
    {
        $id_user = Auth::user()->id;
        $users = User::findOrFail($id_user);
        $participants = Participant::join('events' , 'events.id', '=' , 'participants.event_id')
        ->select('events.nama as nama_event', 'events.biaya_pendaftaran as payment' , 'participants.*')->where('participants.user_id', $id_user)->get();
        $sum = Participant::join('events' , 'events.id', '=' , 'participants.event_id')->where('participants.user_id', $id_user)->select('events.nama as nama_event', 'events.biaya_pendaftaran as payment' , 'participants.*')->sum('events.biaya_pendaftaran');

        
        return view('register.pembayaran.pembayaran', compact('users', 'participants', 'sum'));

    }



    /*untuk kirim email pembayaran*/
    public function postPembayaran(request $request)
    {
        $id_user = Auth::user()->id;
        $users = User::findOrFail($id_user);
        $users->status = 'waiting';
        $users->update();
        
        $sum = Participant::join('events' , 'events.id', '=' , 'participants.event_id')->where('participants.user_id', $id_user)->select('events.nama as nama_event', 'events.biaya_pendaftaran as payment' , 'participants.*')->sum('events.biaya_pendaftaran');

        $users['email'] = $users->email;
        Mail::send('emails.bukti_pembayaran',
            array (
            'nama' => $users->name,
            'biaya_pendaftaran' => $sum,
                ), function($message) use($users){
            $message->to($users->email)->from('rocetomazzido@gmail.com')->subject('Welcome!');
          }
            );
        return redirect()->action('ParticipantController@regis_buktipem');
    }



    /*untuk view upload bukti dan rincian pendaftaran*/
    public function regis_buktipem(request $request)
    {
        $id_user = Auth::user()->id;
        $users = User::findOrFail($id_user);
        $sum = Participant::join('events' , 'events.id', '=' , 'participants.event_id')->where('participants.user_id', $id_user)->select('events.nama as nama_event', 'events.biaya_pendaftaran as payment' , 'participants.*')->sum('events.biaya_pendaftaran');
        $participants = Participant::where('user_id' , $id_user)->get();
        $count = Participant::join('events' , 'events.id', '=' , 'participants.event_id')->where('participants.user_id', $id_user)->select('events.*', 'participants.*')->count('events.id');

        return view('register.pembayaran.pembayaran_upload', compact('users', 'sum', 'count' , 'participants'));
    }


}

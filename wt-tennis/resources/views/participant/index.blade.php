@extends('layouts.app')

@section('content')

<section class="drawer">
  <div class="col-md-12 size-img back-img-match">
    <div class="effect-cover">
      <h3 class="txt-advert animated">The best Palyer</h3>
      <p class="txt-advert-sub">Lifelong dream of becoming the No. 1 player on the ATP World Tour </p>
    </div>
  </div>
  <section id="players" class="container secondary-page">
    <div class="general general-results players">
      <div class="top-score-title right-score col-md-9">
        <h3> {{ $participants->nama_tim }} <span>Team</span><span class="point-little">.</span></h3>
        
        <table class="table" style="border:10px">
          <tbody>            
            <tr>
              <td style="width:180px"> No. Hp</td>
              <td style="width:20px;">:</td>
              <td>{{ $participants->no_hp}}</td>
            </tr>
            <tr>
               <td>Warna Kostum</td>
              <td >:</td>
              <td>{{ $participants->warna_kostum}}</td>
            </tr>
            <tr>
             <td>Jumlah Pemain</td>
              <td >:</td>
              <td>{{ $participants->jumlah_pemain}}</td>
            </tr>
            <tr>
               <td>Nama Pengirim</td>
              <td >:</td>
              <td>{{ $participants->atas_nama }}</td>           
            </tr>
            <tr>
               <td>No. Rekening</td>
              <td >:</td>
              <td>{{ $participants->no_rek }}</td>
            </tr>
            <tr>
              <td>Bank</td>
              <td >:</td>
              <td>{{ $participants->nama_bank}}</td>
            </tr>
            <tr>
              <td>Status</td>
              <td >:</td>
              <td>{{ $participants->status}}</td>
            </tr>              
          </tbody>
        </table>     

        <h3>{{ $participants->nama_tim }} <span>Players</span><span class="point-little">.</span></h3>
        @foreach($participants->member as $members)
        <div class="col-md-3 atp-player">
          <a data-toggle="modal" data-target="#con-close-modal-{{ $members->id }}">
            <img src="{!! asset('').'/'.$members->foto !!}" style="width:148px; height:198px; " alt="" />
            <p> {{ $members->nama }} </p>
          </a>
        </div>
        @include('participant.modal.player', ['nama' => $members->nama])
        @endforeach  

        <div class="col-md-3 atp-player">
          <a data-toggle="modal" data-target="#con-close-modal2">
            <img src="{{ URL::asset('images/player/face.jpg') }}" alt="" />
            <p> Add a Player </p>
          </a>
        </div>
        @include('participant.modal.players')



      </div><!--Close Top Match-->
    @include('layouts.right-content')
  </section>
  @endsection
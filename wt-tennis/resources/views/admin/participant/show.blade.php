@extends('admin.layouts.app')
@section('title', 'Detail Participant')
@section('content')
<div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Participants</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li><a href="{{ action('ParticipantController@show_event', [ $user->id]) }}">Participants</a></li>
                        <li class="active">{{$participants->nama}}</li>
                    </ol>


    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Data {{$participants->nama}}</h3>
                </div>
                <div class="panel-body">
                    @include('admin.event.notification.flash')
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Tim</th>
                                        <th>Logo Tim</th>
                                        <th>No Hp</th>
                                        <th>Email</th>
                                        <th>Warna Kostum</th>
                                        <th>Jumlah Pemain</th>
                                        <th>Biaya</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $participants->id }}</td>
                                        <td>{{ $participants->nama_tim }}</td>
                                        <td><a href="{!! asset('').'/'.$participants->logo_tim  !!}" class="image-popup" title="{{ $participants->logo_tim  }}"> {{ $participants->logo_tim }} </a></td>
                                        <td>{{ $participants->no_hp }}</td>
                                        <td>{{ $participants->email }}</td>
                                        <td>{{ $participants->warna_kostum }}</td>
                                        <td>{{ $participants->jumlah_pemain }}</td>
                                        <td>{{ $participants->biaya_pendaftaran }}</td>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>


            
                                      
                                  

      
  </div>
</div>
</div>
</div>
</div>
</div>
</div> <!-- container -->

@endsection

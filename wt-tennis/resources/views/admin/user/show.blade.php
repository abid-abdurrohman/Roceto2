@extends('admin.layouts.app')
@section('title', 'Detail User')
@section('content')
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">User</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li><a href="{{ action('UserAdminController@index') }}">User</a></li>
                        <li class="active">{{$user->name}}</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data {{$user->name}}</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                              <div class="table-responsive">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama</th>
                                                <th>Nickname</th>
                                                <th>Email</th>
                                                <th>Mobile</th>
                                                <th>Avatar</th>
                                                <th>Waktu</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->nick_name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->mobile}}</td>
                                                <td>{{ $user->avatar }}</td>
                                                <td>{{ $user->created_at }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div> <!-- End Row -->

        <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Event</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                              <div class="table-responsive">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Competition</th>
                                                <th>Single or Team</th>
                                                <th>No. Hp</th>
                                                <th>Status</th>
                                                <th><center>Action</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                        <?php $no=1 ?>
                                        @foreach ($participants as $participant)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $participant->nama_event }}</td>
                                                <td>{{ $participant->nama_tim}}</td>
                                                <td>{{ $participant->no_hp}}</td>
                                                @if ($participant->status == "validated")
                                                <td style="width:5px"><span class="label label-success">{{ $participant->status }}</span>
                                                </td>
                                                @else
                                                <td style="width:5px"><span class="label label-warning">{{ $participant->status }}</span>
                                                </td>
                                                @endif 
                                                <td><a href="{{ action('ParticipantController@show_event', [$participant->event_id]) }}"> Check</a></td>                                               
                                        @endforeach
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div> <!-- End Row -->

        </div> <!-- container -->
@endsection

@extends('admin.layouts.app')
@section('title', 'Detail Gallery')
@section('content')
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Player</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li><a href="{{ action('ParticipantController@show', $participant->id) }}">Player</a></li>
                        <li class="active">{{ $participant->nama_tim }}</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data {{$participant->nama_tim}}</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Tanggal Lahir</th>
                                                <th>No. Hp</th>
                                                <th>Posisi</th>
                                                <th>No. Punggung</th>
                                                <th>Foto</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $member->id }}</td>
                                                <td>{{ $member->nama }}</td>
                                                <td>{{ $member->jk }}</td>
                                                <td>{{ $member->tgl_lhr }}</td>
                                                <td>{{ $member->no_hp }}</td>
                                                <td>{{ $member->posisi }}</td>
                                                <td>{{ $member->no_punggung }}</td>
                                                <td>{{ $member->foto }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Row -->
        </div> <!-- container -->
@endsection

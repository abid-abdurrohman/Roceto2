@extends('admin.layouts.app')
@section('title', 'Detail Player')
@section('content')
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Player</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li><a href="{{ action('ParticipantController@show', [$events->id, $participant->id]) }}">Player</a></li>
                        <li class="active">{{ $participant->nama_tim }}</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Detail {{$participant->nama_tim}} Player</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">                                
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2">                           
                                            <div class="user-wrapper-responsive">
                                                <center><a style="border:5px" class="image-popup" href="{!! asset('').$member->foto !!}" title="{{ $member->nama }}"></center>
                                                <img src="{!! asset('').$member->foto !!}" width="180px" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-10 col-sm-10">
                                          <div class="table table-responsive">                              
                                            <table class="table table-hover">
                                                <tr>
                                                    <td style="width:140px">ID</td>
                                                    <td style="width:5px">:</td>
                                                    <td>{{ $member->id }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Nama</td>
                                                    <td>:</td>
                                                    <td>{{ $member->nama }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Jenis Kelamin</td>
                                                    <td>:</td>
                                                    <td>{{ $member->JK }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Tanggal Lahir</td>
                                                    <td>:</td>
                                                    <td>{{ $member->tgl_lhr }}</td>
                                                </tr> 
                                                <tr>
                                                    <td>No. Hp</td>
                                                    <td>:</td>
                                                    <td>{{ $member->no_hp }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Posisi</td>
                                                    <td>:</td>
                                                    <td>{{ $member->posisi }}</td>
                                                </tr> 
                                                <tr>
                                                    <td>No. Punggung</td>
                                                    <td>:</td>
                                                    <td>{{ $member->no_punggung }}</td>
                                                </tr> 
                                            </table>
                                          </div>
                                        </div>
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
                            <h3 class="panel-title">Data {{$participant->nama_tim}}</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                                                
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Row -->
        </div> <!-- container -->
@endsection

@extends('admin.layouts.app')
@section('title', 'Detail Match')
@section('content')
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Match</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li><a href="{{ action('EventMatchController@show', $events->id) }}">Match</a></li>
                        <li class="active"></li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data </h3>
                        </div>
                        <div class="panel-body">
                            @include('admin.match.notification.flash')
                            <div class="row">
                              <div class="col-md-12">
                                  <a class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Add <i class="fa fa-plus"></i></a>
                                  @include('admin.match_team.modal.create')
                              </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama Team</th>
                                                <th>Score</th>
                                                <th>Created At</th>
                                                <th>Updated At</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach( $match_teams as $match_team )
                                              <tr>
                                                  <td>{{ $match_team->id }}</td>
                                                  <td>
                                                    <a href="{{ action('ParticipantController@show', array($match_team->participant_id)) }}">
                                                    {{ $match_team->nama_participant }}
                                                    </a>
                                                  </td>
                                                  <td>{{ $match_team->score }}</td>
                                                  <td>{{ $match_team->created_at }}</td>
                                                  <td>{{ $match_team->updated_at }}</td>
                                                  <td>
                                                    <a href="#" data-toggle="modal" data-target="#myModal-{{ $events->id }}-{{ $matches->id }}-{{ $match_team->id }}">
                                                      <i class="fa fa-trash"></i> Delete
                                                    </a>
                                                  </td>
                                              </tr>
                                              @include('admin.match_team.modal.delete', ['id_event' => $events->id, 'id_match' => $matches->id, 'id_team' => $match_team->id])
                                            @endforeach
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

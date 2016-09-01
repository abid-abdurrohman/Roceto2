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
                        <li><a href="{{ action('CategoryMatchController@show', $categories->id) }}">Match</a></li>
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
                            @include('admin.teams_match.notification.flash')
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama Team</th>
                                                <th>Created At</th>
                                                <th>Updated At</th>
                                                <th colspan="2">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach( $match->teams_match as $team_match )
                                              <tr>
                                                  <td>{{ $team_match->id }}</td>
                                                  <td>
                                                    <a href="#">
                                                      {{ $team_match->score }}
                                                    </a>
                                                  </td>
                                                  <td>{{ $team_match->created_at }}</td>
                                                  <td>{{ $team_match->updated_at }}</td>
                                                  <td>
                                                    <a href="#">
                                                      <i class="fa fa-edit"></i> Edit
                                                    </a>
                                                  </td>
                                                  <td>
                                                    <a href="#" data-toggle="modal" data-target="#myModal-{{ $match->id }}-{{ $team_match->id }}">
                                                      <i class="fa fa-trash"></i> Delete
                                                    </a>
                                                  </td>
                                              </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <a href="#" class="btn btn-primary waves-effect waves-light">Add <i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div> <!-- End Row -->
        </div> <!-- container -->
@endsection

@extends('admin.layouts.app')
@section('title', 'Data User Participant')
@section('content')
        <div class="container">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Participant</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li class="active">Participant Event</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Participant User</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                              <div class="col-md-11">
                                <div id="datatable_filter" class="dataTables_filter">
                                    {!! Form::open() !!}
                                    <label>Search:
                                      <input name=search type="search" class="form-control input-sm" placeholder="Write something" aria-controls="datatable" required>
                                    {!! Form::close() !!}
                                  </label>
                                </div>
                              </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                            
                                                <th><center>ID</center></th>
                                                <th><center>Nama User</center></th>
                                                <th colspan="2"><center>Action</center></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($user_event as $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</a></td>
                                                <td>
                                                  <center><a href="{{ action('ParticipantController@show_event', $user->id) }}" >Check <li class="fa fa-arrow-circle-right"></li></a> </center>
                                                </td>
                                             
                                            </tr>
                                          @endforeach
                                        </tbody>
                                    </table>
                                    {!! $user_event->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Row -->
        </div> <!-- container -->
@endsection

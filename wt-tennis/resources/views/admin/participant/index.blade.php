@extends('admin.layouts.app')
@section('title', 'Data Participant')
@section('content')
        <div class="container">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Participants</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li class="active">Participants</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Participants</h3>
                        </div>
                        <div class="panel-body">
                            @include('admin.participant.notification.flash')
                            <div class="row">
                              <div class="col-md-5">
                              </div>
                              <div class="col-md-6">
                                <div id="datatable_filter" class="dataTables_filter">
                                    {!! Form::open(['action' => 'ParticipantController@search']) !!}
                                    <label>Search:
                                      <input name=search type="search" class="form-control input-sm" placeholder="Write something" aria-controls="datatable" required>
                                    {!! Form::close() !!}
                                  </label>
                                </div>
                              </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="table-responsive">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama Tim</th>
                                                <th>Nomer Hp</th>
                                                <th>User Id</th>
                                                <th>Status</th>
                                                <th>Created At</th>
                                                <th colspan="2">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($participants as $participant)
                                            <tr>
                                                <td>{{ $participant->id }}</td>
                                                <td>{{ $participant->nama_tim }}</td>
                                                <td>{{ $participant->no_hp }}</td>
                                                <td><a href="{{ action('EventController@show', $participant->event_id) }}">{{ $participant->event_id }}</a></td>
                                                <td>{{ $participant->user_id }}</td>
                                                <td>{{ $participant->status }}</td>

                                                @if ($participant->status=='waiting')
                                                    <td><a href="{{ action('ParticipantController@bukti_pembayaran', [ $events->id,$participant->id]) }}" class="label label-info" >Check</a></td>
                                                    <td><a href="{{ action('ParticipantController@show', [ $events->id,$participant->id]) }}" class="label label-info">Detail</a></td>
                                                    @else
                                                <td>
                                                  <a href="#" data-toggle="modal" data-target="#myModal-{{ $events->id }}-{{ $participant->id }}" class="label label-danger">Delete</a></td>
                                                <td><a href="{{ action('ParticipantController@show', [ $events->id,$participant->id]) }}" class="label label-info">Detail</a></td>
                                                @endif
                                            </tr>
                                            @include('admin.participant.modal.delete', ['id' => $events->id, 'id_participant'=> $participant->id])
                                          @endforeach
                                        </tbody>
                                    </table>
                                    {!! $participants->links() !!}
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Row -->
        </div> <!-- container -->
@endsection

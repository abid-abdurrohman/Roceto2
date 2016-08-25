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
                                <a class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Add <i class="fa fa-plus"></i></a>
                                @include('admin.participant.modal.create')
                                <!-- <a href="{{ action('ParticipantController@create') }}" class="btn btn-primary waves-effect waves-light">Add <i class="fa fa-plus"></i></a> -->
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
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama Tim</th>
                                                <th>Nama Kapten</th>
                                                <th>No. Hp</th>
                                                <th>Warna Kostum</th>
                                                <th>Jumlah Pemain</th>
                                                <th>Kategori</th>
                                                <th>Waktu</th>
                                                <th colspan="2">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($participants as $participant)
                                            <tr>
                                                <td>{{ $participant->id }}</td>
                                                <td><a href="{{ action('ParticipantController@show', $participant->id) }}">{{ $participant->nama_tim }}</a></td>
                                                <td>{{ $participant->nama_kapten }}</td>
                                                <td>{{ $participant->no_hp }}</td>
                                                <td>{{ $participant->warna_kostum }}</td>
                                                <td>{{ $participant->jumlah_pemain }}</td>
                                                <td><a href="#">{{ $participant->category_id }}</a></td>
                                                <td>{{ $participant->created_at }}</td>
                                                @if ($participant->status=='waiting')
                                                    <td><a href="#" class="btn btn-info" data-toggle="modal" data-target="#Modal-{{ $participant->id }}">Check</a></td>
                                                    @include('admin.participant.modal.check', ['id' => $participant->id])
                                        				    <td><a href="#" class="btn btn-info" data-toggle="modal" data-target="#Validation-{{ $participant->id }}">Approve</a></td>
                                                    @include('admin.participant.modal.validation', ['id' => $participant->id])
                                        				@else
                                                <td>
                                                  <a href="{{ action('ParticipantController@edit', $participant->id) }}">
                                                    <i class="fa fa-edit"></i> Edit
                                                  </a>
                                                </td>
                                                <td>
                                                  <a href="#" data-toggle="modal" data-target="#myModal-{{ $participant->id }}">
                                                    <i class="fa fa-trash"></i> Delete
                                                  </a>
                                                </td>
                                                @endif
                                            </tr>
                                            @include('admin.participant.modal.delete', ['id' => $participant->id])
                                          @endforeach
                                        </tbody>
                                    </table>
                                    {!! $participants->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Row -->
        </div> <!-- container -->
@endsection

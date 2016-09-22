@extends('admin.layouts.app')
@section('title', 'Data Match')
@section('content')
        <div class="container">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Match</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li class="active">Match</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Match</h3>
                        </div>
                        <div class="panel-body">
                            @include('admin.match_score.notification.flash')
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
                                                <th>ID</th>
                                                <th>Nama Event</th>
                                                <th>Nama Match</th>
                                                <th>Waktu Match</th>
                                                <th colspan="2">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($matches as $match)
                                            <tr>
                                                <td>{{ $match->id }}</td>
                                                <td><a href="{{ action('EventController@show', $match->id) }}">{{ $match->nama_event }}</a></td>
                                                <td>{{ $match->nama }}</td>
                                                <td>{{ $match->waktu }}</td>
                                                @if ($match->status == 'playing')
                                                <td>
                                                  <a href="{{ action('EventMatchScoreController@show', [$events->id, $match->id]) }}">Update</a>
                                                </td>
                                                <td>
                                                  <a href="#" data-toggle="modal" data-target="#myModal-{{ $events->id }}-{{ $match->id }}">
                                                    <i class="fa fa-stop"></i> Done
                                                  </a>
                                                </td>
                                                @elseif ($match->status == 'available')
                                                <td></td>
                                                <td>
                                                  <a href="#" data-toggle="modal" data-target="#myModal2-{{ $events->id }}-{{ $match->id }}">
                                                    <i class="fa fa-play"></i> Start
                                                  </a>
                                                </td>
                                                @else
                                                <td>
                                                  <a href="{{ action('EventMatchScoreController@show', [$events->id, $match->id]) }}">Detail</a>
                                                </td>
                                                <td></td>
                                                @endif
                                            </tr>
                                            @include('admin.match_score.modal.endmatch', ['id_match' => $match->id])
                                            @include('admin.match_score.modal.startmatch', ['id_match' => $match->id])
                                          @endforeach
                                        </tbody>
                                    </table>
                                    {!! $matches->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Row -->
        </div> <!-- container -->
@endsection

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
                        <li><a href="{{ action('ParticipantController@index') }}">Participants</a></li>
                        <li class="active">{{$participants->nama}}</li>
                    </ol>
                </div>
            </div>

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
                                                <th>No Hp</th>
                                                <th>Email</th>
                                                <th>Warna Kostum</th>
                                                <th>Jumlah Pemain</th>
                                                <th>Kategori</th>
                                                <th>Created At</th>
                                                <th>Updated At</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $participants->id }}</td>
                                                <td>{{ $participants->nama_tim }}</td>
                                                <td>{{ $participants->no_hp }}</td>
                                                <td>{{ $participants->email }}</td>
                                                <td>{{ $participants->warna_kostum }}</td>
                                                <td>{{ $participants->jumlah_pemain }}</td>
                                                <td>{{ $participants->nama_category }}</td>
                                                <td>{{ $participants->created_at }}</td>
                                                <td>{{ $participants->updated_at }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            @if ( !$participants->member->count() )
                    				    <h4>Belum memiliki pemain.</h4>
                    				@else
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama Pemain</th>
                                                <th>Created At</th>
                                                <th>Updated At</th>
                                                <th colspan="2">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach( $participants->member as $member )
                                              <tr>
                                                  <td>{{ $member->id }}</td>
                                                  <td>
                                                    <a href="{{ action('MemberController@show', [$participants->id, $member->id]) }}">
                                                      {{ $member->nama }}
                                                    </a>
                                                  </td>
                                                  <td>{{ $member->created_at }}</td>
                                                  <td>{{ $member->updated_at }}</td>
                                                  <td>
                                                    <a href="{{ action('MemberController@edit', array($participants->id, $member->id)) }}">
                                                      <i class="fa fa-edit"></i> Edit
                                                    </a>
                                                  </td>
                                                  <td>
                                                    <a href="#" data-toggle="modal" data-target="#myModal-{{ $participants->id }}-{{ $member->id }}">
                                                      <i class="fa fa-trash"></i> Delete
                                                    </a>
                                                  </td>
                                              </tr>
                                              @include('admin.member.modal.delete', ['id_participant' => $participants->id, 'id_member' => $member->id])
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            @endif
                            <a href="{{ action('MemberController@create', $participants->id) }}" class="btn btn-primary waves-effect waves-light">Add <i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div> <!-- End Row -->
        </div> <!-- container -->
@endsection

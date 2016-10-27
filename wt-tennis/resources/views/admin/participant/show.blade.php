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
                <li><a href="{{ action('ParticipantController@event_index') }}">Participants Events</a></li>
                <li><a href="{{ action('ParticipantController@show_event', [$events->id]) }}">Participants</a></li>
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
                            <div class="row">
                              <div class="table-responsive">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2">                           
                                            <div class="user-wrapper-responsive">
                                                <a style="border:2px" class="image-popup" href="{!! asset('').$participants->logo_tim !!}" title="{{ $participants->logo_tim  }}">
                                                <img src="{!! asset('').$participants->logo_tim !!}" width="180 px" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-10 col-sm-10">
                                          <div class="table table-responsive">                              
                                            <table class="table table-hover">
                                                <tr>
                                                    <td style="width:140px">ID</td>
                                                    <td style="width:5px">:</td>
                                                    <td>{{ $participants->id }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Nama Tim</td>
                                                    <td>:</td>
                                                    <td>{{ $participants->nama_tim }}</td>
                                                </tr>                          
                                                <tr>
                                                    <td>E-mail</td>
                                                    <td>:</td>
                                                    <td>{{ $participants->email }}</td>
                                                </tr> 
                                                <tr>
                                                    <td>Mobile</td>
                                                    <td>:</td>
                                                    <td>{{ $participants->mobile}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Warna Kostum</td>
                                                    <td>:</td>
                                                    <td>{{ $participants->warna_kostum }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Jumlah Pemain</td>
                                                    <td>:</td>
                                                    <td>{{ $participants->jumlah_pemain }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Biaya Pendaftaran</td>
                                                    <td>:</td>
                                                    <td>{{ $participants->biaya_pendaftaran }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Created at</td>
                                                    <td>:</td>
                                                    <td>{{ $participants->created_at }}</td>
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
              </div>


      <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Data {{$participants->nama}} Player</h3>
                </div>
                <div class="panel-body">

                    @if ( !$members->count() )
                    <h4>Belum memiliki pemain.</h4>
                    @else

          <a href="{{ action('MemberController@create', [$events->id, $participants->id]) }}" class="btn btn-primary waves-effect waves-light">Add <i class="fa fa-plus"></i></a>

          
                    <div class="row" style="padding-top:10px">
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
                                    @foreach( $members as $member )
                                    <tr>
                                      <td>{{ $member->id }}</td>
                                      <td>
                                        <a href="{{ action('MemberController@show', [$events->id, $participants->id, $member->id]) }}">
                                          {{ $member->nama }}
                                      </a>
                                  </td>
                                  <td>{{ $member->created_at }}</td>
                                  <td>{{ $member->updated_at }}</td>
                                  <td>
                                    <a href="{{ action('MemberController@edit', [$events->id, $participants->id, $member->id]) }}">
                                      <i class="fa fa-edit"></i> Edit
                                  </a>
                              </td>
                              <td>
                                <a href="#" data-toggle="modal" data-target="#myModal-{{ $events->id }}-{{ $participants->id }}-{{ $member->id }}">
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
  </div>
</div>
</div>
</div>
</div>
</div><!-- container -->

@endsection

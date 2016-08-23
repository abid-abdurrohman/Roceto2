@extends('admin.layouts.app')
@section('title', 'Detail participant')
@section('content')
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">participants</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li><a href="{{ action('participantController@index') }}">participants</a></li>
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
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama participant</th>
                                                <th>Detail participant</th>
                                                <th>Created At</th>
                                                <th>Updated At</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $participants->id }}</td>
                                                <td>{{ $participants->nama }}</td>
                                                <td>{{ $participants->detail }}</td>
                                                <td>{{ $participants->created_at }}</td>
                                                <td>{{ $participants->updated_at }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            @if ( !$participants->category->count() )
                    				    <h4>Belum memiliki kategori.</h4>
                    				@else
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama Kategori</th>
                                                <th>Created At</th>
                                                <th>Updated At</th>
                                                <th colspan="2">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach( $participants->category as $category )
                                              <tr>
                                                  <td>{{ $category->id }}</td>
                                                  <td>
                                                    <a href="{{ action('CategoryController@show', [$participants->id, $category->id]) }}">
                                                      {{ $category->nama }}
                                                    </a>
                                                  </td>
                                                  <td>{{ $category->created_at }}</td>
                                                  <td>{{ $category->updated_at }}</td>
                                                  <td>
                                                    <a href="{{ action('CategoryController@edit', array($participants->id, $category->id)) }}">
                                                      <i class="fa fa-edit"></i> Edit
                                                    </a>
                                                  </td>
                                                  <td>
                                                    <a href="#" data-toggle="modal" data-target="#myModal-{{ $participants->id }}-{{ $category->id }}">
                                                      <i class="fa fa-trash"></i> Delete
                                                    </a>
                                                  </td>
                                              </tr>
                                              @include('admin.category.modal.delete', ['id_participant' => $participants->id, 'id_category' => $category->id])
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            @endif
                            <a href="{{ action('CategoryController@create', $participants->id) }}" class="btn btn-primary waves-effect waves-light">Add <i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div> <!-- End Row -->
        </div> <!-- container -->
@endsection

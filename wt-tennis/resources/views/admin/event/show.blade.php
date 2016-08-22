@extends('admin.layouts.app')
@section('title', 'Detail Event')
@section('content')
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Events</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li><a href="{{ action('EventController@index') }}">Events</a></li>
                        <li class="active">{{$events->nama}}</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data {{$events->nama}}</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama Event</th>
                                                <th>Detail Event</th>
                                                <th>Created At</th>
                                                <th>Updated At</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $events->id }}</td>
                                                <td>{{ $events->nama }}</td>
                                                <td>{{ $events->detail }}</td>
                                                <td>{{ $events->created_at }}</td>
                                                <td>{{ $events->updated_at }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            @if ( !$events->category->count() )
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
                                            @foreach( $events->category as $category )
                                              <tr>
                                                  <td>{{ $category->id }}</td>
                                                  <td>
                                                    <a href="{{ action('CategoryController@show', [$events->id, $category->id]) }}">
                                                      {{ $category->nama }}
                                                    </a>
                                                  </td>
                                                  <td>{{ $category->created_at }}</td>
                                                  <td>{{ $category->updated_at }}</td>
                                                  <td>
                                                    <a href="{{ action('CategoryController@edit', array($events->id, $category->id)) }}">
                                                      <i class="fa fa-edit"></i> Edit
                                                    </a>
                                                  </td>
                                                  <td>
                                                    <a href="#" data-toggle="modal" data-target="#myModal-{{ $events->id }}-{{ $category->id }}">
                                                      <i class="fa fa-trash"></i> Delete
                                                    </a>
                                                  </td>
                                              </tr>
                                              @include('admin.category.modal.delete', ['id_event' => $events->id, 'id_category' => $category->id])
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            @endif
                            <a href="{{ action('CategoryController@create', $events->id) }}" class="btn btn-primary waves-effect waves-light">Add <i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div> <!-- End Row -->
        </div> <!-- container -->
@endsection

@extends('admin.layouts.app')
@section('title', 'Data Gallery')
@section('content')
        <div class="container">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Gallerys</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li class="active">Gallerys</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Gallerys</h3>
                        </div>
                        <div class="panel-body">
                            @include('admin.gallery.notification.flash')
                            <div class="row">
                              <div class="col-md-5">
                                <a href="{{ action('GalleryController@create') }}" class="btn btn-primary waves-effect waves-light">Add <i class="fa fa-plus"></i></a>
                              </div>
                              <div class="col-md-6">
                                <div id="datatable_filter" class="dataTables_filter">
                                    {!! Form::open([]) !!}
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
                                                <th>Judul Gallery</th>
                                                <th>Deskripsi Gallery</th>
                                                <th>Waktu</th>
                                                <th colspan="2">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($galleries as $gallery)
                                            <tr>
                                                <td>{{ $gallery->id }}</td>
                                                <td><a href="{{ action('GalleryController@show', $gallery->id) }}">{{ $gallery->judul }}</a></td>
                                                <td>{{ $gallery->deskripsi }}</td>
                                                <td>{{ $gallery->created_at }}</td>
                                                <td>
                                                  <a href="{{ action('GalleryController@edit', $gallery->id) }}">
                                                    <i class="fa fa-edit"></i> Edit
                                                  </a>
                                                </td>
                                                <td>
                                                  <a href="#" data-toggle="modal" data-target="#myModal-{{ $gallery->id }}">
                                                    <i class="fa fa-trash"></i> Delete
                                                  </a>
                                                </td>
                                            </tr>
                                            @include('admin.gallery.modal.delete', ['id' => $gallery->id])
                                          @endforeach
                                        </tbody>
                                    </table>
                                    {!! $galleries->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Row -->
        </div> <!-- container -->
@endsection

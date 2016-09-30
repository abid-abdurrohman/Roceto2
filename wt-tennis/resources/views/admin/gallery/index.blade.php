@extends('admin.layouts.app')
@section('title', 'Data Gallery')
@section('content')
<div class="container">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="pull-left page-title">Gallery</h4>
            <ol class="breadcrumb pull-right">
                <li><a href="#">Admin</a></li>
                <li class="active">Gallery</li>
            </ol>
        </div>
    </div>
     <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Gallery</h3>
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
                                                <th>Judul</th>
                                                <th>Deskripsi</th>
                                                <th>Thumbnail</th>
                                                <th>Event</th>
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
                                                <td>{{ $gallery->thumbnail }}</td>
                                                <td>{{ $gallery->nama_event }}</td>
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
                            </div> <!--END ROW-->
                        </div>
                    </div>
                </div>
            </div> <!-- End Row --><br>

    <!-- <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 ">
            <div class="portfolioFilter">
                <a data-filter="*" class="current">All</a>
                @foreach($events as $event)
                <a href="#" data-filter=".{{ $event->event_id }}">{{ $event->nama }}</a>
                @endforeach
            </div>
        </div>
    </div>

    <div class="row port">
        <div class="portfolioContainer">
        @foreach($photos as $photo)
            <div class="col-sm-6 col-lg-3 col-md-4 {{ $photo->event_id }} ">              
                <div class="gal-detail thumb">
                    <a href="{{ $photo->thumbnail }}" class="image-popup" title="Screenshot-1">
                        <img src="{{ $photo->thumbnail }}" class="thumb-img" >
                    </a>
                    <h4>Gallary Image</h4>
                </div>
            </div>
        @endforeach               
        </div>
    </div> --> <!-- End row -->

</div> <!-- container -->
@endsection

@extends('admin.layouts.app')
@section('title', 'Detail User')
@section('content')
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">User</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li><a href="{{ action('UserAdminController@index') }}">User</a></li>
                        <li class="active">{{$user->name}}</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data {{$user->name}}</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                              <div class="table-responsive">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama</th>
                                                <th>Nickname</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Avatar</th>
                                                <th>Waktu</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->nick_name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ str_limit($user->password, 20) }}<br></td>
                                                <td>{{ $user->avatar }}</td>
                                                <td>{{ $user->created_at }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div> <!-- End Row -->

        </div> <!-- container -->
@endsection

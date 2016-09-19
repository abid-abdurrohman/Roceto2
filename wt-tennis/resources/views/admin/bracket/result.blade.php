@extends('admin.layouts.app')
@section('title', 'Result')
@section('content')
<div class="container">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="pull-left page-title">Result</h4>
            <ol class="breadcrumb pull-right">
                <li><a href="#">Admin</a></li>
                <li class="active">Result</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Result {{ $events->nama }}</h3>
                </div>
            </div>
        </div>
    </div> <!-- End Row -->
</div> <!-- container -->
@endsection

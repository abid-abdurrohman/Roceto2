@extends('admin.layouts.app')
@section('title', 'Bracket')
@section('content')
<style type="text/css">
		/*
		*  Flex Layout Specifics
		*/
		main{ display:flex;flex-direction:row; }
		.round{ display:flex;flex-direction:column;justify-content:center;width:200px;list-style:none;padding:0; }
		.round .spacer{ flex-grow:1; }
		.round .spacer:first-child,
		.round .spacer:last-child{ flex-grow:.5; }
		.round .game-spacer{flex-grow:1;border-right: solid; }
		/*
		*  General Styles
		*/
		li.game{ padding-left:20px; }
		li.game.winner{ font-weight:bold; }
		li.game span{  }
		li.game-top{ border-bottom:0px solid #aaa; }
		li.game-spacer{ border-right:0px solid #aaa;min-height:40px; }
		li.game-bottom{ border-top:0px solid #aaa; }
</style>
<div class="container">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="pull-left page-title">Bracket</h4>
            <ol class="breadcrumb pull-right">
                <li><a href="#">Admin</a></li>
                <li class="active">Bracket</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Bracket {{ $events->nama }} {{ $categories->nama }}</h3>
                </div>
                @include('admin.bracket.include.bracket')    
            </div>
        </div>
    </div> <!-- End Row -->
</div> <!-- container -->
@endsection

@extends('admin.layouts.app')
@section('title', 'Detail News')
@section('content')
<link href="{{ URL::asset('admin_asset/css/single-news-admin.css') }}" rel="stylesheet" />
        <div class="container">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">News</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Admin</a></li>
                        <li><a href="{{ action('NewsController@index') }}">News</a></li>
                        <li class="active">{{ $news->judul }}</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>{{ $news->judul }}</strong></h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                  <section id="single_news" class="container secondary-page">
                                    <div class="general general-results">
                                      <div class="top-score-title col-md-9">
                                        <img src="{!! asset('').'/'.$news->thumbnail !!}" style="width:500px">
                                        <h3>{{ $news->judul }}<span class="point-little">.</span></h3>
                                        <p class="desc_news">{!! $news->deskripsi !!}</p>
                                        <p class="desc_news important_news data">by {{ $news->author }}<i class="fa fa-calendar"></i>{{ $news->created_at }} - Depok, Indonesia</p>
                                        <div class="tab_news">
                                          @unless ($news->tags->isEmpty())
                                            <i class="fa fa-tag"></i><span>TAGS:</span>
                                            @foreach ($news->tags as $tag)
                                              <a href="#" class="tag">{{ $tag->nama }}</a>
                                            @endforeach
                                          @endunless
                                          <!-- <a href="news.html" class="tag">TENNIS</a>
                                          <a href="players.html" class="tag">PLAYERS</a> -->
                                        </div>
                                      </div>
                                    </div>
                                  </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Row -->
        </div> <!-- container -->
@endsection

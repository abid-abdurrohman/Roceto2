@extends('layouts.app')

@section('content')
<section class="drawer">
  <div class="col-md-12 size-img back-img-shop">
    <div class="effect-cover">
      <h3 class="txt-advert animated">The best news ATP WTP</h3>
      <p class="txt-advert-sub">News - Match - Player</p>
    </div>
  </div>
  <section id="single_news" class="container secondary-page">
    <div class="general general-results">
     <div class="top-score-title col-md-9">
      <h3>{!! $news->judul !!}<span class="point-little">.</span></h3>
      <div class="col-md-4">
        <img class="img-djoko" src="{!! asset('').'/'.$news->thumbnail !!}" alt="" />
      </div>
      <div class="data-news-pg">
        <p>{!! $news->deskripsi !!}</p>
      </div>

      <div class="row" style>
        <p class="desc_news important_news data">by {{ $news->author }}<i class="fa fa-calendar"></i>{{ $news->created_at }} - Depok, Indonesia</p>
        <div class="tab_news">
          @unless ($news->tags->isEmpty())
          <i class="fa fa-tag"></i><span>TAGS:</span>
          @foreach ($news->tags as $tag)
          <a href="#" class="tag">{{ $tag->nama }}</a>
          @endforeach
          @endunless
        </div>
      </div>

      <!--Open comment-->
      <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

      <div class="row" style="margin-top:80px" >
        <div class="col-sm-12">
          <div class="panel panel-white post panel-shadow">
            <div class="post-footer">
              <ul class="comments-list">
                <li class="comment">
                    <?php
                     $konek = mysqli_connect('localhost', 'root','','eo_sport');
                          if(!$konek){
                            die('Could not Connect');
                          }
                    mysqli_select_db($konek ,'eo_sport');
                    ?>

                     <a class="pull-left" href="#">
                      <img class="avatar" src="http://bootdey.com/img/Content/user_1.jpg" alt="avatar">
                    </a>
                    <div class="stats">
                      <div class="comment-body">
                        @foreach($comments as $comment)
                        <div class="comment-heading">
                          <h4 class="user">{{ $users->nickname }}</h4>
                          <h5 class="time">5 minutes ago</h5> 
                        </div>
                        <p>{{ $comment->comment }}</p>
                        @endforeach
                      </div>
                    </div>
                         {!! Form::model(new App\Model\Comment, ['action' => ['CommentUserController@store', $news->id], 'class'=>'form-horizontal']) !!}
                        <div class="input-group"> 
                        {!! Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '5',
        'placeholder' => 'Add a Comment', 'required'],'') !!}
                          <span class="input-group-addon">
                            <button type="submit"><i class="fa fa-edit"> </i></button>
                       {!! Form::close() !!}
                     <?php ?>  
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!--Close comment-->
        </div>
        <!--Close Top Match-->

        <!--right content-->
        @include('layouts.right-content')
      </section>

      <script src="js/jquery.bxslider.js" type="text/javascript"></script>
      <script type="text/javascript">
        $(document).ready(function () {
          "use strict";
          if (document.body.clientWidth < 400) {
            $('#product').bxSlider({
              minSlides: 1,
              maxSlides: 3,
              slideWidth: 300,
              slideMargin: 10
            });
          }
          else if (document.body.clientWidth < 600) {
            $('#product').bxSlider({
              minSlides: 2,
              maxSlides: 3,
              slideWidth: 265,
              slideMargin: 10
            });
          }
          else {
            $('#product').bxSlider({
              minSlides: 3,
              maxSlides: 3,
              slideWidth: 265,
              slideMargin: 10
            });
          }
        });
      </script>
      @endsection

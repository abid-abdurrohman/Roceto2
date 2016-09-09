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
      @include('news.share', [
          'url' => request()->fullUrl(),
          'description' => 'This is really cool link',
          'image' => 'http://placehold.it/300x300?text=Cool+link'
      ])
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
                     <a class="pull-left" href="#">
                      <img class="avatar" src="http://bootdey.com/img/Content/user_1.jpg" alt="avatar">
                    </a>
                    <div class="stats">
                      <div class="comment-body">
                        @foreach($comments as $comment)
                        <div class="comment-heading">
                          <h4 class="user">{{ $comment->nama_user }}</h4>
                          <h5 class="time">{{ $comment->created_at }}</h5>
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
@endsection
@push('scripts')
<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
<script>

    var popupSize = {
        width: 780,
        height: 550
    };

    $(document).on('click', '.social-buttons > a', function(e){

        var
            verticalPos = Math.floor(($(window).width() - popupSize.width) / 2),
            horisontalPos = Math.floor(($(window).height() - popupSize.height) / 2);

        var popup = window.open($(this).prop('href'), 'social',
            'width='+popupSize.width+',height='+popupSize.height+
            ',left='+verticalPos+',top='+horisontalPos+
            ',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1');

        if (popup) {
            popup.focus();
            e.preventDefault();
        }

    });
</script>
@endpush

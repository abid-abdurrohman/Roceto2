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
      <p class="desc_news important_news data">by {{ $news->author }}<i class="fa fa-calendar"></i>{{ $news->created_at }} - Depok, Indonesia</p>
          <div class="tab_news">
          @unless ($news->tags->isEmpty())
            <i class="fa fa-tag"></i><span>TAGS:</span>
              @foreach ($news->tags as $tag)
                <a href="#" class="tag">{{ $tag->nama }}</a>
              @endforeach
          @endunless
          </div>

          <!-- <div class="other-news">
           <h3>Other <span>News</span><span class="point-little">.</span></h3>
           <ul id="product" class="bxslider">
           @foreach($other_news as $newss )
            <li>
              <img src="{!! asset('').'/'.$newss->thumbnail !!}" alt="" style="height:150px"/>
              <p class="product-title">{{ $newss->judul }}</p>
              <p class="data-news-pg">{!!str_limit($newss->deskripsi, 350) !!}.</p>
              <div><a href="single_news.html" class="ready-news" style="height:52px">Read</a></div>
            </li>
          @endforeach
          </ul>
        </div> -->

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
                        <div class="comment-heading">
                          <h4 class="user">Gavino Free</h4>
                          <h5 class="time">5 minutes ago</h5>
                        </div>
                        <p>Sure, oooooooooooooooohhhhhhhhhhhhhhhh</p>
                      </div>
                    </div>
                      <hr>
                    <a class="pull-left" href="#">
                            <img class="avatar" src="http://bootdey.com/img/Content/user_3.jpg" alt="avatar">
                          </a>
                          <div class="comment-body">
                            <div class="comment-heading">
                              <h4 class="user">Ryan Haywood</h4>
                              <h5 class="time">3 minutes ago</h5>
                            </div>
                            <p>Relax my friend</p>
                          </div>
                          <hr>
                           <a class="pull-left" href="#">
                            <img class="avatar" src="http://bootdey.com/img/Content/user_2.jpg" alt="avatar">
                          </a>
                          <div class="comment-body">
                            <div class="comment-heading">
                              <h4 class="user">Gavino Free</h4>
                              <h5 class="time">3 minutes ago</h5>
                            </div>
                            <p>Ok, cool.</p>
                          </div>
                          <hr>
                        <div class="input-group">
                          <input class="form-control" placeholder="Add a comment" type="text">
                          <span class="input-group-addon">
                            <a href="#"><i class="fa fa-edit"></i></a>
                          </span>
                        </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
<!--Close comment-->

      </div><!--Close Top Match-->

      <div class="col-md-3 right-column">
       <div class="top-score-title col-md-12 right-title">
        <h3>Latest News</h3>
        <div class="right-content">
          <p class="news-title-right">A New Old Life</p>
          <p class="txt-right">Simon, who’s seeded just a lowly 26th here, was in many ways the right man for this grueling assignment</p>
          <a href="single_news.html" class="ca-more"><i class="fa fa-angle-double-right"></i>more...</a>
        </div>
        <div class="right-content">
          <p class="news-title-right">A New Old Life</p>
          <p class="txt-right">Simon, who’s seeded just a lowly 26th here, was in many ways the right man for this grueling assignment</p>
          <a href="single_news.html" class="ca-more"><i class="fa fa-angle-double-right"></i>more...</a>
        </div>
        <div class="right-content">
          <p class="news-title-right">A New Old Life</p>
          <p class="txt-right">Simon, who’s seeded just a lowly 26th here, was in many ways the right man for this grueling assignment</p>
          <a href="single_news.html" class="ca-more"><i class="fa fa-angle-double-right"></i>more...</a>
        </div>
      </div>
      <div class="top-score-title col-md-12">
        <img src="http://placehold.it/1000x475" alt="" />
      </div>
      <div class="top-score-title col-md-12 right-title">
        <h3>Photos</h3>
        <ul class="right-last-photo">
          <li>
            <div class="jm-item second">
              <div class="jm-item-wrapper">
                <div class="jm-item-image">
                  <img src="http://placehold.it/320x213" alt="" />
                  <div class="jm-item-description">
                    <div class="jm-item-button">
                      <i class="fa fa-plus"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="jm-item second">
              <div class="jm-item-wrapper">
                <div class="jm-item-image">
                  <img src="http://placehold.it/320x213" alt="" />
                  <div class="jm-item-description">
                    <div class="jm-item-button">
                      <i class="fa fa-plus"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="jm-item second">
              <div class="jm-item-wrapper">
                <div class="jm-item-image">
                  <img src="http://placehold.it/320x213" alt="" />
                  <div class="jm-item-description">
                    <div class="jm-item-button">
                      <i class="fa fa-plus"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="jm-item second">
              <div class="jm-item-wrapper">
                <div class="jm-item-image">
                  <img src="http://placehold.it/320x213" alt="" />
                  <div class="jm-item-description">
                    <div class="jm-item-button">
                      <i class="fa fa-plus"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="jm-item second">
              <div class="jm-item-wrapper">
                <div class="jm-item-image">
                  <img src="http://placehold.it/320x213" alt="" />
                  <div class="jm-item-description">
                    <div class="jm-item-button">
                      <i class="fa fa-plus"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="jm-item second">
              <div class="jm-item-wrapper">
                <div class="jm-item-image">
                  <img src="http://placehold.it/320x213" alt="" />
                  <div class="jm-item-description">
                    <div class="jm-item-button">
                      <i class="fa fa-plus"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="jm-item second">
              <div class="jm-item-wrapper">
                <div class="jm-item-image">
                  <img src="http://placehold.it/320x213" alt="" />
                  <div class="jm-item-description">
                    <div class="jm-item-button">
                      <i class="fa fa-plus"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="jm-item second">
              <div class="jm-item-wrapper">
                <div class="jm-item-image">
                  <img src="http://placehold.it/320x213" alt="" />
                  <div class="jm-item-description">
                    <div class="jm-item-button">
                      <i class="fa fa-plus"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="jm-item second">
              <div class="jm-item-wrapper">
                <div class="jm-item-image">
                  <img src="http://placehold.it/320x213" alt="" />
                  <div class="jm-item-description">
                    <div class="jm-item-button">
                      <i class="fa fa-plus"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <section id="sponsor" class="container">
    <!--SECTION SPONSOR-->
    <div class="client-sport client-sport-nomargin">
     <div class="content-banner">
       <ul class="sponsor second">
        <li><img src="http://placehold.it/273x133" alt="" /></li>
        <li><img src="http://placehold.it/273x133" alt="" /></li>
        <li><img src="http://placehold.it/273x133" alt="" /></li>
        <li><img src="http://placehold.it/273x133" alt="" /></li>
        <li><img src="http://placehold.it/273x133" alt="" /></li>
        <li><img src="http://placehold.it/273x133" alt="" /></li>
      </ul>
    </div>
  </div>
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

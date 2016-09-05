@extends('layouts.app')

@section('content')


   <section class="drawer">
    <div class="col-md-12 size-img back-img-video">
        <div class="effect-cover">
                <div class="banner_cont animated"><img src="images/atp_img.png" alt="" /><h3 class="txt-advert">UNCOVERED</h3></div>
            <p class="txt-advert-sub">Now in its fifth season, ATP World Tour Uncovered.</p>
        </div>
    </div>
   
    <section id="video" class="container secondary-page">
      <div class="general general-results">
           <div class="top-score-title col-md-9">
                <h3>Fleber <span>- VS -</span> Mikol</h3>
                <div class="col-md-12 news-video">
                   <video id="example_video_1" class="video-js vjs-default-skin" controls preload="auto" width="100%" height="395"> </video>
                </div>
                <div class="video-desc">
                    <h3 class="video-tit"><span>04.09.2014</span> US Open 2014 Wednesday Conference</h3>
                    <p class="video-arg">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                        Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper 
                        suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequa
                    </p>
                    <p class="video-arg">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                        Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper.
                    </p>
                </div>
                <div class="video-desc">
                    <h3 class="video-other-old">Other <span>Video</span><span class="point-little">.</span></h3>
                    <div class="col-md-4 other-videotitle">
                        <p class="othervideo-date">04.09.2014</p>
                        <p>Emr ATP Rankings</p>
                    </div>
                    <div class="col-md-4 other-videotitle">
                        <p class="othervideo-date">12.02.2014</p>
                        <p>ATP CONFERENCE</p>
                    </div>
                    <div class="col-md-4 other-videotitle otv-last">
                        <p class="othervideo-date">05.11.2014</p>
                        <p>US Open 2014</p>
                    </div>
                    <div class="col-md-4 other-video">
                      <img src="http://placehold.it/320x213" />
                      <i class="fa fa-video-camera"></i>
                    </div>
                    <div class="col-md-4 other-video">
                      <img src="http://placehold.it/320x213" />
                      <i class="fa fa-video-camera"></i>
                    </div>
                    <div class="col-md-4 other-video otv-last">
                      <img src="http://placehold.it/320x213" />
                      <i class="fa fa-video-camera"></i>
                    </div>
                </div>
               
                <div class="video-content">
                    <div class="col-md-4 other-videotitle">
                        <p class="othervideo-date">04.09.2014</p>
                        <p>Emr ATP Rankings</p>
                    </div>
                    <div class="col-md-4 other-videotitle">
                        <p class="othervideo-date">12.02.2014</p>
                        <p>ATP CONFERENCE</p>
                    </div>
                    <div class="col-md-4 other-videotitle otv-last">
                        <p class="othervideo-date">05.11.2014</p>
                        <p>US Open 2014</p>
                    </div>
                    <div class="clear"></div>
                    <div class="col-md-4 other-video">
                      <img src="http://placehold.it/320x213" />
                      <i class="fa fa-video-camera"></i>
                    </div>
                    <div class="col-md-4 other-video">
                      <img src="http://placehold.it/320x213" />
                      <i class="fa fa-video-camera"></i>
                    </div>
                    <div class="col-md-4 other-video otv-last">
                      <img src="http://placehold.it/320x213" />
                      <i class="fa fa-video-camera"></i>
                    </div>
                </div>
           </div><!--Close Top Match-->

        <!-- Right Column-->
           @include('layouts.right-content')
        </section>

<!--Video Tube-->
<script type="text/javascript" src="js/video.js"></script>
<script src="js/youtube/youtube.js" type="text/javascript"></script>
<script src="js/youtube/videojs.youtubeVideowall.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function () {
        "use strict";
        videojs('example_video_1', { 'techOrder': ['youtube'], 'src': 'https://www.youtube.com/watch?v=IQDjynOzgCk' }, function () {
            this.youtubeVideowall();
        });
    });
    </script>
 <script src="js/custom.js" type="text/javascript"></script>

@endsection
@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ URL::asset('socialsharekit/css/social-share-kit.css?v=1.0.10') }}">
   <section class="drawer">
    <div class="col-md-12 size-img back-img-video">
        <div class="effect-cover">
                <div class="banner_cont animated">
                  <!-- <img src="{{ URL::asset('images/atp_img.png') }}" alt="" /> -->
                  <h3 class="txt-advert">UNCOVERED</h3>
                </div>
            <p class="txt-advert-sub">Now in its fifth season, ATP World Tour Uncovered.</p>
        </div>
    </div>

    <section id="video" class="container secondary-page">
      <div class="general general-results">
          <!-- Page-Title -->
           <div class="top-score-title col-md-9">
             <h3>{{ $match_teams[0]['nama_participant'] }}<span> VS </span>{{ $match_teams[1]['nama_participant'] }}</h3>
             <div class="row">
                 <div class="col-sm-6 col-lg-4">
                     <div class="panel panel-default">
                         <div class="panel-body">
                             <div class="media-main">
                                 <center>
                                   <img class="thumb-lg img-circle" src="{!! asset('').'/'.$match_teams[0]['logo_participant'] !!}" alt="">
                                   <h4>{{ $match_teams[0]['nama_participant'] }}</h4>
                                 </center>
                             </div>
                         </div> <!-- panel-body -->
                     </div> <!-- panel -->
                 </div> <!-- end col -->

                 <div class="col-sm-6 col-lg-4">
                     <div class="panel panel-default">
                         <div class="panel-body">
                             <div class="media-main">
                                 <div class="col-md-5">
                                   <center>
                                     <h2>{{ $match_teams[0]['team_score'] }}</h2>
                                   </center>
                                 </div>
                                 <div class="col-md-2">
                                   <center>
                                     <h2>:</h2>
                                   </center>
                                 </div>
                                 <div class="col-md-5">
                                   <center>
                                     <h2>{{ $match_teams[1]['team_score'] }}</h2>
                                   </center>
                                 </div>
                             </div>
                             <div class="clearfix"></div>
                         </div> <!-- panel-body -->
                     </div> <!-- panel -->
                 </div> <!-- end col -->
                 <div class="col-sm-6 col-lg-4">
                     <div class="panel panel-default">
                         <div class="panel-body">
                             <div class="media-main">
                                 <center>
                                   <img class="thumb-lg img-circle" src="{!! asset('').'/'.$match_teams[1]['logo_participant'] !!}" alt="">
                                   <h4>{{ $match_teams[1]['nama_participant'] }}</h4>
                                 </center>
                             </div>
                         </div> <!-- panel-body -->
                     </div> <!-- panel -->
                 </div> <!-- end col -->
             </div> <!-- End row -->

             <div class="row">
                 <div class="col-md-6">
                     <div class="panel panel-default">
                         <div class="panel-body">
                           <div class="media-main">
                               {!! $match_teams[0]['team_comment'] !!}
                           </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="panel panel-default">
                         <div class="panel-body">
                           <div class="media-main">
                               {!! $match_teams[1]['team_comment'] !!}
                           </div>
                         </div>
                     </div>
                 </div>
             </div> <!-- End Row -->
             <hr>
                <h3>Streaming <span>Now </span><span class="point-little">!</span></h3>
                <div class="col-md-12 news-video">
                   <video id="example_video_1" class="video-js vjs-default-skin" controls preload="auto" width="100%" height="395"> </video>
                </div>
                <div class="row">
                    <div class="col-md-12 news-video">
                        <div class="video-desc">
                            <h3 class="video-tit"><span>{{ $matches->waktu }} </span>{{ $matches->nama }}</h3>
                            <p class="video-arg">
                               {!! $matches->deskripsi !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="top-score-title col-md-12">
                    <div class="col-md-3 col-md-offset-9">
                      <h4>Share with :</h4>
                      @include('bracket.include.share', [
                          'url' => request()->fullUrl(),
                          'description' => $matches->nama.' Video Streaming',
                          'image' => asset('').'/'.$matches->nama
                      ])
                    </div>
                  </div>
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
@endsection
@push('scripts')
<!--Video Tube-->
<script type="text/javascript" src="{{ URL::asset('js/video.js') }}"></script>
<script src="{{ URL::asset('js/youtube/youtube.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/youtube/videojs.youtubeVideowall.js') }}" type="text/javascript"></script>
<script type="text/javascript">
    $(function () {
        "use strict";
        videojs('example_video_1', { 'techOrder': ['youtube'], 'src': '{{ $matches->youtube }}' }, function () {
            this.youtubeVideowall();
        });
    });
    </script>
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

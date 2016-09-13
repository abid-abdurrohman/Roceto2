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
           <div class="top-score-title col-md-9">
                <h3>
                <?php $i=0 ?>
                @foreach($matches->match_team as $team)
                    <?php
                        $id_participant = $team->participant_id;
                        $con = mysqli_connect('localhost', 'root','','eo_sport');
                        if(!$con){
                          die('Could not Connect');
                        }
                        mysqli_select_db($con ,'eo_sport');
                        $sql = "SELECT nama_tim FROM participants WHERE participants.id=$id_participant";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        echo $row['nama_tim'];
                        if ($i == 0) {
                          echo " <span>- VS -</span> ";
                          $i++;
                        }
                    ?>
                @endforeach
                </h3>
                <div class="col-md-12 news-video">
                   <video id="example_video_1" class="video-js vjs-default-skin" controls preload="auto" width="100%" height="395"> </video>
                </div>
                <div class="video-desc">
                    <h3 class="video-tit"><span>{{ $matches->waktu }} </span>{{ $matches->nama }}</h3>
                    <p class="video-arg">
                       {!! $matches->deskripsi !!}
                    </p>
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

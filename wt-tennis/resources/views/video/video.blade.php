@extends('layouts.app')

@section('content')
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
@endpush

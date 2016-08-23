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
                   <video id="example_video_1" class="video-js vjs-default-skin vjs-paused vjs-controls-enabled vjs-user-inactive" controls preload="none" width="100%" height="395"
                      poster="img/poster_video.jpg"
                      data-setup="{}">
                    <source src="http://video-js.zencoder.com/oceans-clip.mp4" type='video/mp4' />
                    <source src="http://video-js.zencoder.com/oceans-clip.webm" type='video/webm' />
                    <source src="http://video-js.zencoder.com/oceans-clip.ogv" type='video/ogg' />
                    <track kind="captions" src="demo.captions.vtt" srclang="en" label="English"></track><!-- Tracks need an ending tag thanks to IE9 -->
                    <track kind="subtitles" src="demo.captions.vtt" srclang="en" label="English"></track>
                    <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                  </video>
                </div>
                <div class="video-desc">
                    <h3 class="video-tit"><span>04.09.2014</span> US Open 2014 Wednesday Press Conference Nishikori</h3>
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

       <!--VIDEO HTML5-->
<script type="text/javascript" src="js/video.js"></script>
<script src="js/custom.js" type="text/javascript"></script>
@endsection
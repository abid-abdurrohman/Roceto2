@extends('layouts.app')
@section('content')
<!--SECTION CONTAINER SLIDER-->
    <section id="summary-slider">
           <div class="general">
           <div class="content-result content-result-news col-md-12">
             <div id="textslide" class="effect-backcolor">
                <div class="container">
                    <div class="col-md-12 slide-txt">
                        <p class='sub-result aft-little welcome linetheme-left'>Creative</p>
                        <p class='sub-result aft-little linetheme-right'>Sport Event<span class="point-big">.</span></p>
                    </div>
                </div>
             </div>
           </div>
           <div id="slidematch" class="col-xs-12 col-md-12">
                  <div class="content-match-team-wrapper">
                     <span class="gdlr-left">Team TI 7A (Futsal)</span>
                     <span class="gdlr-upcoming-match-versus">VS</span>
                     <span class="gdlr-right">Team TKJ7B (Futsal)</span>
                  </div>
                  <div class="content-match-team-time">
                     <span class="gdlr-left">23 Sep 2016 - 14:00</span>
                     <span class="gdlr-right">Real Stadium</span>
                  </div>
               </div>
         </div>
    </section>

    <!-- SECTION NEWS SLIDER -->
     <section class="news_slide-over-color">
          <div class="news_slide-over"></div>
           <div class="container">
            <?php
              $konek = mysqli_connect('localhost', 'root','','eo_sport');
              if(!$konek){
                die('Could not Connect');
              }

              mysqli_select_db($konek ,'eo_sport');
              $sql = "SELECT * FROM news ORDER BY created_at DESC LIMIT 4";
              $result = mysqli_query($konek, $sql);
            ?>
             <div class="col-xs-12 col-md-12 top-slide-info">
             <?php
                while ($news = mysqli_fetch_array($result)) {
              ?>
              <div class="col-xs-6 col-md-6" style="margin-bottom:20px">
                <div class="col-md-4 slide-cont-img"><a href="{{ action('NewsUserController@show',$news['slug']) }}"><img class="scale_image" src="{!! asset('').'/'.$news['thumbnail'] !!}" alt=""/></a></div>
                <div class="event_date dd-date">{!! $news['created_at'] !!} 
                  <div class="post_theme">Exlusive</div>
                </div><h4> {{ $news['judul'] }}</h4>
                <p>{!! str_limit($news['deskripsi'], 350) !!}</p> 
              </div>              
              <?php } ?> 
            </div>
           </div>
     </section>

     <section id="parallaxTraining">
        <div class="black-shad">
        <div class="container">
            <div class="col-md-12">
                <div class="txt-training">
                  <p>start your</p>
                  <h2>TRAINING TODAY</h2>
                  <a href="#">Basic</a><a href="#">Medium</a><a href="#">Expert</a>
                </div>
            </div>
        </div>
      </div>
     </section>
    <!--SECTION Match TOP SCORE-->
     <section id="atp-match">
           <div class="container">
           <div id="people-top" class="top-match col-xs-12 col-md-12">
              <h3 class="news-title n-match">Last <span>Match</span><span class="point-little">.</span></h3>
              <p class="subtitle">A small creative team, trying to enrich the lives of others and build brands
                                    that a normal humans can understand.</p>
            <!--SECTION ATP MATCH-->
              <div class="next-match-co col-xs-12 col-md-12">
                 <div id="nextmatch-content" class="experience">
                   <div class="col-xs-12 atphead"><div class="match-sing-title"><img src="images/sub-ball.png" alt="" />ATP.HEAD2</div></div>
                   <div class="col-xs-4 pht-1 pht-left">
                       <div class="img-face-home">
                          <img src="http://placehold.it/235x224" alt="" />
                          <p class="name-mc">Team 7A (Basket)</p>
                       </div>
                  </div>
                  <div class="col-xs-4 pl-point ">
                      <p class="col-xs-12 name-mc-title">BEIJING - FIRST ROUND</p>
                      <div class="col-xs-4 nm-result">
                            <p class="nr1 ris1"> 0 </p>
                            <p class="nr2"> 0% </p>
                      </div>
                      <div class="col-xs-4 nm-result-vs">
                            <p class="nrvs"> - VS - </p>
                      </div>
                      <div class="col-xs-4 nm-result">
                            <p class="nr1 ris2"> 1 </p>
                            <p class="nr2"> 100% </p>
                      </div>
                  </div>
                   <div class="col-xs-4 pht-1 pht-right">
                        <div class="img-face-home">
                            <img src="http://placehold.it/235x224" alt="" />
                            <p class="name-mc">Team 7Aeu (Basket)</p>
                        </div>
                  </div>
                  <div class="col-xs-12 atphead">
                      <div class="match-sing-title inf-bottom">
                        <p><i class="fa fa-calendar-o"></i>May 16, 2012 14:30 - 16:00 <i class="fa fa-map-marker"></i> London Brion Stadium</p>
                      </div>
                      <!-- <div class="score-view-all"><a class="pl-point-button" href="{{ url('/results')}}">View All SCORE</a></div> -->
                  </div>
                 </div>
              </div>
             </div><!--Close Top Match-->
           </div>
     </section>

 <!--SECTION NEXT MATCH-->
     <section id="next-match">
           <div  class="container">
              <div class="next-match-news top-match col-xs-12 col-md-12">
              <h3 class="news-title n-match">Next <span>Match</span><span class="point-little">.</span></h3>
              <p class="subtitle">A small creative team, trying to enrich the lives of others and build brands
                                    that a normal humans can understand.</p>
                <div class="other-match col-md-6">
                    <div class="score-next-time">
                        <div class="circle-ico"><p>ATP</p></div>
                    </div>
                    <div id="getting-started"></div>
                    <div class="col-xs-5 col-md-5 match-team">
                        <img class="" src="images/team1.png" alt=""/>
                        <p>Fernand</p>
                    </div>
                    <div class="col-xs-2 col-md-2 match-team-vs">
                        <span class="txt-vs"> - vs - </span>
                    </div>
                    <div class="col-xs-5 col-md-5 match-team">
                        <img class="" src="images/team2.png" alt=""/>
                        <p>Brain</p>
                    </div>
                    <div class="next-match-place">
                        <p class='sub-result'>Qatar ExonMobil</p>
                        <p class="dd-news-date">April 22, 2016 ~ 2:30pm Canada Stadium</p>
                    </div>

                </div>
                <div class="other-match col-md-6">
                    <div class="match-team-list">
                        <img class="t-img1" src="images/team1_small.png" alt=""/>
                        <span>Fernand</span>
                        <span class="txt-vs"> - vs - </span>
                        <span>Brain</span>
                        <img class="t-img2" src="images/team1_small.png" alt=""/>
                        <p>22/06/2015 14:30 - 16:00</p>
                    </div>
                    <div class="match-team-list">
                        <img class="t-img1" src="images/team1_small.png" alt=""/>
                        <span>Fernand</span>
                        <span class="txt-vs"> - vs - </span>
                        <span>Brain</span>
                        <img class="t-img2" src="images/team1_small.png" alt=""/>
                        <p>22/06/2015 14:30 - 16:00</p>
                    </div>
                    <div class="match-team-list">
                        <img class="t-img1" src="images/team1_small.png" alt=""/>
                        <span>Fernand</span>
                        <span class="txt-vs"> - vs - </span>
                        <span>Brain</span>
                        <img class="t-img2" src="images/team1_small.png" alt=""/>
                        <p>22/06/2015 14:30 - 16:00</p>
                    </div>
                    <div class="team-view-all">
                       <p>View all</p>
                    </div>
                </div>
            </div>
           </div>
     </section>
<!--SECTION Quota RESULTS-->
     <section id="resultsPoint">
           <div class="container">
                    <div class="top-match col-xs-12 col-md-12">
                     <div class="top-score-title">
                        <h3>Quota<span class="point-little">.</span></h3>
                        <p class="subtitle">A small creative team, trying to enrich the lives of others and build brands
                                    that a normal humans can understand.</p>
                        <div class="col-xs-12 circle-percentage">
                          <div class="col-xs-3">
                            <div class="pie_progress" role="progressbar" data-goal="90" data-barcolor="#f59123" data-barsize="10">
                             <div class="pie_content">
                                <div class="pie_progress__number">90%</div>
                                <div class="pie_progress__content">Futsal</div>
                             </div>
                            </div>
                          </div>
                          <div class="col-xs-3">
                            <div class="pie_progress" role="progressbar" data-goal="83" data-barcolor="#2c333b" data-barsize="10">
                             <div class="pie_content">
                                <div class="pie_progress__number">83</div>
                                <div class="pie_progress__content">Basket</div>
                             </div>
                            </div>
                          </div>
                          <div class="col-xs-3">
                            <div class="pie_progress" role="progressbar" data-goal="45" data-barcolor="#f59123" data-barsize="10">
                             <div class="pie_content">
                                <div class="pie_progress__number">45%</div>
                                <div class="pie_progress__content">Bulu Tangkis</div>
                             </div>
                            </div>
                          </div>
                          <div class="col-xs-3">
                            <div class="pie_progress" role="progressbar" data-goal="73" data-barcolor="#2c333b" data-barsize="10">
                             <div class="pie_content">
                                <div class="pie_progress__number">73%</div>
                                <div class="pie_progress__content">Voli</div>
                             </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-xs-12 circle-percentage">
                          <div class="col-xs-3">
                            <div class="pie_progress" role="progressbar" data-goal="78" data-barcolor="#2c333b" data-barsize="10">
                             <div class="pie_content">
                                <div class="pie_progress__number">78%</div>
                                <div class="pie_progress__content">Berenang</div>
                             </div>
                            </div>
                          </div>
                          <div class="col-xs-3">
                            <div class="pie_progress" role="progressbar" data-goal="65" data-barcolor="#f59123" data-barsize="10">
                             <div class="pie_content">
                                <div class="pie_progress__number">65%</div>
                                <div class="pie_progress__content">Marathon</div>
                             </div>
                            </div>
                          </div>
                          <div class="col-xs-3">
                            <div class="pie_progress" role="progressbar" data-goal="32" data-barcolor="#2c333b" data-barsize="10">
                             <div class="pie_content">
                                <div class="pie_progress__number">32%</div>
                                <div class="pie_progress__content">Catur</div>
                             </div>
                            </div>
                          </div>
                          <div class="col-xs-3">
                            <div class="pie_progress" role="progressbar" data-goal="28" data-barcolor="#f59123" data-barsize="10">
                             <div class="pie_content">
                                <div class="pie_progress__number">28%</div>
                                <div class="pie_progress__content">Lompat Tinggi</div>
                             </div>
                            </div>
                          </div>
                        </div>

                        <div class="clear"></div>

                      </div>
                    </div>
                </div>
     </section>
 <!-- PARALLAX BLACK TENNIS-->
     <section class="bbtxt-content">

           <div class="container">
                    <div class="col-xs-12 bbtxt-box">
                        <h4><i class="fa fa-quote-left"></i>Tennis<span class="point-big">.</span> <span class="middle-txt">is the new black<span class="point-little">.</span></span><i class="fa fa-quote-right"></i></h4>
                        <p class="subin">The best tennis tour around the europe step by step.</p>
                        <div class="col-md-6 homevideo-top">
                             <h3 class="home-video-title">Amazing Video</h3>
                            <div class="col-md-12 homevideo">

                                <div class="col-md-5 it-video">
                                  <a href="{{ url('/video') }}"><img class="scale_image" src="http://placehold.it/624x428" alt=""/>
                                  <i class="fa fa-video-camera"></i></a>
                                </div>
                                <div class="video-txt">
                                   <div class="event_date_video">July 01, 2014 5:50 am</div>
                                   <div class="post_theme video-post">Interview</div><h3>Neque porro quisquam</h3>
                                   <p>Aliquam erat volutpat. So your content will always look good on any screen size like<br>
                                        Tablet, Phones, Imac, Macbook &amp; all sort of devices. </p>
                                </div>
                            </div>
                            <div class="col-md-12 homevideo">
                                <div class="col-md-5 it-video">
                                  <a href="{{ url('/video') }}"><img class="scale_image" src="http://placehold.it/624x428" alt=""/>
                                  <i class="fa fa-video-camera"></i></a>
                                </div>
                                <div class="video-txt">
                                    <div class="event_date_video">July 01, 2014 5:50 am</div>
                                    <h3>Ante ipsum primis</h3>
                                   <p>Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi.</p>
                                </div>
                            </div>
                            <div class="col-md-12 homevideo">
                                <div class="col-md-5 it-video">
                                  <a href="{{ url('/video') }}"><img class="scale_image" src="http://placehold.it/624x428" alt=""/>
                                  <i class="fa fa-video-camera"></i></a>
                                </div>
                                <div class="video-txt">
                                    <div class="event_date_video">July 01, 2014 5:50 am</div>
                                    <h3>Neque porro quisquam</h3>
                                   <p>Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 homevideo-top">
                            <h3 class="home-video-title">Amazing Video</h3>
                            <div class="col-md-12 homevideo">
                                <div class="col-md-5 it-video">
                                  <a href="{{ url('/video') }}"><img class="scale_image" src="http://placehold.it/624x428" alt=""/>
                                  <i class="fa fa-video-camera"></i></a>
                                </div>
                                <div class="video-txt">
                                   <div class="event_date_video">July 01, 2014 5:50 am</div>
                                   <div class="post_theme video-post">Interview</div><h3>Neque porro quisquam</h3>
                                   <p>Aliquam erat volutpat. So your content will always look good on any screen size like<br>
                                        Tablet, Phones, Imac, Macbook &amp; all sort of devices. </p>
                                </div>
                            </div>
                            <div class="col-md-12 homevideo">
                                <div class="col-md-5 it-video">
                                  <a href="{{ url('/video') }}"><img class="scale_image" src="http://placehold.it/624x428" alt=""/>
                                  <i class="fa fa-video-camera"></i></a>
                                </div>
                                <div class="video-txt">
                                    <div class="event_date_video">July 01, 2014 5:50 am</div>
                                    <h3>Ante ipsum primis</h3>
                                   <p>Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi.</p>
                                </div>
                            </div>
                            <div class="col-md-12 homevideo">
                                <div class="col-md-5 it-video">
                                  <a href="{{ url('/video') }}"><img class="scale_image" src="http://placehold.it/624x428" alt=""/>
                                  <i class="fa fa-video-camera"></i></a>
                                </div>
                                <div class="video-txt">
                                    <div class="event_date_video">July 01, 2014 5:50 am</div>
                                    <h3>Neque porro quisquam</h3>
                                   <p>Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; </p>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
     </section>


<!--SECTION LAST PHOTO-->
     <section id="news-section">
           <div class="container">
                   <div class="top-match col-xs-12 col-md-12">
                      <div class="news-content">
                       <h3 class="news-title">Latest <span>Photo</span><span class="point-little">.</span></h3>
                       <p class="subtitle">A small creative team, trying to enrich the lives of others and build brands
                                    that a normal humans can understand.</p>
                       <div id="container-vert-n">
                        <dl class="group">
                            <dt></dt>
                            <dd>
                                <ul class="filter group albumFilter">
                                    <li data-filter="*" class="current"><a  href="#">ALL</a></li>
                                      <?php
                                        
                                        $sql = "SELECT * FROM events";
                                        $result = mysqli_query($konek, $sql);
                                        while ($events = mysqli_fetch_array($result)) {
                                      ?>
                                      <li data-filter=".cat{{ $events['id']}}"><a  href="#">{{ $events['nama']}}</a></li>
                                    <?php } ?>
                                </ul>

                            </dd>
                        </dl>
                        <div class="clear"></div>
                        </div>
                    </div>
                  </div>
            </div>

          <ul class="portfolio group albumContainer"> 
            <?php
              $sql = "SELECT * FROM galleries";
              $result = mysqli_query($konek, $sql);
              while ($galleries = mysqli_fetch_array($result)) {
            ?>
              <li class="item block cat{{ $galleries['event_id']}} col-xs-3 ">
                      <a href="{{ $galleries['thumbnail'] }}" rel="prettyPhotogalleries[portfolio]"><img src="{{ $galleries['thumbnail'] }}"  alt="{{ $galleries['judul'] }}" /></a>
                    </li>
            <?php } ?>  
          </ul>
     </section>

    <!--end Gallery-->
 
    
<script>
    $(document).ready(function() {
      if (window.location.hash == '#_=_') {
          window.location.hash = ''; // for older browsers, leaves a # behind
          history.pushState('', document.title, window.location.pathname); // nice and clean
          e.preventDefault(); // no page reload
      }
    });
</script>
@endsection

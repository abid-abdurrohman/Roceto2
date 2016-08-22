@extends('layouts.app')
@section('content')
  <section class="drawer">
            <div class="col-md-12 size-img back-img-video">
               <div class="effect-cover">
                    <h3 class="txt-advert animated">The best Tennis Action</h3>
                    <p class="txt-advert-sub">Photo gallery with the best action in the tournament.</p>
                </div>
           </div>
    
    <section id="summary" class="container secondary-page">
      <div class="general general-results tournaments">
           
           <div class="top-score-title right-score col-md-9">
                <h3>Photo <span>Gallery</span><span class="point-little">.</span></h3>
                <!-- Category Filter -->
	                <dl class="group">
		                <dd>
			                <ul class="filter group albumFilter"> 
				                <li data-filter="*" class="current"><a  href="#">ALL</a></li>
                                @foreach($events as $event)
                                <li data-filter=".cat{{ $event->id }}"><a  href="#">{{ $event->nama }}</a></li>
                                @endforeach
			                </ul> 
		                </dd>
	                </dl>
                        @foreach($events as $event)
                            <h3>{{$kat->event_id}}</h3>
                        @endforeach

	                <!-- Portfolio Items -->
	                <ul class="portfolio group albumContainer">
                        @foreach($kategori as $kat)
		                <li class="item block cat2">
			                <a href="http://placehold.it/1600x1000" rel="prettyPhoto[portfolio]"><img src="http://placehold.it/1280x800"  alt="Yulia Gorbachenko, Hannah 1" /></a>
		                </li>
                        @endforeach
		                <li class="item block cat1">
			                <a href="http://placehold.it/1600x1000" rel="prettyPhoto[portfolio]"><img src="http://placehold.it/1280x800"  alt="Yulia Gorbachenko, Hair 1" /></a>
		                </li>
		                <li class="item block cat1">
			                <a href="http://placehold.it/1600x1000" rel="prettyPhoto[portfolio]"><img src="http://placehold.it/1280x800"  alt="Yulia Gorbachenko, Hair 2" /></a>
		                </li>
		                <li class="item block cat3">
			                <a href="http://placehold.it/1600x1000" rel="prettyPhoto[portfolio]"><img src="http://placehold.it/1280x800"  alt="Yulia Gorbachenko, Traction 1" /></a>
		                </li>
		                <li class="item block cat1 cat3">
			                <a href="http://placehold.it/1600x1000" rel="prettyPhoto[portfolio]"><img src="http://placehold.it/1280x800"  alt="Yulia Gorbachenko, Traction 1" /></a>
		                </li>
		                <li class="item block hiphop">
			                <a href="http://placehold.it/1600x1000" rel="prettyPhoto[portfolio]"><img src="http://placehold.it/1280x800"  alt="Yulia Gorbachenko, Beauty 2" /></a>
		                </li>
		                <li class="item block cat4">
			                <a href="http://placehold.it/1600x1000" rel="prettyPhoto[portfolio]"><img src="http://placehold.it/1280x800"  alt="Yulia Gorbachenko, Wavelength 1" /></a>
		                </li>
		                <li class="item block cat4">
			                <a href="http://placehold.it/1600x1000" rel="prettyPhoto[portfolio]"><img src="http://placehold.it/1280x800"  alt="Yulia Gorbachenko, On Fire 1" /></a>
		                </li>
		                <li class="item block cat1">
			                <a href="http://placehold.it/1600x1000" rel="prettyPhoto[portfolio]"><img src="http://placehold.it/1280x800"  alt="Yulia Gorbachenko, On Fire 2" /></a>
		                </li>
		                <li class="item block cat1">
			                <a href="http://placehold.it/1600x1000" rel="prettyPhoto[portfolio]"><img src="http://placehold.it/1280x800"  alt="Yulia Gorbachenko, Hair 3" /></a>
		                </li>
		                <li class="item block cat3">
			                <a href="http://placehold.it/1600x1000" rel="prettyPhoto[portfolio]"><img src="http://placehold.it/1280x800"  alt="Yulia Gorbachenko, On Fire 3" /></a>
		                </li>
		                <li class="item block cat3">
			                <a href="http://placehold.it/1600x1000" rel="prettyPhoto[portfolio]"><img src="http://placehold.it/1280x800"  alt="Yulia Gorbachenko, Wavelength 2" /></a>
		                </li>
	                </ul>
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
<!--Gallery-->

<script src="js/gallery/jquery.prettyPhoto.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function () {
        "use strict";
        $(".portfolio a").hover(function () {
            $(this).children("img").animate({ opacity: 0.75 }, "fast");
        }, function () {
            $(this).children("img").animate({ opacity: 1.0 }, "slow");
        });

        $("a[rel^='prettyPhoto']").prettyPhoto({
            animation_speed: 'fast', /* fast/slow/normal */
            slideshow: 5000, /* false OR interval time in ms */
            autoplay_slideshow: false, /* true/false */
            opacity: 0.80, /* Value between 0 and 1 */
            show_title: true, /* true/false */
            allow_resize: true, /* Resize the photos bigger than viewport. true/false */
            default_width: 500,
            default_height: 344,
            counter_separator_label: '/', /* The separator for the gallery counter 1 "of" 2 */
            theme: 'pp_default', /* light_rounded / dark_rounded / light_square / dark_square / facebook */
            horizontal_padding: 20, /* The padding on each side of the picture */
            hideflash: false, /* Hides all the flash object on a page, set to TRUE if flash appears over prettyPhoto */
            wmode: 'opaque' /* Set the flash wmode attribute */
        });
    });

</script>
<!--<script src="js/gallery/gallery.js" type="text/javascript"></script>-->
<script src="js/gallery/isotope.js" type="text/javascript"></script>
     
<script type="text/javascript">

    $(window).load(function () {
        "use strict";
        var $container = $('.albumContainer');
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });

        $('.albumFilter li').on('click', function (e) {
            $('.albumFilter .current').removeClass('current');
            $(this).addClass('current');

            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });
    });

</script>
@endsection

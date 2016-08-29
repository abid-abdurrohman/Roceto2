<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Sport Event</title>
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />

  <meta name="author" content="Corsini Alessio" />
  <meta name="keywords" content="Tennis, club, events, football, golf, non-profit, betting assistant, football,fitness, tennis, sport, soccer, goal, sports, volleyball, basketball,  charity, club, cricket, football, hockey, magazine, non profit, rugby, soccer, sport, sports, tennis" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
  {{ Html::style('css/bootstrap.css') }}
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

  <link href="{{ URL::asset('css/online/open_sans.css') }}" rel='stylesheet' type='text/css'/>
  <!--<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'/>-->
  <link href="{{ URL::asset('css/online/raleway.css') }}" rel='stylesheet' type='text/css'/>
  <link href="{{ URL::asset('css/online/oswald.css') }}" rel='stylesheet' type='text/css'>

  <link href="{{ URL::asset('css/fonts/font-awesome-4.1.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
  <!--Clients-->
  <link href="{{ URL::asset('css/own/owl.carousel.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ URL::asset('css/own/owl.theme.css') }}" rel="stylesheet" type="text/css" />

  <link href="{{ URL::asset('css/jquery.bxslider.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ URL::asset('css/jquery.jscrollpane.css') }}" rel="stylesheet" type="text/css" />

  <link href="{{ URL::asset('css/minislide/flexslider.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ URL::asset('css/minislide/form_wizard.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ URL::asset('css/component.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ URL::asset('css/dropzone.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ URL::asset('css/bracket.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ URL::asset('css/prettyPhoto.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ URL::asset('css/style_dir.css') }}" rel="stylesheet" type="text/css" />
  <link rel="shortcut icon" type="image/png" href="{{ URL::asset('img/favicon.ico') }}" />
  <link href="{{ URL::asset('css/responsive.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ URL::asset('css/animate.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ URL::asset('css/submenu.css') }}" rel="stylesheet" type="text/css" />

  <!-- Waves-effect -->
  <link href="{{ URL::asset('admin_asset/css/waves-effect.css') }}" rel="stylesheet">

  <!--javascripts collapse-->
  <script src="{{ URL::asset('js/jquery-1.10.2.js') }}" type="text/javascript"></script>
  <script src="{{ URL::asset('js/jquery.ui.totop.js') }}" type="text/javascript') }}"></script>
  <script src="{{ URL::asset('js/jquery.accordion.js') }}" type="text/javascript') }}"></script>

  <!--Video Player-->
  <link href="{{ URL::asset('css/video-js.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ URL::asset('css/responsive.css') }}" rel="stylesheet" type="text/css" />

</head>
<body>

  <!--SECTION TOP LOGIN-->
  <section class="content-top-login">
   <div class="container">
    <div class="col-md-12">
     <div class="box-support">
       <p class="support-info"><i class="fa fa-envelope-o"></i> info@wttennis.com</p>
     </div>
     <div class="box-login">
       <!-- <i class="fa fa-shopping-cart"></i> -->
       <a href="{{ url('/login') }}">Login</a>
       <!-- <a href='login.html'>Sign Up</a> -->
     </div>
    </div>
  </div>
</section>

<!--SECTION MENU -->
<section class="container box-logo">
  <header>
    <div class="content-logo col-md-12">
    <div class="logo">
      <img src="{{ URL::asset('img/logo2.png') }}" alt="" />
    </div>
      <div class="bt-menu"><a href="#" class="menu"><span>&equiv;</span> Menu</a></div>
      <div class="box-menu"> 
        <nav id="cbp-hrmenu" class="cbp-hrmenu">
          <ul id="menu">
              <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right" id="menu">
                  <li><a class="lnk-menu {{ Request::segment(1) === 'home' ? 'active' : null }}" href="{{ action('HomeController@index') }}">HOME</a>
                  </li>
                  <li>
                    <a href="#" class="dropdown-toggle lnk-menu" data-toggle="dropdown"> COMPETITION <b class="caret"></b></a>
                    <ul class="dropdown-menu multi-level">
                      <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown">BASKET</a>
                        <ul class="dropdown-menu">
                          <li><a href="{{ action('RegisterController@index',1) }}" ><span>Group</span></a></li>
                          <li class="divider"></li>
                          <li><a href="{{ action('RegisterController@index',2) }}" ><span>Individu</span></a></li>
                        </ul>
                      </li> 
                      <li class="divider"></li>
                      <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown">BASKET</a>
                        <ul class="dropdown-menu">
                          <li><a href="{{ action('RegisterController@index',3) }}" ><span>Group</span></a></li>
                          <li class="divider"></li>
                          <li><a href="{{ action('RegisterController@index',4) }}" ><span>Individu</span></a></li>
                        </ul>
                      </li>
                      <li class="divider"></li>
                      <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown">BULU TANGKIS</a>
                        <ul class="dropdown-menu">
                          <li><a href="{{ action('RegisterController@index',5) }}" ><span>Group</span></a></li>
                          <li class="divider"></li>
                          <li><a href="{{ action('RegisterController@index',6) }}" ><span>Individu</span></a></li>
                        </ul>
                      </li>
                      <li class="divider"></li>
                      <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown">VOLI</a>
                        <ul class="dropdown-menu">
                          <li><a href="{{ action('RegisterController@index',7) }}" ><span>Group</span></a></li>
                          <li class="divider"></li>
                          <li><a href="{{ action('RegisterController@index',8) }}" ><span>Individu</span></a></li>
                        </ul>
                      </li>
                      <li class="divider"></li>
                      <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown">BERENANG</a>
                        <ul class="dropdown-menu">
                          <li><a href="{{ action('RegisterController@index',9) }}" ><span>Group</span></a></li>
                          <li class="divider"></li>
                          <li><a href="{{ action('RegisterController@index',10) }}" ><span>Individu</span></a></li>
                        </ul>
                      </li>
                      <li class="divider"></li>
                      <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown">MARATHON</a>
                        <ul class="dropdown-menu">
                          <li><a href="{{ action('RegisterController@index',11) }}" ><span>Group</span></a></li>
                          <li class="divider"></li>
                          <li><a href="{{ action('RegisterController@index',12) }}" ><span>Individu</span></a></li>
                        </ul>
                      </li>
                      <li class="divider"></li>
                      <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown">CATUR</a>
                        <ul class="dropdown-menu">
                          <li><a href="{{ action('RegisterController@index',13) }}" ><span>Group</span></a></li>
                          <li class="divider"></li>
                          <li><a href="{{ action('RegisterController@index',14) }}" ><span>Individu</span></a></li>
                        </ul>
                      </li>
                      <li class="divider"></li>
                     <li class="dropdown-submenu">
                        <a class="dropdown-toggle" data-toggle="dropdown">LOMPAT TINGGI</a>
                        <ul class="dropdown-menu">
                          <li><a href="{{ action('RegisterController@index',7) }}" ><span>Group</span></a></li>
                          <li class="divider"></li>
                          <li><a href="{{ action('RegisterController@index',8) }}" ><span>Individu</span></a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="#" class="dropdown-toggle lnk-menu" data-toggle="dropdown"> PARTICIPANT <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="{{ url('/tim') }}"><span>Tim</span></a></li>
                      <li class="divider"></li>
                      <li><a href="{{ url('/individual') }}"><span>Single Player</span></a></li>
                      <li class="divider"></li>
                      <li><a href="{{ action('GalleryUserController@index') }}"><span>Gallery</span></a></li>
                      <li class="divider"></li>
                      <li><a href="{{ url('/video') }}"><span>Video</span></a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="#" class="dropdown-toggle lnk-menu" data-toggle="dropdown"> EVENTS <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="{{ url('/match')}}"><span>Points</span></a></li>
                      <li class="divider"></li>
                      <li><a href="{{ url('/jadwal') }}"><span>Schedule</span></a></li>
                      <li class="divider"></li>
                      <li><a href="{{ url('/bagan') }}"><span>Bracket</span></a></li>
                      <li class="divider"></li>
                      <li><a href="{{ url('/results') }}"><span>Results</span></a></li>
                    </ul>
                  </li>
                   <li><a class="lnk-menu {{ Request::segment(1) === 'news' ? 'active' : null }}" href="{{ action('NewsUserController@index') }}">News</a></li>
                  <li><a class="lnk-menu {{ Request::segment(1) === 'contact' ? 'active' : null }}" href="{{ url('/contact') }}">Contact</a></li>
                    </ul>
                  </li>
                </ul>
              </div><!--/.nav-collapse -->     
            </div>
          </ul>  
        </nav>
      </div>
    </div>
  </header>
</section>



@yield('content')

<!--SECTION SPONSOR-->
     <section class="container">
           <div class="client-sport client-sport-nomargin home-pg">
               <div class="content-banner">
                     <ul class="sponsor second">
                      <li><img src="{{ URL::asset('img\sponsorship\aqua.jpg') }}" alt="" /></li>
                      <li><img src="{{ URL::asset('img\sponsorship\danone.jpg') }}" alt="" /></li>
                      <li><img src="{{ URL::asset('img\sponsorship\nike.jpg') }}" alt="" /></li>
                      <li><img src="{{ URL::asset('img\sponsorship\pocari.jpg') }}" alt="" /></li>
                      <li><img src="{{ URL::asset('img\sponsorship\sariroti.jpg') }}" alt="" /></li>
                      <li><img src="{{ URL::asset('img\sponsorship\yakult.jpg') }}" alt="" /></li>
                    </ul>
                </div>
          </div>
     </section>


<!--SECTION FOOTER-->
<section id="footer-tag">
 <div class="container">
   <div class="col-md-12">
    <div class="col-md-3">
     <h3>About Us</h3>
     <p>Thank you for visiting tennisclub.com. Our mission is to
       provide unrivalled and unbiased informative and resources to help any sports fan who enjoys a flutter make informed and value led decisions.</p>
       <p>Our mission is to
         provide unrivalled and unbiased informative, resources to help any sports fan who enjoys a flutter make.</p>
       </div>
       <div class="col-md-3 cat-footer">
        <div class="footer-map"></div>
        <h3 class='last-cat'>Categories</h3>
        <ul class="last-tips">
          <li><a href="tournaments.html">Tournaments</a></li>
          <li><a href="results.html">All Results</a></li>
          <li><a href="matches.html">Matches London ATP</a></li>
          <li><a href="matches.html">Double ATP</a></li>
          <li><a href="matches.html">Double WTP</a></li>
          <li><a href="shops.html">Shop Best Price</a></li>
        </ul>
      </div>
      <div class="col-md-3">
       <h3>Last News</h3>
       <ul class="footer-last-news">
        <li><img src="http://placehold.it/320x213" alt="" /><p>Fusce risus metus, placerat in consectetur eu...</p></li>
        <li><img src="http://placehold.it/320x213" alt="" /><p>Fusce risus metus, placerat in consectetur eu...</p></li>
        <li><img src="http://placehold.it/320x213" alt="" /><p>Fusce risus metus, placerat in consectetur eu...</p></li>
      </ul>
    </div>
    <div class="col-md-3 footer-newsletters">
      <h3>Newsletters</h3>
      <form method="post">
        <div class="name">
          <label for="name">* Name:</label><div class="clear"></div>
          <input id="name" name="name" type="text" placeholder="e.g. Mr. John Doe" required=""/>
        </div>
        <div class="email">
          <label for="email">* Email:</label><div class="clear"></div>
          <input id="email" name="email" type="text" placeholder="example@domain.com" required=""/>
        </div>
        <div id="loader">
          <input type="submit" value="Submit"/>
        </div>
      </form>
    </div>
    <div class="col-xs-12">
      <ul class="social">
        <li><a href=""><i class="fa fa-facebook"></i></a></li>
        <li><a href=""><i class="fa fa-twitter"></i></a></li>
        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
        <li><a href=""><i class="fa fa-digg"></i></a></li>
        <li><a href=""><i class="fa fa-rss"></i></a></li>
        <li><a href=""><i class="fa fa-youtube"></i></a></li>
        <li><a href=""><i class="fa fa-tumblr"></i></a></li>

      </ul>
    </div>
  </div>
</div>
</section>
<footer>
 <div class="col-md-12 content-footer">
  <p>© 2014 - 2015 wttennis.com. All rights reserved. </p>
</div>
</footer>


<script src="{{ URL::asset('js/jquery-1.10.2.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/jquery-migrate-1.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/jquery.transit.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/dropzone.min.js') }}" type="text/javascript"></script>

<script type="text/javascript">
  $(document).ready(function () {
    $(function () {
      "use strict";
                $('.accordion').accordion({ defaultOpen: 'section1' }); //some_id section1 in demo
              });
  });
</script>

<!-- jQuery  -->
<script src="{{ URL::asset('admin_asset/js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('admin_asset/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('admin_asset/js/waves.js') }}"></script>

<!---->
<!--MENU-->
<script src="{{ URL::asset('js/menu/modernizr.custom.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/menu/cbpHorizontalMenu.js') }}" type="text/javascript"></script>
<!--END MENU-->

<!--Mini Flexslide-->
<script src="{{ URL::asset('js/minislide/jquery.flexslider.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/minislide/form_wizard.js') }}" type="text/javascript"></script>

<!-- Percentace circolar -->
<script src="{{ URL::asset('js/circle/jquery-asPieProgress.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/circle/rainbow.min.js') }}" type="text/javascript"></script>

<!--Gallery-->
<script src="{{ URL::asset('js/gallery/jquery.prettyPhoto.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/gallery/isotope.js') }}" type="text/javascript"></script>

<!-- Button Anchor Top-->
<script src="{{ URL::asset('js/jquery.ui.totop.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/custom.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/jquery.bxslider.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/jquery.accordion.js') }}" type="text/javascript"></script>

<!--Carousel News-->
<script src="{{ URL::asset('js/jquery.easing.1.3.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/jquery.mousewheel.js') }}" type="text/javascript"></script>

<!--Carousel Clients-->
<script src="{{ URL::asset('js/own/owl.carousel.js') }}" type="text/javascript"></script>

<!--Count down-->
<script src="{{ URL::asset('js/jquery.countdown.js') }}" type="text/javascript"></script>

<script src="{{ URL::asset('js/custom_ini.js') }}" type="text/javascript"></script>

</body>
</html>

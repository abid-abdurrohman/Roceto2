@extends('layouts.app')

@section('content')

<section class="drawer">
  <div class="col-md-12 size-img back-img-shop">
    <div class="effect-cover">
      <h3 class="txt-advert animated">The best Product for player</h3>
      <p class="txt-advert-sub">Rackets - Ball - Bags - Shoes</p>
    </div>
  </div>

  <section id="shop" class="container secondary-page">
    <div class="general general-results">      
     <div class="top-score-title col-md-9">
      <h3>Product <span>Details</span><span class="point-little">.</span></h3>
      <div class="col-md-12 content-zoom">
        <div class="col-md-6 content-img-zoom">
         <img id="img_01" src="images\pertandingan\lompat-tinggi.jpg" width="400" height="340" />
       </div>
       <div class="col-md-6 content-desc-zoom">
         <h3>TOUR RED 15 PACK</h3>
         <p class="desc-prod">Designed for Wilson's pro players and carried on court by all players playing the new Wilson Six-One Racket. This is ideal for serious players of every level.</p>
         <p class="desc-price">$165.00</p>
         <div class="col-xs-6 box">    
          <label for="qty"><abbr title="Quantity">Qty</abbr></label>
          <input id="qty" value="0" />
          <button id="down" onclick="modify_qty(-1)">-1</button>
          <button id="up" onclick="modify_qty(1)">+1</button>

        </div>
        <div class="cart-bt"><a href="#"><i class="fa fa-shopping-cart"></i>Add Cart</a></div>
      </div>
    </div>

    <div class="col-md-12 content-more-det login-page">
      <h3>Register Now</h3>
        <form method="post" class="register-form" role="form" action="{{route('reg_lompat.store')}}">
        {{ csrf_field() }}

          <div class="full_name{{ $errors->has('fullname') ? ' has-error' : '' }}">
            <label for="fullname">* Nama Lengkap: </label><div class="clear"></div>
            <input id="nama" name="fullname" type="text" placeholder="Nama Lengkap" required/>
            @if ($errors->has('fullname'))
              <span class="help-block">
                  <strong>{{ $errors->first('fullname') }}</strong>
              </span>
            @endif
          </div>

          <div class="nickname{{ $errors->has('nickname') ? ' has-error' : '' }}">
            <label for="nickname">* Nama Panggilan :</label><div class="clear"></div>
            <input id="nickname" name="nickname" type="text" placeholder="Nama Panggilan" required=""/>
            @if ($errors->has('nickname'))
              <span class="help-block">
                  <strong>{{ $errors->first('nickname') }}</strong>
              </span>
            @endif
          </div>

          <div class="no_hp{{ $errors->has('no_hp') ? ' has-error' : '' }}">
            <label for="no_hp">* No. Telepon/Hp :</label><div class="clear"></div>
            <input id="no_hp" name="no_hp" type="text" placeholder="No. Telpon atau Hp" required=""/>
            @if ($errors->has('no_hp'))
              <span class="help-block">
                  <strong>{{ $errors->first('no_hp') }}</strong>
              </span>
            @endif
          </div>

          <div class="ttl{{ $errors->has('ttl') ? ' has-error' : '' }}">
            <label for="ttl">* TTL:</label><div class="clear"></div>
            <input id="ttl" name="ttl" type="date"  required=""/>
            @if ($errors->has('ttl'))
              <span class="help-block">
                  <strong>{{ $errors->first('ttl') }}</strong>
              </span>
            @endif
          </div>

          <div id="register-submit">
            <input type="submit" value="Submit"/>
          </div>
        </form>
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

@endsection

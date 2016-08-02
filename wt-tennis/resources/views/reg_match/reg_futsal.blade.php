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
         <img id="img_01" src="images\pertandingan\futsalball.jpg" width="400" height="340" />
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
        <form method="post" class="register-form" role="form" action="{{ route('reg_futsal.store') }}">
        {{ csrf_field() }}

          <div class="nama_tim{{ $errors->has('nama_tim') ? ' has-error' : '' }}">
            <label for="nama_tim">* Nama Tim : </label><div class="clear"></div>
            <input id="tim" name="nama_tim" type="text" placeholder="Nama Tim" required/>
            @if ($errors->has('nama_tim'))
              <span class="help-block">
                  <strong>{{ $errors->first('nama_tim') }}</strong>
              </span>
            @endif
          </div>

          <div class="nama_kapten{{ $errors->has('nama_kapten') ? ' has-error' : '' }}">
            <label for="nama_kapten">* Nama Kapten :</label><div class="clear"></div>
            <input id="kapten" name="nama_kapten" type="text" placeholder="Nama Kapten" required=""/>
            @if ($errors->has('nama_kapten'))
              <span class="help-block">
                  <strong>{{ $errors->first('nama_kapten') }}</strong>
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

          <div class="warna_kostum{{ $errors->has('warna_kostum') ? ' has-error' : '' }}">
            <label for="warna_kostum">* Warna Kostum :</label><div class="clear"></div>
            <input id="warna_kostum" name="warna_kostum" type="text" placeholder="Warna Kostum" required=""/>
            @if ($errors->has('warna_kostum'))
              <span class="help-block">
                  <strong>{{ $errors->first('warna_kosan') }}</strong>
              </span>
            @endif
          </div>

          <div class="jml_pemain">
            <label for="jml_pemain">* Jumlah Pemain :</label><div class="clear"></div>
            <input id="jml_pemain" name="jml_pemain" type="text" placeholder="Jumlah Pemain" required=""/>
            @if ($errors->has('jml_pemain'))
              <span class="help-block">
                  <strong>{{ $errors->first('jml_pemain') }}</strong>
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

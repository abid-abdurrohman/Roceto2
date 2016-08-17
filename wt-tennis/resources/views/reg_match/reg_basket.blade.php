@extends('layouts.app')

@section('content')

<!--javascripts collapse-->
<script src="{{ URL::asset('js/jquery-1.10.2.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/jquery.accordion.js" type="text/javascript') }}"></script>
<script type="text/javascript">
  $(document).ready(function () {
    $(function () {
      "use strict";
      $('.accordion').accordion({ defaultOpen: 'section1' }); //some_id section1 in demo
    });
  });
</script>

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
      <h3> Lomba <span>Basket</span><span class="point-little">.</span></h3>
      <div class="col-md-12 content-zoom">
        <div class="col-md-6 content-img-zoom">
        <img id="img_01" src="images\pertandingan\basketball.jpg" />
        </div>

        <div class="col-md-6 content-desc-zoom">
           <h3>Pertandingan Basket</h3>
           <p class="desc-prod">Designed for Wilson's pro players and carried on court by all players playing the new Wilson Six-One Racket. This is ideal for serious players of every level.</p>
           <p class="desc-price">$165.00</p>
           <div class="general general-results tournaments">

             <div id="c-calend" class="top-score-title right-score col-md-12">
                <div class="accordion accordion-close" id="section11"><i class="fa fa-calendar-o"></i>Peraturan<span></span></div>
                <div class="acc-content" style="display: block;">
                  <div>Sample Content</div>
                  <p>Content here....</p>
                </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-12 right-title">
        <h3>Register Now</h3>
        <div class="panel-body">
          <div class="form" style="margin-left:0px">
            <form class="cmxform form-horizontal tasi-form" id="signupForm" method="post" action="action('RegisterController@store_regBasket')" novalidate="novalidate" role="form" ">{{ csrf_field() }}

              <div class="form-group nama_tim{{ $errors->has('nama_tim') ? ' has-error' : '' }}">
                <label for="nama_tim" class="control-label col-lg-3">Nama Tim *</label>
                <div class="col-lg-9">
                  <input class=" form-control" id="tim" name="nama_tim" type="text" placeholder="Nama Tim" required>
                  @if ($errors->has('nama_tim'))
                  <span class="help-block">
                    <strong>{{ $errors->first('nama_tim') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <div class="form-group nama_kapten{{ $errors->has('nama_kapten') ? ' has-error' : '' }}">
                <label for="nama_kapten" class="control-label col-lg-3">Nama Kapten *</label>
                <div class="col-lg-9">
                  <input class=" form-control" id="kapten" name="nama_kapten" type="text" placeholder="Nama Kapten" required>
                  @if ($errors->has('nama_kapten'))
                  <span class="help-block">
                    <strong>{{ $errors->first('nama_kapten') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <div class="form-group no_hp{{ $errors->has('no_hp') ? ' has-error' : '' }}">
                <label for="no_hp" class="control-label col-lg-3">No. Hp *</label>
                <div class="col-lg-9">
                  <input class="form-control " id="no_hp" name="no_hp" type="text" placeholder="No. Telpon atau Hp" required>
                  @if ($errors->has('no_hp'))
                  <span class="help-block">
                    <strong>{{ $errors->first('no_hp') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <div class="form-group warna_kostum{{ $errors->has('warna_kostum') ? ' has-error' : '' }}">
                <label for="warna_kostum" class="control-label col-lg-3">Warna Kostum *</label>
                <div class="col-lg-9">
                  <input class="form-control " id="warna_kostum" name="warna_kostum" type="text" placeholder="Warna Kostum" required>
                  @if ($errors->has('warna_kostum'))
                  <span class="help-block">
                    <strong>{{ $errors->first('warna_kostum') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <div class="form-group jml_pemain">
                <label for="jml_pemain" class="control-label col-lg-3">Jumlah Pemain *</label>
                <div class="col-lg-9">
                  <input class="form-control " id="jml_pemain" name="jml_pemain" type="text" placeholder="Jumlah Pemain" required>
                  @if ($errors->has('jml_pemain'))
                  <span class="help-block">
                    <strong>{{ $errors->first('jml_pemain') }}</strong>
                  </span>
                  @endif
                </div>
              </div>

              <div class="form-group jml_pemain">
                <label for="jml_pemain" class="control-label col-lg-3"></label>
                <div class="form-group form-group-options col-xs-11 col-md-8">
                <div class="input-group input-group-option col-xs-12">
                 <input type="text" name="option[]" class="form-control" placeholder="tambah Pemain">
                    <span class="input-group-addon input-group-addon-remove">
                      <span class="fa fa-times"></span>
                    </span>
                  </div>
                </div>
              </div>
              <br>

            <div class="form-group ">
              <button style="float:right;" type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
            </div>
            </form>
          </div> <!-- .form -->

        </div> <!-- panel-body -->

      </div> <!-- col -->

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
@endsection

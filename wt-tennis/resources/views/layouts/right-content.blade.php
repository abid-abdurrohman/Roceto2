<div class="col-md-3 right-column">
 <div class="top-score-title col-md-12 right-title">
  <h3>Latest News</h3>
  <?php
    $konek = mysqli_connect('localhost', 'root','','eo_sport');
    if(!$konek){
      die('Could not Connect');
    }

    mysqli_select_db($konek ,'eo_sport');
    $sql = "SELECT * FROM news ORDER BY created_at DESC LIMIT 3";
    $result = mysqli_query($konek, $sql);
    while ($news = mysqli_fetch_array($result)) {
  ?>
  <div class="right-content data-news-pg">
    <p class="news-title-right"><b>{{ $news['judul'] }}</b></p>
    <p class="txt-right"> {!! str_limit($news['deskripsi'], 100) !!} </p>
    <a href="{{ action('NewsUserController@show', $news['slug']) }}" class="ca-more"><i class="fa fa-angle-double-right"></i>more...</a>
  </div>
  <?php } ?>
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
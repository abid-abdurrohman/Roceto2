@extends('layouts.app')

@section('content')

<section class="drawer">
  <div class="col-md-12 size-img back-img-single">
    <div class="effect-cover">
      <h3 class="txt-advert animated">The best ROGER FEDERER</h3>
      <p class="txt-advert-sub">Player on the ATP World Tour </p>
    </div>
  </div>

  <section id="single-match-pl" class="container secondary-page">
    <div class="general general-results players">   
     <div class="top-score-title right-score col-md-9">
      <div class="top-score-title player-vs">
       <h3>Ashe Stadium - <span>Final</span><span class="point-little">.</span></h3>
       <div class="main">
        <div class="tabs standard">
          <div class="tab-content">
           <div class="effect-color">
            <div class="tab active">
              <div class="col-md-12 player-score-bg"></div>
              <div class="col-md-12 player-photo">
                <img class="img-face img-mm1" src="http://placehold.it/120x114" alt="" />
                <img class="img-face img-mm2" src="http://placehold.it/120x114" alt="" />
              </div>
              <div class="col-md-12 play-vs">
                <div class="result-name">
                  <img src="img/flag2.jpg" alt="" />
                  <span>RODAK JAMAL</span> 
                  <span class="txt-vs">vs</span> 
                  <img src="img/flag1.jpg" alt="" />
                  <span>JAMES WOZNIK</span>
                </div>
              </div>
              <div class="clear"></div>
              <div class="col-md-12 play-vs">
                <table id="result-table">
                  <tr><td class="fpt">R. JAMAL</td><td class="fpt">3</td><td class="fpt">6</td><td class="fpt">6</td><td>6</td></tr>
                  <tr><td class="fpt fpt2">J. WOZNIK</td><td class="fpt fpt2">6</td><td class="fpt fpt2">4</td><td class="fpt fpt2">2</td><td class="fpt2">4</td></tr>
                </table>
              </div>
            </div>   
          </div>

        </div>                                
      </div>

      <div class="tabs standard single-pl">
        <ul class="tab-links-match tb-set">
          <li class="active"><a class="first-tabs" href="#tab1">Match Summary</a></li>
          <li><a class="first-tabs" href="#tab2">set 1</a></li>
          <li><a href="#">set 2</a></li>
          <li><a href="#">set 3</a></li>
          <li><a href="#">set 4</a></li>
          <li><a href="#">set 5</a></li>
        </ul>
        <div class="tab-content single-match">
          <div id="tab1" class="tab active">
           <h3 class="tab-match-title">MATCH STATISTICS</h3>
           <div class="tabs standard">
            <ul class="tab-links-match">
              <li class="active"><a class="first-tabs" href="#tab1a">OVERALL MATCH STATS</a></li>
              <li><a href="#tab2a">SERVE STATS</a></li>
            </ul>
            <div class="tab-content">
              <div id="tab1a" class="tab active">
               <div class="col-md-4 single-match-data">
                <p class="nm-player">Carol Bland</p>
                <p>7</p>
                <p>3</p>
                <p>26/49 (53 %)</p>
                <p>20/26 (77 %)</p>
                <p>12/23 (52 %)</p>
                <p>120 MPH</p>
                <p>107 MPH</p>
                <p>84 MPH</p>
                <p>13/15 (87 %)</p>
                <p>5/10 (50 %)</p>
                <p>33/65 (51 %)</p>
                <p>29</p>
                <p>23</p>
                <p>65</p>
              </div>
              <div class="col-md-4 single-match-data">
               <p class="nm-player">Stats</p>
               <p>Aces</p>
               <p>Double faults</p>
               <p>1st serves in</p>
               <p>1st serve points won</p>
               <p>2nd serve points won</p>
               <p>Fastest serve</p>
               <p>Average 1st serve speed</p>
               <p>Average 2nd serve speed</p>
               <p>Net points won</p>
               <p>Break points won</p>
               <p>Receiving points won</p>
               <p>Winners</p>
               <p>Unforced errors</p>
               <p>Total points won</p>
             </div>
             <div class="col-md-4 single-match-data">
               <p class="nm-player">Lori Sadek</p>
               <p>3</p>
               <p>3</p>
               <p>41/65 (63 %)</p>
               <p>23/41 (56 %)</p>
               <p>9/24 (38 %)</p>
               <p>110 MPH</p>
               <p>99 MPH</p>
               <p>80 MPH</p>
               <p>4/4 (100 %)</p>
               <p>2/4 (50 %)</p>
               <p>17/49 (35 %)</p>
               <p>4</p>
               <p>15</p>
               <p>49</p>
             </div>
           </div>
           <div id="tab2a" class="tab">
            <div class="col-md-4 single-match-data">
              <p class="nm-player">Mery Clen</p>
              <div class="col-md-4 subcol-pl">
                <p>TOTAL</p>
                <p>7</p>
                <p>1</p>
                <p>3</p>
                <p>49</p>
                <p>32</p>
                <p>9</p>
                <p>97</p>
                <p>120</p>
              </div>
              <div class="col-md-4 subcol-pl">
               <p>1ST SERVE</p>
               <p>7</p>
               <p>1</p>
               <p>3</p>
               <p>49</p>
               <p>32</p>
               <p>9</p>
               <p>97</p>
               <p>120</p>
             </div>
             <div class="col-md-4 subcol-pl">
              <p>2ND SERVE</p>
              <p>7</p>
              <p>1</p>
              <p>3</p>
              <p>49</p>
              <p>32</p>
              <p>9</p>
              <p>97</p>
              <p>120</p>
            </div>
          </div>
          <div class="col-md-4 single-match-data">
           <p class="nm-player">Stats</p>
           <p>-</p>
           <p>Aces</p>
           <p>Service winners</p>
           <p>Double faults</p>
           <p>Total points</p>
           <p>Total points won</p>
           <p>Service games</p>
           <p>Average serve speed</p>
           <p>Fastest serve speed</p>
         </div>
         <div class="col-md-4 single-match-data">
           <p class="nm-player">Alex Serghi</p>
           <div class="col-md-4 subcol-pl">

            <p>2ND SERVE</p>
            <p>7</p>
            <p>1</p>
            <p>3</p>
            <p>49</p>
            <p>32</p>
            <p>9</p>
            <p>97</p>
            <p>120</p>
          </div>
          <div class="col-md-4 subcol-pl">
            <p>1ST SERVE</p>
            <p>7</p>
            <p>1</p>
            <p>3</p>
            <p>49</p>
            <p>32</p>
            <p>9</p>
            <p>97</p>
            <p>120</p>
          </div>
          <div class="col-md-4 subcol-pl">
           <p>TOTAL</p>
           <p>7</p>
           <p>1</p>
           <p>3</p>
           <p>49</p>
           <p>32</p>
           <p>9</p>
           <p>97</p>
           <p>120</p>
         </div>
       </div>
     </div>
   </div>

 </div>     
</div>
<div id="tab2" class="tab">
  <h3 class="tab-match-title">SET 1</h3>
  <div class="tabs standard">
    <ul class="tab-links-match">
      <li class="active"><a class="first-tabs" href="#tab1b">OVERALL MATCH STATS</a></li>
      <li><a href="#tab2b">SERVE STATS</a></li>
    </ul>
    <div class="tab-content">

      <div id="tab1b" class="tab active">
       <div class="col-md-4 single-match-data">
        <p class="nm-player">Nuky Rotter</p>
        <p>3</p>
        <p>2</p>
        <p>12/29 (41 %)</p>
        <p>9/12 (75 %)</p>
        <p>7/17 (41 %)</p>
        <p>8/10 (80 %)</p>
        <p>3/7 (43 %)</p>
        <p>20/36 (56 %)</p>
        <p>15</p>
        <p>16</p>
        <p>36</p>

      </div>
      <div class="col-md-4 single-match-data">
       <p class="nm-player">Stats</p>
       <p>Aces</p>
       <p>Double faults</p>
       <p>1st serves in</p>
       <p>1st serve points won</p>
       <p>2nd serve points won</p>
       <p>Net points won</p>
       <p>Break points won</p>
       <p>Receiving points won</p>
       <p>Winners</p>
       <p>Unforced errors</p>
       <p>Total points won</p>
     </div>
     <div class="col-md-4 single-match-data">
       <p class="nm-player">Sabri Figer</p>
       <p>1</p>
       <p>3</p>
       <p>21/36 (58 %)</p>
       <p>12/21 (57 %)</p>
       <p>4/15 (27 %)</p>
       <p>2/2 (100 %)</p>
       <p>2/4 (50 %)</p>
       <p>13/29 (45 %)</p>
       <p>1</p>
       <p>10</p>
       <p>29</p>

     </div>
   </div>
   <div id="tab2b" class="tab">
    <div class="col-md-4 single-match-data">
      <p class="nm-player">Jenny Doe</p>
      <div class="col-md-4 subcol-pl">
       <p>TOTAL</p>
       <p>7</p>
       <p>1</p>
       <p>3</p>
       <p>49</p>
       <p>32</p>
       <p>9</p>
       <p>97</p>
       <p>120</p>
     </div>
     <div class="col-md-4 subcol-pl">
      <p>1ST SERVE</p>
      <p>7</p>
      <p>1</p>
      <p>3</p>
      <p>49</p>
      <p>32</p>
      <p>9</p>
      <p>97</p>
      <p>120</p>
    </div>
    <div class="col-md-4 subcol-pl">
     <p>2ND SERVE</p>
     <p>7</p>
     <p>1</p>
     <p>3</p>
     <p>49</p>
     <p>32</p>
     <p>9</p>
     <p>97</p>
     <p>120</p>
   </div>
 </div>
 <div class="col-md-4 single-match-data">
   <p class="nm-player">Stats</p>
   <p>-</p>
   <p>Aces</p>
   <p>Service winners</p>
   <p>Double faults</p>
   <p>Total points</p>
   <p>Total points won</p>
   <p>Service games</p>
   <p>Average serve speed</p>
   <p>Fastest serve speed</p>
 </div>
 <div class="col-md-4 single-match-data">
   <p class="nm-player">Susan Berg</p>
   <div class="col-md-4 subcol-pl">
     <p>2ND SERVE</p>
     <p>7</p>
     <p>1</p>
     <p>3</p>
     <p>49</p>
     <p>32</p>
     <p>9</p>
     <p>97</p>
     <p>120</p>
   </div>
   <div class="col-md-4 subcol-pl">
    <p>1ST SERVE</p>
    <p>7</p>
    <p>1</p>
    <p>3</p>
    <p>49</p>
    <p>32</p>
    <p>9</p>
    <p>97</p>
    <p>120</p>
  </div>
  <div class="col-md-4 subcol-pl">
    <p>TOTAL</p>
    <p>7</p>
    <p>1</p>
    <p>3</p>
    <p>49</p>
    <p>32</p>
    <p>9</p>
    <p>97</p>
    <p>120</p>
  </div>
</div>
</div>
</div>

</div>
</div>
</div>

</div>
</div> 
</div>
</div><!--Close Top Match-->
@include('layouts.right-content')
</section>

@endsection
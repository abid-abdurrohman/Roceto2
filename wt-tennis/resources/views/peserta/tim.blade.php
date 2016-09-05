@extends('layouts.app')

@section('content')

<section class="drawer">
  <div class="col-md-12 size-img back-img-match">
    <div class="effect-cover">
      <h3 class="txt-advert animated">The best Palyer</h3>
      <p class="txt-advert-sub">Lifelong dream of becoming the No. 1 player on the ATP World Tour </p>
    </div>
  </div>
  <section id="players" class="container secondary-page">
    <div class="general general-results players">
      <div class="top-score-title right-score col-md-9">
        <h3>ATP <span>Players</span><span class="point-little">.</span></h3>
        
        <p class="txt-right">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
         <p class="txt-right txt-dd-second">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

          <div class="col-md-3 atp-player">
            <a href="single_player.html"><img src="images/player/face.jpg" alt="" />
              <p>Nicol Radek</p></a>
            </div>
            <div class="col-md-3 atp-player">
              <a href="single_player.html"><img src="images/player/face.jpg" alt="" />
               <p>Rafael Bovi</p></a>
             </div>
             <div class="col-md-3 atp-player">
              <a href="single_player.html"><img src="images/player/face.jpg" alt="" />
                <p>Roger Kirt</p></a>
              </div>
              <div class="col-md-3 atp-player">
                <a href="single_player.html"><img src="images/player/face.jpg" alt="" />
                  <p>Stan Wark</p></a>
                </div>
                <div class="col-md-3 atp-player">
                  <a href="single_player.html"><img src="images/player/face.jpg" alt="" />
                   <p>David Glove</p></a>
                 </div>
                 <div class="col-md-3 atp-player">
                  <a href="single_player.html"><img src="images/player/face.jpg" alt="" />
                    <p>Milos Rotin</p></a>
                  </div>
                  <div class="col-md-3 atp-player">
                    <a href="single_player.html"><img src="images/player/face.jpg" alt="" />
                      <p>Gregor Goe </p></a>
                    </div>
                    <div class="col-md-3 atp-player">
                      <a href="single_player.html"><img src="images/player/face.jpg" alt="" />
                        <p>Tomas Berin</p></a>
                      </div>
                      <div class="col-md-3 atp-player">
                        <a href="single_player.html"><img src="images/player/face.jpg" alt="" />
                          <p>Andy Morra</p></a>
                        </div>
                        <div class="col-md-3 atp-player">
                          <a href="single_player.html"><img src="images/player/face.jpg" alt="" />
                            <p>Jo-Wilf T. </p></a>
                          </div>
                          <div class="content-wtp-player">
                            <h3>WTP <span>Players</span><span class="point-little">.</span></h3>
                            <p class="txt-right">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                             quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                             <p class="txt-right txt-dd-second">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                              <div class="col-md-3 atp-player">
                                <a href="single_player.html"><img src="images/player/face.jpg" alt="" />
                                 <p>Serena Peter</p></a>
                               </div>
                               <div class="col-md-3 atp-player">
                                 <a href="single_player.html"><img src="images/player/face.jpg" alt="" />
                                   <p>Simon Egger</p></a>
                                 </div>
                                 <div class="col-md-3 atp-player">
                                  <a href="single_player.html"><img src="images/player/face.jpg" alt="" />
                                    <p>Naki Li</p></a>
                                  </div>
                                  <div class="col-md-3 atp-player">
                                    <a href="single_player.html"><img src="images/player/face.jpg" alt="" />
                                      <p>Petra Dorav</p></a>
                                    </div>
                                    <div class="col-md-3 atp-player">
                                      <a href="single_player.html"><img src="images/player/face.jpg" alt="" />
                                       <p>Aga Rader</p></a>
                                     </div>
                                     <div class="col-md-3 atp-player">
                                      <a href="single_player.html"><img src="images/player/face.jpg" alt="" />
                                        <p>Maria Collan</p></a>
                                      </div>
                                      <div class="col-md-3 atp-player">
                                        <a href="single_player.html"><img src="images/player/face.jpg" alt="" />
                                          <p>A. Kerber</p></a>
                                        </div>
                                        <div class="col-md-3 atp-player">
                                          <a href="single_player.html"><img src="images/player/face.jpg" alt="" />
                                            <p>Erika Bou </p></a>
                                          </div>
                                          <div class="col-md-3 atp-player">
                                            <a href="single_player.html"><img src="images/player/face.jpg" alt="" />
                                              <p>Ana Ivan </p></a>
                                            </div>
                                            <div class="col-md-3 atp-player">
                                              <a href="single_player.html"><img src="images/player/face.jpg" alt="" />
                                                <p>Carla Work</p></a>
                                              </div>
                                            </div>
                                          </div><!--Close Top Match-->
                                          @include('layouts.right-content')
                                        </section>
                                        @endsection
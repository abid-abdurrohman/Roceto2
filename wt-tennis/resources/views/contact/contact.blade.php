<section class="drawer">
@extends('layouts.app')

@section('content')

<section id="contact" class="secondary-page">
    <div class="general">
     <!--Google Maps-->
     <div id="map_container">
       <div id="map_canvas"></div>
     </div>
     <div class="container">
       <div class="content-link col-md-12">
        <div id="contact_form" class="top-score-title col-md-9 align-center">
          <h3>Contact <span>form</span><span class="point-little">.</span></h3>
          <form method="post">

            <div class="name">
              <label for="name">* Name:</label><div class="clear"></div>
              <input id="name" name="name" type="text" placeholder="e.g. Mr. John Doe" required=""/>
            </div>
            <div class="email">
              <label for="email">* Email:</label><div class="clear"></div>
              <input id="email" name="email" type="text" placeholder="example@domain.com" required=""/>
            </div>
            <div class="message">
              <label for="message"> Message:</label>
              <textarea name="messagetext" class="txt-area" id="message" cols="30" rows="4"></textarea>
            </div>

            <div id="loader">
              <input type="submit" value="Submit"/>
            </div>
            <p class="success">Your message has been sent successfully.</p>
            <p class="error">E-mail must be valid and message must be longer than 20 characters.</p>
          </form>
        </div>
        <div id="info-company" class="top-score-title col-md-3 align-center">
          <h3>Info</h3>
          <div class="col-md-12">
            <p><i class="fa fa-phone"></i>0044 (800) 123 4567 891 </p>
            <p><i class="fa fa-envelope-o"></i>info@tennisclub.com </p>
            <p><i class="fa fa-globe"></i>Street 2, Road The Circus</p>
            <p><i class="fa fa-map-marker"></i>London UK, ABC, 1234</p>
          </div>            
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
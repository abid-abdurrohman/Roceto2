@extends('layouts.app')
@section('content')
@include('contact.direction')
<section id="contact" class="secondary-page">
    <div class="general">
     <!--Google Maps-->
     <div id="map_container">
       <div id="map_canvas">
          <div id="map" style="width:100%; height:500px; margin-bottom: 10px"></div>
       </div>
     </div>
     <div class="container">
       <div class="content-link col-md-12">
        <div class="top-score-title col-md-9 align-center">
          <h3>Contact <span>form</span><span class="point-little">.</span></h3>
          {!! Form::open(['action' => 'ContactController@store', 'class' => 'form-horizontal']) !!}
            <div class="form-group">
              <label for="name">* Name:</label><div class="clear"></div>
              {!! Form::text('nama', null, ['id' => 'name', 'class' => 'form-control', 'placeholder' => 'e.g. Mr. John Doe',
              'required'],'') !!}
            </div>
            <div class="form-group">
              <label for="email">* Email:</label><div class="clear"></div>
              {!! Form::text('email', null, ['id' => 'email', 'class' => 'form-control', 'placeholder' => 'example@domain.com',
              'required'],'') !!}
            </div>
            <div class="form-group">
              <label for="message"> Message:</label>
              {!! Form::textarea('message', null, ['id' => 'message', 'class' => 'form-control', 'rows' => '4', 'cols' => '30',
              'placeholder' => 'Write a Message', 'required'],'') !!}
            </div>
            <div class="form-group">
              {!! Form::button('Submit', ['type'=>'submit']) !!}
            </div>
          {!! Form::close() !!}
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
  @include('layouts.bottom-content')
</section>
@endsection

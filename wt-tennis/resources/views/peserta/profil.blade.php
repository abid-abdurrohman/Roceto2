@extends('layouts.app')

@section('content')


   <div class="col-lg-12 col-sm12">
    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="">
            <!-- http://lorempixel.com/850/280/people/9/ -->
        </div>
        <div class="useravatar">
            <img alt="" src="">
        </div>
        <div class="card-info"> <span class="card-title">Nama Tim</span>

        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">

        <div class="btn-group" role="group">
            <button type="button" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="fa fa-info" aria-hidden="true"></span>
                <div class="">Information</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="fa fa-users" aria-hidden="true"></span>
                <div class="">Add Players</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="fa fa-file" aria-hidden="true"></span>
                <div class="hidden-xs">Confirm Payment</div>
            </button>
        </div>
    </div>

     <div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
		    <table class="table" style="border:10px">
		      <tbody>
		        <tr>
		          <td style="width:120px"> Nama Tim</td>
		          <td style="width:10px">:</td>
		          <td>{{ $participants->nama_tim }}</td>

		        </tr>
		        <tr>
		          <td> Nama Kapten </td>
		          <td > :</td>
		          <td>{{ $participants->nama_kapten}}</td>
		        </tr>
		        <tr>
		          <td> No. Hp</td>
		          <td >:</td>
		          <td>{{ $participants->no_hp}}</td>
		        </tr>
		        <tr>
		           <td>Warna Kostum</td>
		          <td >:</td>
		          <td>{{ $participants->warna_kostum}}</td>
		        </tr>
		        <tr>
		         <td>Jumlah Pemain</td>
		          <td >:</td>
		          <td>{{ $participants->jumlah_pemain}}</td>
		        <tr>
		           <td>Nama Pengirim</td>
		          <td >:</td>
		          <td>{{ $participants->atas_nama }}</td>	          
		        </tr>
		        <tr>
		           <td>No. Rekening</td>
		          <td >:</td>
		          <td>{{ $participants->no_rek }}</td>
		        </tr>
		        <tr>
		          <td>Nama Bank</td>
		          <td >:</td>
		          <td>{{ $participants->nama_bank}}</td>
		        </tr>		        	
		      </tbody>
		    </table>
        </div>
        <div class="tab-pane fade in" id="tab2">
         <!--  <div class="container">
	    <div class="row clearfix">
			<div class="col-md-12 column">
				<table class="table table-bordered table-hover" id="tab_logic">
					<thead>
						<tr >
							<th class="text-center">
								No.
							</th>
							<th class="text-center">
								Nick Name
							</th>
							<th class="text-center">
								Posisi
							</th>
							<th class="text-center">
								No. Punggung
							</th>
							<th class="text-center">
								Photo
							</th>
						</tr>
					</thead>
					<tbody>
						<tr id='addr0'>
							<td>
							1
							</td>
							<td>
							
							{!! Form::text('nama', null, ['class' => 'form-control', 'placeholder' => 'Write a name',
        'required'],'') !!}
							</td>
							<td>
							
							{!! Form::text('posisi', null, ['class' => 'form-control', 'placeholder' => 'Write a position',
        'required'],'') !!}
							</td>
							<td>
							
							{!! Form::text('no_punggung', null, ['class' => 'form-control', 'placeholder' => 'Write a back number',
        'required'],'') !!}
							</td>
							<td>
							
							{!! Form::file('foto', null, ['class' => 'form-control', 'required'],'') !!}
							</td>
						</tr>
	                    <tr id='addr1'></tr>
					</tbody>
				</table>
			</div>
		</div>
		<a id="add_row" class="btn btn-default pull-left">Add Row</a>
		<a id="add_row" type="sumbit" style="margin-left:300px; padding: 5px 150px" class="btn btn-default center"> Save Players </a>
		<a id='delete_row' class="pull-right btn btn-default">Delete Row</a>
	</div> -->
        </div>
        <div class="tab-pane fade in" id="tab3">
          <h3>This is tab 3</h3>
        </div>
      </div>
    </div>
    
    </div>


@endsection
@extends('layouts.app')

@section('content')
	
	 <!-- Base Css Files -->
        <link href="admin_asset/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="admin_asset/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="admin_asset/assets/ionicon/css/ionicons.min.css" rel="stylesheet" />
        <link href="admin_asset/css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- animate css -->
        <link href="admin_asset/css/animate.css" rel="stylesheet" />

        <!-- Waves-effect -->
        <link href="admin_asset/css/waves-effect.css" rel="stylesheet">

        <!-- Plugin Css-->
        <link rel="stylesheet" href="admin_asset/assets/magnific-popup/magnific-popup.css" />
        <link rel="stylesheet" href="admin_asset/assets/jquery-datatables-editable/datatables.css" />

        <!-- Custom Files -->
        <link href="admin_asset/css/helper.css" rel="stylesheet" type="text/css" />
        <link href="admin_asset/css/style.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="js/modernizr.min.js"></script>
	
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

        <div class="panel">
                            
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="m-b-30">
                                            <button id="addToTable" class="btn btn-primary waves-effect waves-light">Add <i class="fa fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-bordered table-striped" id="datatable-editable">
                                    <thead>
                                        <tr>
                                            <th>Rendering engine</th>
                                            <th>Browser</th>
                                            <th>Platform(s)</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="gradeX">
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 4.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td class="actions">
                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeC">
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 5.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td class="actions">
                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 5.5
                                            </td>
                                            <td>Win 95+</td>
                                            <td class="actions">
                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 6
                                            </td>
                                            <td>Win 98+</td>
                                            <td class="actions">
                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Trident</td>
                                            <td>Internet Explorer 7</td>
                                            <td>Win XP SP2+</td>
                                            <td class="actions">
                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Trident</td>
                                            <td>AOL browser (AOL desktop)</td>
                                            <td>Win XP</td>
                                            <td class="actions">
                                                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                                                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- end: page -->

                        </div> <!-- end Panel -->


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

    <script>
            var resizefunc = [];
        </script>

    <!-- jQuery  -->
        <script src="admin_asset/js/jquery.min.js"></script>
        <script src="admin_asset/js/bootstrap.min.js"></script>
        <script src="admin_asset/js/waves.js"></script>
        <script src="admin_asset/js/wow.min.js"></script>
        <script src="admin_asset/js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="admin_asset/js/jquery.scrollTo.min.js"></script>
        <script src="admin_asset/assets/jquery-detectmobile/detect.js"></script>
        <script src="admin_asset/assets/fastclick/fastclick.js"></script>
        <script src="admin_asset/assets/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="admin_asset/assets/jquery-blockui/jquery.blockUI.js"></script>

        <!-- Examples -->
    <script src="admin_asset/assets/magnific-popup/magnific-popup.js"></script>
    <script src="admin_asset/assets/jquery-datatables-editable/jquery.dataTables.js"></script> 
    <script src="admin_asset/assets/datatables/dataTables.bootstrap.js"></script>
    <script src="admin_asset/assets/jquery-datatables-editable/datatables.editable.init.js"></script>


@endsection
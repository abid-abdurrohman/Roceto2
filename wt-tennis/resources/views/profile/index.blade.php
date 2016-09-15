@extends('layouts.app')

@section('content')

<style type="text/css">
.btn{transition:all 0.8s;-o-transition:all 0.8s;-moz-transition:all 0.8s;-webkit-transition:all 0.8s;border-radius:0px;margin-top:10px}
.btn-rounded{border-radius:50px}
.btn-bordered-primary{color:#428BCA;background:#FFFFFF;border:2px solid #428BCA}
.btn-bordered-primary:hover{color:#FFFFFF;background:#428BCA;border:2px solid #FFFFFF}

</style>

<section class="container">

<div class=" col-md-12">
	<div class="card hovercard">
		<div class="card-background">
			<img class="card-bkimg" alt="" src="{!! asset('').'/'.$users->background !!}">
			<!-- http://lorempixel.com/850/280/people/9/ -->
		</div>
		<div class="useravatar">
			<img alt="" src="{!! asset('').'/'.$users->avatar !!}">
		</div>
		<div class="card-info"> 
			<span class="card-title">{{$users->nick_name}}</span>
		</div>
	</div>

	<div class="tab-content">
		<div class="tab-pane fade in active" id="tab1">
			<div class="tab-pane active" id="home-2">
				<div class="row">

					<div class="col-md-3">
						<!-- Personal-Information -->
						<div class="panel panel-default panel-fill">
							<div class="panel-heading">
								<h3 class="panel-title">Personal Information</h3>
							</div>
							<div class="panel-body">
								<div class="about-info-p">
									<strong>Full Name</strong>
									<br/>
									<p class="text-muted">{{ $users->name }}</p>
								</div>
								<div class="about-info-p">
									<strong>Mobile</strong>
									<br/>
									<p class="text-muted">{{ $users->mobile }}</p>
								</div>
								<div class="about-info-p">
									<strong>Email</strong>
									<br/>
									<p class="text-muted">{{ $users->email }}</p>
								</div>
								<div class="about-info-p m-b-0">  
									<a class="btn btn-bordered-primary" data-toggle="modal" data-target="#con-close-modal"><span class="fa fa-edit"></span> Edit Your Personal</a>
								</div>
								@include('profile.modal.edit', [$users->name])
							</div>
						</div>
					</div>
						<!-- Personal-Information -->
					<div class="col-md-9">
						<!-- Personal-Information -->
						<div class="panel panel-default panel-fill">
							<div class="panel-heading"> 
								<h3 class="panel-title">My Events</h3> 
							</div> 
							<div class="panel-body"> 
								<div class="table-responsive">
									<table class="table">
										<thead>
											<tr>
												<th>No</th>
												<th>Event</th>
												<th>Category</th>
												<th>Participant</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Moltran Admin</td>
												<td>01/01/2015</td>
												<td>07/05/2015</td>
												<td><span class="label label-info">Work in Progress</span></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div> 
							
						</div>
						<!-- Personal-Information -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@include('layouts.bottom-content')       
</section>
@endsection

@push('script')
<script type="text/javascript">
	$(document).ready(function() {
		$(".btn-pref .btn").click(function () {
			$(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
    // $(".tab").addClass("active"); // instead of this do the below
    $(this).removeClass("btn-default").addClass("btn-primary");
});
	});
</script>
@endpush

		


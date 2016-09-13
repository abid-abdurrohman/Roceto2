@extends('layouts.app')

@section('content')

<div class="col-lg-12 col-sm-12">
	<div class="card hovercard">
		<div class="card-background">
			<img class="card-bkimg" alt="" src="http://lorempixel.com/100/100/people/9/">
			<!-- http://lorempixel.com/850/280/people/9/ -->
		</div>
		<div class="useravatar">
			<img alt="" src="http://lorempixel.com/100/100/people/9/">
		</div>
		<div class="card-info"> <span class="card-title">Pamela Anderson</span>

		</div>
	</div>
	<div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
		<div class="btn-group" role="group">
			<button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="fa fa-user" aria-hidden="true"></span>
				<div class="hidden-xs">Detail Information</div>
			</button>
		</div>
		<div class="btn-group" role="group">
			<button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="fa fa-folder" aria-hidden="true"></span>
				<div class="hidden-xs">Your Events</div>
			</button>
		</div>
		<div class="btn-group" role="group">
			<button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="fa fa-edit" aria-hidden="true"></span>
				<div class="hidden-xs">Settings</div>
			</button>
		</div>
	</div>

	<div class="tab-content">
		<div class="tab-pane fade in active" id="tab1">
			<div class="tab-pane active" id="home-2">
				<div class="row">
					<div class="col-md-4">
						<!-- Personal-Information -->
						<div class="panel panel-default panel-fill">
							<div class="panel-heading">
								<h3 class="panel-title">Personal Information</h3>
							</div>
							<div class="panel-body">
								<div class="about-info-p">
									<strong>Full Name</strong>
									<br/>
									<p class="text-muted">Johnathan Deo</p>
								</div>
								<div class="about-info-p">
									<strong>Mobile</strong>
									<br/>
									<p class="text-muted">(123) 123 1234</p>
								</div>
								<div class="about-info-p">
									<strong>Email</strong>
									<br/>
									<p class="text-muted">johnathandeon @moltran.com</p>
								</div>
								<div class="about-info-p m-b-0">
									<strong>Location</strong>
									<br/>
									<p class="text-muted">USA</p>
								</div>
							</div>
						</div>
						<!-- Personal-Information -->
					</div>

					<div class="col-md-8">
						<!-- Personal-Information -->
						<div class="panel panel-default panel-fill">
							<div class="panel-heading">
								<h3 class="panel-title">Biography</h3>
							</div>
							<div class="panel-body">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>

								<p><strong>But also the leap into electronic typesetting, remaining essentially unchanged.</strong></p>

								<p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
							</div>
						</div>
						<!-- Personal-Information -->
					</div>
				</div>
			</div>
		</div>
		<div class="tab-pane fade in" id="tab2">
			<div class="tab-pane" id="messages-2">
				<!-- Personal-Information -->
				<div class="panel panel-default panel-fill">
					<div class="panel-heading">
						<h3 class="panel-title">My Projects</h3>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>#</th>
										<th>Project Name</th>
										<th>Start Date</th>
										<th>Due Date</th>
										<th>Status</th>
										<th>Assign</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Moltran Admin</td>
										<td>01/01/2015</td>
										<td>07/05/2015</td>
										<td><span class="label label-info">Work in Progress</span></td>
										<td>Coderthemes</td>
									</tr>
									<tr>
										<td>2</td>
										<td>Moltran Frontend</td>
										<td>01/01/2015</td>
										<td>07/05/2015</td>
										<td><span class="label label-success">Pending</span></td>
										<td>Coderthemes</td>
									</tr>
									<tr>
										<td>3</td>
										<td>Moltran Admin</td>
										<td>01/01/2015</td>
										<td>07/05/2015</td>
										<td><span class="label label-pink">Done</span></td>
										<td>Coderthemes</td>
									</tr>
									<tr>
										<td>4</td>
										<td>Moltran Frontend</td>
										<td>01/01/2015</td>
										<td>07/05/2015</td>
										<td><span class="label label-purple">Work in Progress</span></td>
										<td>Coderthemes</td>
									</tr>
									<tr>
										<td>5</td>
										<td>Moltran Admin</td>
										<td>01/01/2015</td>
										<td>07/05/2015</td>
										<td><span class="label label-warning">Coming soon</span></td>
										<td>Coderthemes</td>
									</tr>

								</tbody>
							</table>
						</div>

					</div>
				</div>
				<!-- Personal-Information -->
			</div>
		</div>
		<div class="tab-pane fade in" id="tab3">
			<div class="tab-pane" id="settings-2">
				<!-- Personal-Information -->
				<div class="panel panel-default panel-fill">
					<div class="panel-heading">
						<h3 class="panel-title">Edit Profile</h3>
					</div>
					<div class="panel-body">
						<form role="form">
							<div class="form-group">
								<label for="FullName">Full Name</label>
								<input type="text" value="John Doe" id="FullName" class="form-control">
							</div>
							<div class="form-group">
								<label for="Email">Email</label>
								<input type="email" value="first.last@example.com" id="Email" class="form-control">
							</div>
							<div class="form-group">
								<label for="Username">Username</label>
								<input type="text" value="john" id="Username" class="form-control">
							</div>
							<div class="form-group">
								<label for="Password">Password</label>
								<input type="password" placeholder="6 - 15 Characters" id="Password" class="form-control">
							</div>
							<div class="form-group">
								<label for="RePassword">Re-Password</label>
								<input type="password" placeholder="6 - 15 Characters" id="RePassword" class="form-control">
							</div>
							<div class="form-group">
								<label for="AboutMe">About Me</label>
								<textarea style="height: 125px;" id="AboutMe" class="form-control">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</textarea>
							</div>
							<button class="btn btn-primary waves-effect waves-light w-md" type="submit">Save</button>
						</form>

					</div>
				</div>
				<!-- Personal-Information -->
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$(".btn-pref .btn").click(function () {
			$(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
    // $(".tab").addClass("active"); // instead of this do the below
    $(this).removeClass("btn-default").addClass("btn-primary");
});
	});
</script>
@endsection

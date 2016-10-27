@extends('layouts.app')

@section('content')

<style type="text/css">
	.btn{transition:all 0.8s;-o-transition:all 0.8s;-moz-transition:all 0.8s;-webkit-transition:all 0.8s;border-radius:0px;}
	.btn-rounded{border-radius:50px}
	.btn-bordered-primary{color:#428BCA;background:#FFFFFF;border:2px solid #428BCA}
	.btn-bordered-primary:hover{color:#FFFFFF;background:#428BCA;border:2px solid #FFFFFF}
	.btn-bordered-edit{color:#79BDDA;background:#FFFFFF;border:2px solid #79BDDA; font-size:10px}
	.btn-bordered-edit:hover{color:#FFFFFF;background:#79BDDA;border:2px solid #FFFFFF}
	.btn-bordered-danger{color:#E62B2B;background:#FFFFFF;border:2px solid #E62B2B; font-size: 10px}
	.btn-bordered-danger:hover{color:#FFFFFF;background:#E62B2B;border:2px solid #FFFFFF}
</style>

<section class="container">
					<div class="col-md-12">
						<!-- Personal-Information -->
						<div class="panel panel-default panel-fill" >
							<div class="panel-heading match-team" >
								<p> {{ $users->name }}'s Payment</p>
							</div>
					
						<div class="col-md-6">
							<div class="" >
								<div class="table-responsive">
                                    <table id="datatable" class="table table-striped">
                                         <tbody>
                                           <th> Nama User</th>
                                           <td> :</td>
                                           <td>{{ $users->name }}</td>
                                           <tr></tr>
										   <th> Total Event</th>
										   <td> :</td>
										   <td>{{ $count }} </td>
										   <tr></tr>
                                           <th>Total Pembayaran</th>
                                           <td> :</td>
                                           <td>{{ $sum }}</td>									
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
							<div class="panel-body" >
								<div class="table-responsive">
                                    <table id="datatable" class="table table-striped">
                                         <tbody>
                                          <p>Silahkan lakukan pembayaran ke Nomer Rekening Berikut, serta upload buktinya disini</p>
                                           <tr></tr>
										   <th> Mandiri</th>
										   <td> :</td>
										   <td>19999839810371073 (A.N Roceto Competition)</td>
										   <tr></tr>
                                           <th>BCA</th>
                                           <td> :</td>
                                           <td>123137391639981721 (A.N Roceto Competition)</td>									
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                     </div>
</div>

									<!-- Personal-Information -->
							<!-- Kondisi Kirim Email dan Upload bukti bayar -->

							<div class="accordion waves-effect waves-light col-md-12" id="section11" data-toggle="modal" data-target="#con-close-modal2" style="text-align:center; font-size:20px; "  >Upload Bukti !</div>
							@include('register.modal.upload')

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
			</div>

			@include('layouts.bottom-content')
		</section>
		@endsection
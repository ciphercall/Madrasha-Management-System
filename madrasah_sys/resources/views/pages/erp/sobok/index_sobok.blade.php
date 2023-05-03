@extends('layout.erp.home')
@section('page')





<!-- Page Content -->
<div class="content container-fluid">
				
	<!-- Page Header -->
	<div class="page-header">
		<div class="row align-items-center">
			<div class="col">
				<h2 class="page-title">sobok </h2>
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
					<li class="breadcrumb-item active">sobok </li>
				</ul>
			</div>
			<div class="col-auto float-right ml-auto">
				<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_overtime"><i class="fa fa-plus"></i> Add sobok-Center</a>
			</div>
		</div>
	</div>
	<!-- /Page Header -->
	
	<!-- sobok Center Statistics -->
	<div class="row">
		<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
			<div class="stats-info">
				<h6>sobok  member</h6>
				<h4>12 <span>this month</span></h4>
			</div>
		</div>
		<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
			<div class="stats-info">
				<h6>sobok Center </h6>
				<h4>118 <span>this month</span></h4>
			</div>
		</div>
		<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
			<div class="stats-info">
				<h6>Pending Request</h6>
				<h4>23</h4>
			</div>
		</div>
		<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
			<div class="stats-info">
				<h6>Rejected</h6>
				<h4>5</h4>
			</div>
		</div>
	</div>
	<!-- /sobok Center Statistics -->
	@if (session('success'))
		<div class="alert alert-success"><b>{{session('success')}}</b> </div>
	@endif
	<div class="row">
		<div class="col-md-12">
			<div class="table-responsive">
				<table class="table table-striped custom-table mb-0 datatable">
					<thead>
						<tr>
							<th>Id</th>
							<th>Name</th>
							<th>Created At</th>
						
							
							<th class="text-right">Actions</th>
						</tr>
					</thead>
					<tbody>
						@forelse ($soboks as $sobok)



						<tr>
							<td>{{$sobok->id}}</td>
							<td>{{$sobok->name}}</td>
							<td>{{$sobok->created_at}}</td>
						
							<td class="text-right">
								<div class="dropdown dropdown-action">
									<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
									<div class="dropdown-menu dropdown-menu-right">

									
										<button type="button" value="{{$sobok->id}}" class="btn btn-success" id="sobokshBtn" ><i class="bi bi-eye-fill"></i> </button>


										<button type="button" value="{{$sobok->id}}" class="btn btn-primary" id="sobokBtn" ><i class="bi bi-pencil-square" ></i> </button>

										<button type="button" value="{{$sobok->id}}" class="btn btn-warning" id="delete_sobok" ><i class="fa fa-trash-o m-r-5"></i> </button>

									</div>
								</div>
							</td>
						</tr>
					</tbody>
					@empty
						<tr><td colspan="14">No records found</td></tr>
					@endforelse
					
				</table>
				{{$soboks->links()}}

			</div>
		</div>
	</div>
</div>
<!-- /Page Content -->

<!-- Add sobok Center Modal -->
<div id="add_overtime" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add sobok </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="background-color: teal">
				<form action="{{route('soboks.store')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-sm-4">
	
						
						</div>	
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label"> Name /  নাম: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="ooBrunch_name" name="txtName" required>
								
							</div>
						</div>
						
						
					</div>	
							<div class="submit-section">
								<input class="btn btn-primary submit-btn" type="submit"  name="btnCreate" value="Submit">
		
							</div>
				</form>
			</div>
					
		</div>
	</div>
</div>
<!-- /Add sobok Center Modal -->

<!-- Edit sobok Center Modal -->
<div id="edit_sobok" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit soboks</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="background-color: teal">
				<form action="{{url('sobok-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="row">
						<div class="col-sm-4">
							<input type="hidden" class="form-control" id="cmbsobokId" name="cmbsobokId" required>
							<div class="form-group">
								
						</div>	
						<div class="col-sm-12">
							<div class="form-group">
								<label class="col-form-label"> Name /  নাম: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="sobokName" name="txtName" required>
								
							</div>
						</div>
						
							
						
					</div>
							<div class="submit-section">
								<input class="btn btn-primary submit-btn" type="submit"  name="btnCreate" value="Submit">
		
						</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /Edit sobok Center Modal -->

<!-- Delete volunteer Center Modal -->
<div class="modal custom-modal fade" id="delete_Sobokm" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">


				<div class="form-header">
					<h3>Delete Overtime</h3>
					<p>Are you sure want to Cancel this?</p>
				</div>
				<div class="modal-btn delete-action">
					<div class="row">


						<div class="col-6">
							
						

						<form action="{{url('delete-volunteer')}}" method="post" >
									@csrf
									@method("DELETE")
									<input type="hidden" id="delete_volId" name="d_vol">


									<button type="submit" class="btn btn-primary continue-btn">
									Yes Delete
									</button>
								</form>

							</div>
						<div class="col-6">
							<a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Delete volunteer Center Modal -->

<!-- show sobok Center Modal -->
<div id="show_sobok" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document" >
		<div class="modal-content" style="width: 900px;">
			<div class="modal-header"  style="width: 900px;">
				<h2 class="modal-title"> sobok Details </h2>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="width: 900px;background-color: teal;" >
				{{-- <div><h1 id="mahSHbrunch_name"></h1></div> --}}
				<div class="card mb-0">
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<div class="profile-view">
									{{-- <div class="profile-img-wrap">
										<div class="profile-img">
											<a href="#"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
										</div>
									</div> --}}
									{{-- <div class="profile-basic"> --}}
										<div class="row">
											<div class="col-md-6">
												{{-- <div class="profile-info-left">
													<label class="col-form-label"><b>Branch ID:</b> </label>
													<h2 class="user-name m-t-0 mb-0" id="mahSHbrunch_id"></h2>
													<label class="col-form-label"><b>Branch Name:</b> </label>
													<h4  id="mahSHbrunch_name"></h4>

													<label 
													class="col-form-label"><b>Address:</b> </label>


													<div class="staff-id" id="mahSHaddress"></div>

													<label 
													class="col-form-label"><b>Occasion:</b> </label>

													<div  id="mahSHoccasion"></div>
													
												</div> --}}
												<div class="profile-info-left">
												<ul class="personal-info">
													<li>
														<div class="title"><b>Branch ID:</b></div>
														<div class="text" id="padcSHbrunch_id"></div>
													</li>
													<li>
														<div class="title"><b>B Name:</b></div>
														<div class="text"><a href="" id="padcSHbrunch_name"></a></div>
													</li>
													<li>
														<div class="title"><b>Date:</b></div>
														<div class="text" id="padcSHdate"></div>
													</li>
													<li>
														<div class="title"><b>page_no :</b></div>
														<div class="text" id="padcSHpage_no"></div>
													</li>
													<li>
														<div class="title"><b>sobok:</b></div>
														<div class="text" id="padcSHpad_collection"></div>
													</li>
													
													
												</ul>
											</div>

											</div>
											<div class="col-md-6">
												<ul class="personal-info">
													<li>
														<div class="title">provider:</div>
														<div class="text"><a href="" id="padcSHprovider"></a></div>
													</li>
													<li>
														<span class="title">Comment:</span>
														<span class="text"><a href="" id="padcSHduty"></a></span>
													</li>
													
													
												</ul>
											</div>
										</div>
									{{-- </div> --}}
									<div class="pro-edit"><a data-target="#profile_info" data-toggle="modal" class="edit-icon" href="#"><i class="fa fa-pencil"></i></a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /show sobok Center Modal -->
<script>
	$(document).ready(function(){
        $(document).on('click','#delete_sobok',function(){
            //  alert("ok");

			 var sobok_id=$(this).val();
            //  alert(sobok_id);
			$('#delete_Sobokm').modal('show');
			$('#delete_sobokId').val(sobok_id);
		});



		$(document).on('click','#sobokBtn',function(){
			//  alert("ok");

			var sobok_id=$(this).val();
			// alert(invi_id);
			$('#edit_sobok').modal('show');
			$.ajax({
				type: "GET",
				url: "/edit-sobok/"+sobok_id,
				success:function(response){
					// console.log(response.sobok.brunch_name);
					$('#cmbsobokId').val(sobok_id);
					

					$('#sobokName').val(response.sobok.name);
				
				
					
				}
			});
		});

		$(document).on('click','#padcshBtn',function(){
			//  alert("ok");

			var padcsh_id=$(this).val();
			// alert(invi_id);
			$('#show_padc').modal('show');
			$.ajax({
				type: "GET",
				url: "/show-sobok/"+padcsh_id,
				success:function(response){
					// console.log(response.sobok.brunch_name);
					$('#cmbpadcSHId').html(padc_id);
					

					$('#padcSHbrunch_id').html(response.ssobok.brunch_id);
					$('#padcSHbrunch_name').html(response.ssobok.brunch_name);
					$('#padcSHdate').html(response.ssobok.date);
					$('#padcSHpage_no').html(response.ssobok.page_no);
					$('#padcSHpad_collection').html(response.ssobok.pad_collection);
					$('#padcSHprovider').html(response.ssobok.provider);
					$('#padcSHcomment').html(response.ssobok.comment);
					
				
					
				}
			});
		});

	
	

        
	});
</script>
@endsection







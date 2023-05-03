@extends('layout.erp.home')
@section('page')

		
	<!-- Page Content -->
		<div class="content container-fluid">
			
				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col-sm-12">
							<h3 class="page-title">Designation</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
								<li class="breadcrumb-item active">Designations</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /Page Header -->
				
				<!-- Search Filter -->
				<div class="row filter-row">
					<div class="col-sm-6 col-md-3"> 
						<div class="form-group form-focus select-focus">
							<select class="select floating"> 
								<option>Choose</option>	
							</select>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">  
						<div class="form-group form-focus">
							<div class="cal-icon">
								<input class="form-control floating datetimepicker" type="text">
							</div>
							<label class="focus-label">From</label>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">  
						<div class="form-group form-focus">
							<div class="cal-icon">
								<input class="form-control floating datetimepicker" type="text">
							</div>
							<label class="focus-label">To</label>
						</div>
					</div>
					<div class="col-sm-6 col-md-3"> 
						<a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#add_designation"><i class="fa fa-plus"></i> Add Designation</a> 
					</div>     
				</div>
				<!-- /Search Filter -->
				
				<div class="row">
					<div class="col-md-12">
                    <div class="table-responsive">
								<table class="table table-striped custom-table mb-0 datatable">
								<thead>
									<tr>
										<th>No</th>
										<th>Designation</th>
										<th>Created Date</th>
										
										<th class="text-right">Actions</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($designations as $designation)	
									<tr>	
										<td>{{$designation-> id}}</td>
										<td>{{$designation-> name}}</td>
										<td>{{$designation-> created_at}}</td>	
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_designation"><i class="fa fa-pencil m-r-5"></i> Edit</a>
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_designation"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
												</div>
											</div>
											<!-- Delete Designation Modal -->
											<div class="modal custom-modal fade" id="delete_designation" role="dialog">
												<div class="modal-dialog modal-dialog-centered">
													<div class="modal-content">
														<div class="modal-body">
															<div class="form-header">
																<h3>Delete Designation</h3>
																<p>Are you sure want to delete?</p>
															</div>
															<div class="modal-btn delete-action">
																<div class="row">
																	<div class="col-6">
																		<form action="{{route('designations.destroy',$designation->id)}}" method="post" >
																			@csrf
																			@method("DELETE")
																			<input class="btn btn-primary continue-btn" type="submit" name="btnDelete" class="btnDelete" data-id="{{$designation->id}}"  value="Delete" />
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
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
		</div>
	<!-- /Page Content -->



<!-- Add Designation Modal -->
<div id="add_designation" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add Designatio</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			{{-- add member--}}
			<div class="modal-body">
				<form action="{{route('designations.store')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label class="col-form-label">Designation / পদবী: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="txtDesignation" name="txtDesignation" placeholder="Enter Designation" required>
							</div>
						</div>

					</div>

					<div class="submit-section">
						<input class="btn btn-primary submit-btn" type="submit" name="btnCreate" value="Submit">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /Add Designation Modal -->

<!-- Edit Designation Modal -->
<div id="edit_designation" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Edit Designation</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{route('designations.update',$designation->id)}}" method="post" enctype="multipart/form-data">
					@csrf
					@method("PUT")
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
                                <label class="col-form-label">Designation / পদবী: <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="{{ $designation->name }}" id="txtDesignation" name="txtDesignation">
							</div>
						</div>
					</div>
					
				
					<div class="submit-section">
						<input class="btn btn-primary submit-btn" type="submit"  name="btnUpdate" value="Update">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- /Edit Designation Modal -->


<script>
	$(document).ready(function () {
		$('#txtWorkplace').on('change', function () {
			var idCountry = this.value;
			$("#txtCountry").html('');
			$.ajax({
				url: "{{url('api/fetch-country')}}",
				type: "POST",
				data: {
					work_p_id: idCountry,
					_token: '{{csrf_token()}}'
				},
				dataType: 'json',
				success: function (result) {
					$('#txtCountry').html('<option value="">Select Country</option>');
					$.each(result.countries, function (key, value) {
						$("#txtCountry").append('<option value="' + value
							.id + '">' + value.name + '</option>');
					});
					 $('#txtCity').html('<option value="">Select City</option>');
				}
			});
		});
		$('#txtCountry').on('change', function () {
			var idState = this.value;
			$("#txtCity").html('');
			$.ajax({
				url: "{{url('api/fetch-cities')}}",
				type: "POST",
				data: {
					country_id: idState,
					_token: '{{csrf_token()}}'
				},
				dataType: 'json',
				success: function (res) {
					$('#txtCity').html('<option value="">Select City</option>');
					$.each(res.cities, function (key, value) {
						$("#txtCity").append('<option value="' + value
							.id + '">' + value.name + '</option>');
					});
				}
			});
		});
	});
</script>
@endsection

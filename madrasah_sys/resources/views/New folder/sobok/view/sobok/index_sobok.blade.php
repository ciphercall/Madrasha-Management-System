@extends('layout.erp.home')
@section('page')
<!-- Page Wrapper -->

			
			<!-- Page Content -->
			<div class="content container-fluid">
				
				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col-sm-12">
							<h3 class="page-title">Task Reports</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
								<li class="breadcrumb-item active">Task Reports</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /Page Header -->
				
					<!-- Content Starts -->
					<!-- Search Filter -->
				<div class="row filter-row">
					
					<div class="col-sm-6 col-md-3">  
						<div class="form-group form-focus">
							<div class="cal-icon">
								<select class="form-control floating select">
									<option>
										Name1
									</option>
									<option>
										Name2
									</option>
								</select>
							</div>
							<label class="focus-label">Project Name</label>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">  
						<div class="form-group form-focus">
							<div class="cal-icon">
								<select class="form-control floating select">
									<option>
										All
									</option>
									<option>
										Pending
									</option>
									<option>
										Completed
									</option>
								</select>
							</div>
							<label class="focus-label">Status</label>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">  
						<a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#add_sobok" > Add Sobok </a> 
						<a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#edit_sobok" > Edit Sobok </a> 
					</div>     
				</div>
				<!-- /Search Filter -->

 
				
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-12">
						<div class="table-responsive">
							<table class="table table-striped custom-table mb-0 datatable">
								<thead>
									<tr>
										<th>ID</th>
										<th>Name</th>
										<th>Start Date</th>
										<th>Status</th>
										<th>Action</th>

										
									</tr>
								</thead>
								<tbody>
									@foreach ($soboks as $sobok )
									<tr>
										<td>{{$sobok-> id}}</td>
										<td>{{$sobok-> name}}</td>
										<td>{{$sobok-> created_at}}</td>
										
										<td>
											<div class="dropdown action-label">
												<a href="#" class="btn btn-white btn-sm btn-rounded"><i class="fa fa-dot-circle-o text-success"></i> Active </a>
												
											</div>

				
										</td>

									
								<td style="width:200px">
                                    <form action="{{ route('soboks.destroy',$sobok->id) }}" method="POST">
                    
                                        <!-- <a class="btn btn-info btn-sm" href="{{ route('soboks.show',$sobok->id) }}"><i class="fas fa-folder">&nbsp;View</i></a> -->
                        
                                        <a class="btn btn-primary btn-sm" href="{{ route('soboks.edit',$sobok->id) }}"><i class="fas fa-pencil-alt">&nbsp;Edit</i></a>
                    
                                        @csrf
                                        @method('DELETE')
                        
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="far fa-trash-alt">&nbsp;Delete</i></button>
                                    </form>
                                </td>
									



									</tr>
									@endforeach
								 </tbody>
							 </table>
						</div>
					</div>
				</div> 
			
				<!-- /Content End -->
				
			</div>
			<!-- /Page Content -->
			
	










<!-- Add Sobok Modal -->
<div id="add_sobok" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add Sobok</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			{{-- add sobok--}}
			<div class="modal-body">
				<form action="{{route('soboks.store')}}" method="post" enctype="multipart/form-data">
					@csrf


					<div class="row">

						
					
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label"> Sobok Type / শেষ ছবক: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="txtSobok_type" name="txtSobok_type" placeholder="Enter Sobok" required>
							</div>
						</div>

                
					
					
					
					
			
					
					{{-- <div class="table-responsive m-t-15">
						<table class="table table-striped custom-table">
							<thead>
								<tr>
									<th>Module Permission</th>
									<th class="text-center">Read</th>
									<th class="text-center">Write</th>
									<th class="text-center">Create</th>
									<th class="text-center">Delete</th>
									<th class="text-center">Import</th>
									<th class="text-center">Export</th>
								</tr>
							</thead>
							<tbody>

							
						
						</table>
					</div>
					</div> --}}
					<div class="submit-section">
						<input class="btn btn-primary submit-btn" type="submit"  name="btnCreate" value="Submit">

					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /Add sobok Modal -->



<!-- Edit Employee Modal -->
<div id="edit_sobok" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Edit Sobok</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
			
			</div>
		</div>
	</div>
</div>



<!-- /Edit Employee Modal -->










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




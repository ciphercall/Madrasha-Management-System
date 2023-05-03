@extends('layout.erp.home')
@section('page')



<!-- Page Content -->
<div class="content container-fluid">
				
	<!-- Page Header -->
	<div class="page-header">
		<div class="row align-items-center">
			<div class="col">
				<h2 class="page-title">Volunteer </h2>
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
					<li class="breadcrumb-item active">volunteer </li>
				</ul>
			</div>
			<div class="col-auto float-right ml-auto">
				<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_overtime"><i class="fa fa-plus"></i> Add volunteer-Center</a>
			</div>
		</div>
	</div>
	<!-- /Page Header -->
	
	<!-- volunteer Center Statistics -->
	<div class="row">
		<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
			<div class="stats-info">
				<h6>volunteer  member</h6>
				<h4>12 <span>this month</span></h4>
			</div>
		</div>
		<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
			<div class="stats-info">
				<h6>volunteer Center </h6>
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
	<!-- /volunteer Center Statistics -->
	@if (session('success'))
		<div class="alert alert-success"><b>{{session('success')}}</b> </div>
	@endif
	<div class="row">
		<div class="col-md-12">
			<div class="table-responsive">
				<table class="table table-striped custom-table mb-0 datatable">
					<thead>
						<tr>
							<th>Brunch Name</th>
							<th>Member Name</th>
							<th>Phone</th>
							<th>Occasion</th>
							<th>Duty</th>
							<th>Present Duty</th>
							<th>Previous Duty</th>
						
							
							<th class="text-right">Actions</th>
						</tr>
					</thead>
					<tbody>
						@forelse ($volunteers as $volunteer)


						<tr>
							<td>{{$volunteer->brunch_id}} | {{$volunteer->brunch_name}}</td>
						
							<td>{{$volunteer->member_id}} | {{$volunteer->member_name}}</td>
							<td>{{$volunteer->phone}}</td>
							<td>{{$volunteer->occasion}}</td>
							<td>{{$volunteer->duty}}</td>
							<td>{{$volunteer->present_duty}}</td>
							<td>{{$volunteer->previous_duty}}</td>
						
							<td class="text-right">
								<div class="dropdown dropdown-action">
									<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
									<div class="dropdown-menu dropdown-menu-right">

									
										<button type="button" value="{{$volunteer->id}}" class="btn btn-success" id="volshBtn" ><i class="bi bi-eye-fill"></i> </button>


										<button type="button" value="{{$volunteer->id}}" class="btn btn-primary" id="volBtn" ><i class="bi bi-pencil-square" ></i> </button>

										<button type="button" value="{{$volunteer->id}}" class="btn btn-warning" id="volDbtn" ><i class="fa fa-trash-o m-r-5"></i> </button>

									</div>
								</div>
							</td>
						</tr>
					</tbody>
					@empty
						<tr><td colspan="14">No records found</td></tr>
					@endforelse
					
				</table>
				{{$volunteers->links()}}

			</div>
		</div>
	</div>
</div>
<!-- /Page Content -->

<!-- Add volunteer Center Modal -->
<div id="add_overtime" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add volunteer Center</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="background-color: teal">
				<form action="{{route('volunteers.store')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-sm-4">
	
							<div class="form-group">
								<label class="col-form-label">Brunch NO / শাখা নং: <span class="text-danger">*</span></label>
								
								{{-- <input type="hidden" class="form-control" id="cmbvolId" name="cmbvolId" required>
								 --}}
								<select id="cmbBrunchId" class="form-control" name="cmbBrunchId" required>
								<option selected>Choose...</option>
	
								@foreach ($brunchs as $brunch)
								<option value="{{ $brunch->id }}">{{ $brunch->brunch_code }} </option>
								@endforeach
								</select>
	
							</div>
						</div>	
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Brunch Name / শাখার নাম: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="ooBrunch_name" name="txtBrunch_name" required>
								
							</div>
						</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Member Id : <span class="text-danger">*</span></label>
									<select id="cmbMemberId" class="form-control" name="cmbMemberId" required>
										<option selected>Choose...</option>
			
										@foreach ($members as $member)
										<option value="{{ $member->id }}">{{ $member->id }} | {{ $member->name }} </option>
										@endforeach
										</select>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Member Name :</label>
									<input type="text" class="form-control" id="txtMember_name" name="txtMember_name" placeholder="Enter Member Name" required>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Phone : <span class="text-danger">*</span></label>
									<input type="number" class="form-control" id="ootxtPhone" name="txtPhone" placeholder="Enter Start Time" required>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Occasion: <span class="text-danger">*</span></label>


									<select id="cmbMemberId" class="form-control" name="txtOccasion" required>
										<option selected>Choose...</option>
			
										@foreach ($occasions as $occasion)
										<option value="{{ $occasion->id }}"> {{ $occasion->name }} </option>
										@endforeach
										</select>

									
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Duty</label>
									{{-- <input type="text" class="form-control" id="txtNum_speakers" name="txtDuty" placeholder=" Number Of Speakers Name" required> --}}

									<select id="cmbMemberId" class="form-control" name="txtDuty" required>
										<option selected>Choose...</option>
			
										@foreach ($dutys as $duty)
										<option value="{{ $duty->id }}"> {{ $duty->name }} </option>
										@endforeach
										</select>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Present Duty : <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="txtSpeakers" name="txtPresent_duty" placeholder="Enter Speakers Name" required> 
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Previous Duty: <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="txtOccasion" name="txtPrevious_duty" placeholder="Occasion" required>
								</div>
							</div>
						
							
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Duty Date:</label>
									<input type="date" class="form-control" id="txtAddress" name="txtDuty_date" placeholder="Enter Duty Date" required>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Place: <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="txtNum_audience" name="txtPlace" placeholder="Enter Speakers" required>
								</div>
							</div>	<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Comment: <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="txtNum_audience" name="txtComment" placeholder="Enter Speakers" required>
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
<!-- /Add volunteer Center Modal -->

<!-- Edit volunteer Center Modal -->
<div id="edit_vol" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit volunteers</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="background-color: teal">
				<form action="{{url('volunteer-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="row">
						<div class="col-sm-4">
	
							<div class="form-group">
								<label class="col-form-label">Brunch NO / শাখা নং: <span class="text-danger">*</span></label>
								
								<input type="hidden" class="form-control" id="cmbvolId" name="cmbvolId" required>

								<select id="volbrunch_id" class="form-control" name="cmbBrunchId" required>
								<option selected>Choose...</option>
	
								@foreach ($brunchs as $brunch)
								<option value="{{ $brunch->id }}">{{ $brunch->brunch_code }} </option>
								@endforeach
								</select>
	
							</div>
						</div>	
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Brunch Name / শাখার নাম: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="volbrunch_name" name="txtBrunch_name" required>
								
							</div>
						</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Member Id : <span class="text-danger">*</span></label>
									<select id="volmember_id" class="form-control" name="cmbMemberId" required>
										<option selected>Choose...</option>
			
										@foreach ($members as $member)
										<option value="{{ $member->id }}">{{ $member->id }} | {{ $member->name }} </option>
										@endforeach
										</select>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Member Name :</label>
									<input type="text" class="form-control" id="volmember_name" name="txtMember_name" placeholder="Enter Member Name" required>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Phone : <span class="text-danger">*</span></label>
									<input type="number" class="form-control" id="volphone" name="txtPhone" placeholder="Enter Start Time" required>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Occasion: <span class="text-danger">*</span></label>


									<select id="voloccasion" class="form-control" name="txtOccasion" required>
										<option selected>Choose...</option>
			
										@foreach ($occasions as $occasion)
										<option value="{{ $occasion->id }}"> {{ $occasion->name }} </option>
										@endforeach
										</select>

									
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Duty</label>
									{{-- <input type="text" class="form-control" id="txtNum_speakers" name="txtDuty" placeholder=" Number Of Speakers Name" required> --}}

									<select id="volduty" class="form-control" name="txtDuty" required>
										<option selected>Choose...</option>
			
										@foreach ($dutys as $duty)
										<option value="{{ $duty->id }}"> {{ $duty->name }} </option>
										@endforeach
										</select>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Present Duty : <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="volpresent_duty" name="txtPresent_duty" placeholder="Enter Speakers Name" required> 
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Previous Duty: <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="volprevious_duty" name="txtPrevious_duty" placeholder="Occasion" required>
								</div>
							</div>
						
							
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Duty Date:</label>
									<input type="date" class="form-control" id="volduty_date" name="txtDuty_date" placeholder="Enter Duty Date" required>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Place: <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="volplace" name="txtPlace" placeholder="Enter Speakers" required>
								</div>
							</div>	<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Comment: <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="volcomment" name="txtComment" placeholder="Enter Speakers" required>
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
<!-- /Edit volunteer Center Modal -->

<!-- Delete volunteer Center Modal -->
<div class="modal custom-modal fade" id="delete_vol" role="dialog">
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

<!-- show volunteer Center Modal -->
<div id="show_vol" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document" >
		<div class="modal-content" style="width: 900px;">
			<div class="modal-header"  style="width: 900px;">
				<h2 class="modal-title"> Volunteer Details </h2>
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
														<div class="text" id="volSHbrunch_id"></div>
													</li>
													<li>
														<div class="title"><b>B Name:</b></div>
														<div class="text"><a href="" id="volSHbrunch_name"></a></div>
													</li>
													<li>
														<div class="title"><b>Member ID:</b></div>
														<div class="text" id="volSHmember_id"></div>
													</li>
													<li>
														<div class="title"><b>Member Name:</b></div>
														<div class="text" id="volSHmember_name"></div>
													</li>
													<li>
														<div class="title"><b>Phone:</b></div>
														<div class="text" id="volSHphone"></div>
													</li>
													
													
												</ul>
											</div>

											</div>
											<div class="col-md-6">
												<ul class="personal-info">
													<li>
														<div class="title">Occasion:</div>
														<div class="text"><a href="" id="volSHoccasion"></a></div>
													</li>
													<li>
														<span class="title">Duty:</span>
														<span class="text"><a href="" id="volSHduty"></a></span>
													</li>
													<li>
														<span class="title">Present Duty:</span>
														<span class="text" id="volSHpresent_duty"></span>
													</li>
													<li>
														<div class="title">Previous Duty:</div>
														<div class="text" id="volSHprevious_duty"></div>
													</li>
													<li>
														<div class="title">Duty Date:</div>
														<div class="text" id="volSHduty_date"></div>
													</li>
													<li>
														<div class="title"> Place :</div>
														<div class="text" id="volSHplace"></div>
													</li>
													<li>
														<div class="title"> Comment :</div>
														<div class="text" id="volSHcomment"></div>
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
<!-- /show volunteer Center Modal -->
<script>
	$(document).ready(function(){
        $(document).on('click','#volDbtn',function(){
			var vol_id=$(this).val();
            // alert(member_id);
			$('#delete_vol').modal('show');
			$('#delete_volId').val(vol_id);
		});



		$(document).on('click','#volBtn',function(){
			//  alert("ok");

			var vol_id=$(this).val();
			// alert(invi_id);
			$('#edit_vol').modal('show');
			$.ajax({
				type: "GET",
				url: "/edit-volunteer/"+vol_id,
				success:function(response){
					// console.log(response.volunteer.brunch_name);
					$('#cmbvolId').val(vol_id);
					

					$('#volbrunch_id').val(response.volunteer.brunch_id);
					$('#volbrunch_name').val(response.volunteer.brunch_name);

					$('#volmember_id').val(response.volunteer.member_id);
					$('#volmember_name').val(response.volunteer.member_name);
					$('#volphone').val(response.volunteer.phone);
					$('#voloccasion').val(response.volunteer.occasion);
					$('#volduty').val(response.volunteer.duty);
					$('#volpresent_duty').val(response.volunteer.present_duty);
					$('#volprevious_duty').val(response.volunteer.previous_duty);
					$('#volduty_date').val(response.volunteer.duty_date);
					$('#volplace').val(response.volunteer.place);
					$('#volcomment').val(response.volunteer.comment);
					
				
					
				}
			});
		});

		$(document).on('click','#volshBtn',function(){
			//  alert("ok");

			var volsh_id=$(this).val();
			// alert(invi_id);
			$('#show_vol').modal('show');
			$.ajax({
				type: "GET",
				url: "/show-volunteer/"+volsh_id,
				success:function(response){
					// console.log(response.volunteer.brunch_name);
					$('#cmbvolSHId').html(volsh_id);
					
					$('#volSHbrunch_id').html(response.svolunteer.brunch_id);
					$('#volSHbrunch_name').html(response.svolunteer.brunch_name);

					$('#volSHmember_id').html(response.svolunteer.member_id);
					$('#volSHmember_name').html(response.svolunteer.member_name);
					$('#volSHphone').html(response.svolunteer.phone);
					$('#volSHoccasion').html(response.svolunteer.occasion);
					$('#volSHduty').html(response.svolunteer.duty);
					$('#volSHpresent_duty').html(response.svolunteer.present_duty);
					$('#volSHprevious_duty').html(response.svolunteer.previous_duty);
					$('#volSHduty_date').html(response.svolunteer.duty_date);
					$('#volSHplace').html(response.svolunteer.place);
					$('#volSHcomment').html(response.svolunteer.comment);
					
				
					
				}
			});
		});

	
		$("#cmbBrunchId").on("change",function(){
			// alert("ok");
           $.ajax({
             url:"<?php echo url("getvolunteers")?>",
             type:'GET',
             data:{"id":$(this).val()},
             success:function(res){
              let volunteer=JSON.parse(res);
                console.log(volunteer);
               $("#ooBrunch_name").val(volunteer.brunch_name);

              
            //    $("#").val(member.);
              





             }
           });
        }); 

		$("#cmbMemberId").on("change",function(){
           $.ajax({
             url:"<?php echo url("getmembers")?>",
             type:'GET',
             data:{"id":$(this).val()},
             success:function(res){
              let member=JSON.parse(res);
                console.log(member);
            //    $("#customer-name").val(member.name);
               $("#txtMember_name").val(member.name);
              
               $("#ootxtPhone").val(member.phone);
              





             }
           });
        });

        
	});
</script>
@endsection





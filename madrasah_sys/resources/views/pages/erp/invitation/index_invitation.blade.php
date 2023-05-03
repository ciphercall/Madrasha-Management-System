@extends('layout.erp.home')
@section('page')




<!-- Page Content -->
<div class="content container-fluid">
				
	<!-- Page Header -->
	<div class="page-header">
		<div class="row align-items-center">
			<div class="col">
				<h3 class="page-title">Invitation </h3>
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
					<li class="breadcrumb-item active">Invitation </li>
				</ul>
			</div>
			<div class="col-auto float-right ml-auto">
				<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_overtime"><i class="fa fa-plus"></i> Add Invitation-Center</a>
			</div>
		</div>
	</div>
	<!-- /Page Header -->
	
	<!-- Invitation Center Statistics -->
	<div class="row">
		<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
			<div class="stats-info">
				<h6>Invitation  member</h6>
				<h4>12 <span>this month</span></h4>
			</div>
		</div>
		<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
			<div class="stats-info">
				<h6>Invitation Center Hours</h6>
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
	<!-- /Invitation Center Statistics -->
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
							<th>Studid</th>
							<th>Date</th>
							<th>Name</th>
							<th>Amount</th>
							<th>Occasion</th>
							<th>Comment</th>
							
							<th class="text-right">Actions</th>
						</tr>
					</thead>
					<tbody>
						@forelse ($invitations as $invitation)


						<tr>
							<td>{{$invitation->brunch_name}}</td>
							<td>{{$invitation->studid}}</td>
							<td>{{$invitation->date}}</td>
							<td>{{$invitation->name}}</td>
							<td>{{$invitation->amount}}</td>
							<td>{{$invitation->occasion}}</td>
							<td>{{$invitation->comment}}</td>
							<td class="text-right">
								<div class="dropdown dropdown-action">
									<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
									<div class="dropdown-menu dropdown-menu-right">




										<button type="button" value="{{$invitation->id}}" class="btn btn-success" id="invishBtn" ><i class="bi bi-eye-fill" ></i> </button>


										<button type="button" value="{{$invitation->id}}" class="btn btn-primary" id="inviBtn" ><i class="bi bi-pencil-square" ></i> </button>

										<button type="button" value="{{$invitation->id}}" class="btn btn-warning" id="inviDbtn" ><i class="fa fa-trash-o m-r-5"></i> </button>

									</div>
								</div>
							</td>
						</tr>
					</tbody>
					@empty
						<tr><td colspan="14">No records found</td></tr>
					@endforelse
					
				</table>
				{{$invitations->links()}}

			</div>
		</div>
	</div>
</div>
<!-- /Page Content -->

<!-- Add Invitation Center Modal -->
<div id="add_overtime" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add Invitation Center</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="background-color: teal">
				<form action="{{route('invitations.store')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Brunch Id : <span class="text-danger">*</span></label>
								{{-- <input type="hidden" class="form-control" id="" name="cmbBrunchId" placeholder="Enter " required> --}}

								<select id="cmbBrunchId" class="form-control" name="cmbBrunchId" required>
									<option selected>Choose...</option>
	
									@foreach ($brunchs as $brunch)
									<option value="{{ $brunch->id }}">{{ $brunch->brunch_code }} | {{ $brunch->brunch_name }}</option>
									@endforeach
									</select>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label"> Brunch Name: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="ooBrunch_name" name="txtBrunch_name" placeholder="Enter " >
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Date : <span class="text-danger">*</span></label>
								<input type="date" class="form-control" id="" name="txtDate" placeholder="Enter " required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Studid : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="" name="txtStudid" placeholder="Enter " >
							</div>
						</div>	<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Name: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="" name="txtName" placeholder="Enter " required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Email : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="" name="txtEmail" placeholder="Enter " >
							</div>
						</div>	<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Phone: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="" name="txtPhone" placeholder="Enter " required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Amount : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="" name="txtAmount" placeholder="Enter " >
							</div>
						</div>	<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Occasion : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="" name="txtOccasion" placeholder="Enter " required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Comment : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="" name="txtComment" placeholder="Enter " >
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
<!-- /Add Invitation Center Modal -->

<!-- Edit Invitation Center Modal -->
<div id="edit_invi" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit invitations</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="background-color: teal">
				<form action="{{url('invitation-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Brunch Id : <span class="text-danger">*</span></label>


								<input type="hidden" class="form-control" id="cmbinviId" name="cmbinviId" placeholder="Enter cmbinviId " required>

								<select id="invibrunchId" class="form-control" name="cmbBrunchId" required>
									<option selected>Choose...</option>
	
									@foreach ($brunchs as $brunch)
									<option value="{{ $brunch->id }}">{{ $brunch->brunch_code }} | {{ $brunch->brunch_name }}</option>
									@endforeach
									</select>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label"> Brunch Name: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="invibrunch_name" name="txtBrunch_name" placeholder="Enter " >
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Date : <span class="text-danger">*</span></label>
								<input type="date" class="form-control" id="invidate" name="txtDate" placeholder="Enter " required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Studid : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="invistudid" name="txtStudid" placeholder="Enter " >
							</div>
						</div>	<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Name: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="inviname" name="txtName" placeholder="Enter " required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Email : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="inviemail" name="txtEmail" placeholder="Enter " >
							</div>
						</div>	<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Phone: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="inviphone" name="txtPhone" placeholder="Enter " required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Amount : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="inviamount" name="txtAmount" placeholder="Enter " >
							</div>
						</div>	<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Occasion : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="invioccasion" name="txtOccasion" placeholder="Enter " required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Comment : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="invicomment" name="txtComment" placeholder="Enter " >
							</div>
						</div>		
						
							
					</div>
					<div class="submit-section">
						<button class="btn btn-primary submit-btn">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /Edit Invitation Center Modal -->

<!-- Delete Invitation Center Modal -->
<div class="modal custom-modal fade" id="delete_invi" role="dialog">
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
							
						

						<form action="{{url('delete-invitation')}}" method="post" >
									@csrf
									@method("DELETE")
									<input type="hidden" id="delete_inviId" name="d_invi">


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
<!-- /Delete Invitation Center Modal -->


<!-- show padcollection Center Modal -->

<div id="show_invi" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title">Show Pad User Details</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="background-color: rgb(4, 21, 34)">
				
				<form action="">
					<div class="row">
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Brunch Code / শাখা: <span class="text-danger">*</span></label>
								<div class="form-control "  id="inviSHbrunch_id"></div>
								
							</div>
						</div>
						
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Brunch Name: <span class="text-danger">*</span></label>
								<div class="form-control" id="inviSHbrunch_name"></div>
								
							</div>
						</div>
						
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Studid : <span class="text-danger">*</span></label>
								<div class="form-control" id="inviSHstudid"></div>
								
							</div>
						</div>
					
						
					
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Date : <span class="text-danger">*</span></label>
								<div class="form-control" id="inviSHdate"></div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">  Name: <span class="text-danger">*</span></label>
								<div class="form-control" id="inviSHname"></div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb"> Phone: <span class="text-danger">*</span></label>
								<div class="form-control" id="inviSHphone"></div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb"> Email: <span class="text-danger">*</span></label>
								<div class="form-control" id="inviSHemail"></div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Amount: <span class="text-danger">*</span></label>
								<div class="form-control" id="inviSHamount"></div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Occasion : <span class="text-danger">*</span></label>
								<div class="form-control" id="inviSHoccasion"></div>
								
							</div>
						</div>
					
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Comment : <span class="text-danger">*</span></label>
								<div class="form-control" id="inviSHcomment"></div>
								
							</div>
						</div>
						
						
						
					</div>
							
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /show loan Center Modal -->

<script>
$(document).ready(function(){
        $(document).on('click','#inviDbtn',function(){
			var invi_id=$(this).val();
            // alert(member_id);
			$('#delete_invi').modal('show');
			$('#delete_inviId').val(invi_id);
		});



		$(document).on('click','#inviBtn',function(){
			//  alert("ok");

			var invi_id=$(this).val();
			// alert(invi_id);
			$('#edit_invi').modal('show');
			$.ajax({
				type: "GET",
				url: "/edit-invitation/"+invi_id,
				success:function(response){
					console.log(response.invitation.brunch_name);
					$('#cmbinviId').val(invi_id);
					$('#invibrunchId').val(response.invitation.brunch_id);


					$('#invibrunch_name').val(response.invitation.brunch_name);
					$('#invistudid').val(response.invitation.studid);
					$('#invidate').val(response.invitation.date);
					$('#inviname').val(response.invitation.name);
					$('#inviemail').val(response.invitation.email);
					$('#inviphone').val(response.invitation.phone);
					$('#inviamount').val(response.invitation.amount);
					$('#invioccasion').val(response.invitation.occasion);
					$('#invicomment').val(response.invitation.comment);
				
					
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
              let padcollection=JSON.parse(res);
                console.log(padcollection);
               $("#ooBrunch_name").val(padcollection.brunch_name);

              
            //    $("#").val(member.);
              





             }
           });
        });

        
		$(document).on('click','#invishBtn',function(){
			//  alert("ok");

			var invish_id=$(this).val();
			// alert(invi_id);
			$('#show_invi').modal('show');
			$.ajax({
				type: "GET",
				url: "/show-invitation/"+invish_id,
				success:function(response){
					// console.log(response.padcollection.brunch_name);
					$('#cmbincSHId').html(invish_id);
					

					$('#inviSHbrunch_id').html(response.sinvitation.brunch_id);
					$('#inviSHbrunch_name').html(response.sinvitation.brunch_name);
	
					$('#inviSHstudid').html(response.sinvitation.studid);
					$('#inviSHdate').html(response.sinvitation.date);
					$('#inviSHname').html(response.sinvitation.name);
					$('#inviSHemail').html(response.sinvitation.email);
					$('#inviSHphone').html(response.sinvitation.phone);
					$('#inviSHamount').html(response.sinvitation.amount);
					$('#inviSHoccasion').html(response.sinvitation.occasion);
					$('#inviSHcomment').html(response.sinvitation.comment);

					
				
					
				}
			});
		});
	});
</script>
@endsection


@extends('layout.erp.home')
@section('page')





<!-- Page Content -->
<div class="content container-fluid">
				
	<!-- Page Header -->
	<div class="page-header">
		<div class="row align-items-center">
			<div class="col">
				<h3 class="page-title">Deposit Center </h3>
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
					<li class="breadcrumb-item active">Deposit Center </li>
				</ul>
			</div>
			<div class="col-auto float-right ml-auto">
				<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_overtime"><i class="fa fa-plus"></i> Add Deposit Center</a>
			</div>
		</div>
	</div>
	<!-- /Page Header -->
	
	<!-- Invitation Center Statistics -->
	<div class="row">
		<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
			<div class="stats-info">
				<h6>Deposit  Center member</h6>
				<h4>12 <span>this month</span></h4>
			</div>
		</div>
		<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
			<div class="stats-info">
				<h6>Deposit  Center Hours</h6>
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
							<th>Collection Date</th>
							<th>Member Name</th>
							<th>Received Amount</th>
							<th>Purpose Catagory</th>
							<th>Receiver Name</th>
							<th>Money Receipt No</th>
							
							<th class="text-right">Actions</th>
						</tr>
					</thead>
					<tbody>
						@forelse ($depositcenters as $depositcenter)



						<tr>
							<td>{{$depositcenter->brunch_name}} | {{$depositcenter->brunch_id}}</td>
							<td>{{$depositcenter->collection_date}}</td>
							<td>{{$depositcenter->member_name}}</td>
							<td>{{$depositcenter->received_amount}}</td>
							<td>{{$depositcenter->purpose_catagory}}</td>
							<td>{{$depositcenter->receiver_name}}</td>
							<td>{{$depositcenter->money_receipt_no}}</td>
							<td class="text-right">
								<div class="dropdown dropdown-action">
									<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
									<div class="dropdown-menu dropdown-menu-right">


									

										<button type="button" value="{{$depositcenter->id}}" class="btn btn-info" id="depSHBtn" ><i class="bi bi-eye-fill" ></i> </button>

										<button type="button" value="{{$depositcenter->id}}" class="btn btn-primary" id="depBtn" ><i class="bi bi-pencil-square" ></i> </button>

										<button type="button" value="{{$depositcenter->id}}" class="btn btn-warning" id="depDbtn" ><i class="fa fa-trash-o m-r-5"></i> </button>

									</div>
								</div>
							</td>
							
						</tr>
					</tbody>
					@empty
						<tr><td colspan="14">No records found</td></tr>
					@endforelse
					
				</table>
				{{$depositcenters->links()}}

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
				<h5 class="modal-title">Add depositcenters </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="background-color: teal">
				<form action="{{route('depositcenters.store')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Brunch Id : <span class="text-danger">*</span></label>
								{{-- 	<input type="hidden" class="form-control" id="cmbdepId" name="cmbdepId" placeholder="Enter "> --}}

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
								<label class="col-form-label">Collection Date : <span class="text-danger">*</span></label>
								<input type="date" class="form-control" id="" name="txtCollection_date" placeholder="Enter " >
							</div>
						</div>	
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Member Name: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="" name="txtMember_name" placeholder="Enter " required>
							</div>
						</div>
							<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Phone : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="" name="txtPhone" placeholder="Enter " required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Received Amount <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="" name="txtReceived_amount" placeholder="Enter " >
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Purpose Catagory : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="" name="txtPurpose_catagory" placeholder="Enter " >
							</div>
						</div>		
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Receiver Name : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="" name="txtReceiver_name" placeholder="Enter " >
							</div>
						</div>		
							<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Money Receipt No: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="" name="txtMoney_receipt_no" placeholder="Enter " >
							</div>
						</div>		
						<div class="col-sm-6">

							<div class="form-group">
								<label class="col-form-label">Acknowledgment Receipt : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="" name="txtAcknowledgment_receipt" placeholder="Enter " >
							</div>
						</div>		
						<div class="col-sm-6">

							<div class="form-group">
								<label class="col-form-label">Comment  : <span class="text-danger">*</span></label>
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
<div id="edit_dep" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit invitationcenters</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="background-color: teal">
				<form action="{{url('depositcenter-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Brunch Id : <span class="text-danger">*</span></label>
									<input type="hidden" class="form-control" id="cmbdepId" name="cmbdepId" placeholder="Enter ">

								<select id="depbrunchId" class="form-control" name="cmbBrunchId" required>
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
								<input type="text" class="form-control" id="depbrunch_name" name="txtBrunch_name" placeholder="Enter " >
							</div>
						</div>
					
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Collection Date : <span class="text-danger">*</span></label>
								<input type="date" class="form-control" id="depcollection_date" name="txtCollection_date" placeholder="Enter " >
							</div>
						</div>	
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Member Name: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="depmember_name" name="txtMember_name" placeholder="Enter " required>
							</div>
						</div>
							<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Phone : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="depphone" name="txtPhone" placeholder="Enter " required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Received Amount <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="depreceived_amount" name="txtReceived_amount" placeholder="Enter " >
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Purpose Catagory : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="deppurpose_catagory" name="txtPurpose_catagory" placeholder="Enter " >
							</div>
						</div>		
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Receiver Name : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="depreceiver_name" name="txtReceiver_name" placeholder="Enter " >
							</div>
						</div>		
							<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Money Receipt No: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="depmoney_receipt_no" name="txtMoney_receipt_no" placeholder="Enter " >
							</div>
						</div>		
						<div class="col-sm-6">

							<div class="form-group">
								<label class="col-form-label">Acknowledgment Receipt : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="depacknowledgment_receipt" name="txtAcknowledgment_receipt" placeholder="Enter " >
							</div>
						</div>		
						<div class="col-sm-6">

							<div class="form-group">
								<label class="col-form-label">Comment  : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="depcomment" name="txtComment" placeholder="Enter " >
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
<div class="modal custom-modal fade" id="delete_dep" role="dialog">
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
							
						

						<form action="{{url('delete-depositcenter')}}" method="post" >
									@csrf
									@method("DELETE")
									<input type="hidden" id="delete_depId" name="d_dep">


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

<div id="show_dep" class="modal custom-modal fade" role="dialog">
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
								<div class="form-control "  id="depSHbrunch_id"></div>
								
							</div>
						</div>
						
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Brunch Name: <span class="text-danger">*</span></label>
								<div class="form-control" id="depSHbrunch_name"></div>
								
							</div>
						</div>
						
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Collection Date : <span class="text-danger">*</span></label>
								<div class="form-control" id="depSHcollection_date"></div>
								
							</div>
						</div>
					
						
					
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb"> Member_name : <span class="text-danger">*</span></label>
								<div class="form-control" id="depSHmember_name"></div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Phone: <span class="text-danger">*</span></label>
								<div class="form-control" id="depSHphone"></div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Received Amount : <span class="text-danger">*</span></label>
								<div class="form-control" id="depSHreceived_amount"></div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Purpose_catagory: <span class="text-danger">*</span></label>
								<div class="form-control" id="depSHpurpose_catagory"></div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Receiver_name: <span class="text-danger">*</span></label>
								<div class="form-control" id="depSHreceiver_name"></div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Money_receipt_no: <span class="text-danger">*</span></label>
								<div class="form-control" id="depSHmoney_receipt_no"></div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Acknowledgment_receipt: <span class="text-danger">*</span></label>
								<div class="form-control" id="depSHacknowledgment_receipt"></div>
								
							</div>
						</div>
					
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">comment: <span class="text-danger">*</span></label>
								<div class="form-control" id="depSHcomment"></div>
								
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
        $(document).on('click','#depDbtn',function(){
			var dep_id=$(this).val();
            // alert(member_id);
			$('#delete_dep').modal('show');
			$('#delete_depId').val(dep_id);
		});



		$(document).on('click','#depBtn',function(){
			//  alert("ok");

			var dep_id=$(this).val();
			// alert(qu_id);
			$('#edit_dep').modal('show');
			$.ajax({
				type: "GET",
				url: "/edit-depositcenter/"+dep_id,
				success:function(response){
					// console.log(response.member.name);
					$('#cmbdepId').val(dep_id);
					$('#depbrunchId').val(response.depositcenter.brunch_id);
					$('#depbrunch_name').val(response.depositcenter.brunch_name);

					

					
					$('#depcollection_date').val(response.depositcenter.collection_date);
					$('#depmember_name').val(response.depositcenter.member_name);
					$('#depphone').val(response.depositcenter.phone);
					$('#depreceived_amount').val(response.depositcenter.received_amount);
					$('#deppurpose_catagory').val(response.depositcenter.purpose_catagory);
					$('#depreceiver_name').val(response.depositcenter.receiver_name);
					$('#depmoney_receipt_no').val(response.depositcenter.money_receipt_no);
					$('#depacknowledgment_receipt').val(response.depositcenter.acknowledgment_receipt);
					$('#depcomment').val(response.depositcenter.comment);
					
					
				
					
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

		$(document).on('click','#depSHBtn',function(){
			//  alert("ok");

			var depsh_id=$(this).val();
			// alert(invi_id);
			$('#show_dep').modal('show');
			$.ajax({
				type: "GET",
				url: "/show-depositcenter/"+depsh_id,
				success:function(response){
					// console.log(response.padcollection.brunch_name);
					$('#cmbincSHId').html(depsh_id);
					

					$('#depSHbrunch_id').html(response.sdepositcenter.brunch_id);
					$('#depSHbrunch_name').html(response.sdepositcenter.brunch_name);
	
					$('#depSHcollection_date').html(response.sdepositcenter.collection_date);

					$('#depSHmember_name').html(response.sdepositcenter.member_name);
					$('#depSHphone').html(response.sdepositcenter.phone);

					$('#depSHreceived_amount').html(response.sdepositcenter.received_amount);
					$('#depSHpurpose_catagory').html(response.sdepositcenter.purpose_catagory);
					$('#depSHreceiver_name').html(response.sdepositcenter.receiver_name);
					$('#depSHmoney_receipt_no').html(response.sdepositcenter.money_receipt_no);
					$('#depSHacknowledgment_receipt').html(response.sdepositcenter.acknowledgment_receipt);
					$('#depSHcomment').html(response.sdepositcenter.comment);
					
				
					
				}
			});
		}); 
	});
</script>
@endsection





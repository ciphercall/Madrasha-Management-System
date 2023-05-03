@extends('layout.erp.home')
@section('page')



<!-- Page Content -->
<div class="content container-fluid">
				
	<!-- Page Header -->
	<div class="page-header">
		<div class="row align-items-center">
			<div class="col">
				<h3 class="page-title">Donationboxe </h3>
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
					<li class="breadcrumb-item active">Donationboxe </li>
				</ul>
			</div>
			<div class="col-auto float-right ml-auto">
				<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_overtime"><i class="fa fa-plus"></i> Add Donationboxe</a>
			</div>
		</div>
	</div>
	<!-- /Page Header -->
	
	<!-- donationboxe Center Statistics -->
	<div class="row">
		<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
			<div class="stats-info">
				<h6>Donationboxe  member</h6>
				<h4>12 <span>this month</span></h4>
			</div>
		</div>
		<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
			<div class="stats-info">
				<h6>Donationboxe Center </h6>
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
	<!-- /donationboxe Center Statistics -->
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
							<th>Category</th>
							<th>Date</th>
							<th>Receiver Name</th>
							<th>Address</th>
							<th>Box No</th>
							<th>Phone</th>
							<th>Provider Name</th>
						
							
							<th class="text-right">Actions</th>
						</tr>
					</thead>
					<tbody>
						@forelse ($donationboxes as $donationboxe)




						<tr>
							<td>{{$donationboxe->brunch_name}}</td>
							<td>{{$donationboxe->category}}</td>
							<td>{{$donationboxe->date}}</td>
							<td>{{$donationboxe->receiver_name}}</td>
							<td>{{$donationboxe->address}}</td>
							<td>{{$donationboxe->box_no}}</td>
							<td>{{$donationboxe->phone}}</td>
							<td>{{$donationboxe->provider_name}}</td>
						
							<td class="text-right">
								<div class="dropdown dropdown-action">
									<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
									<div class="dropdown-menu dropdown-menu-right">


										<a class="btn btn-success" href="{{route('donationboxes.show',$donationboxe->id)}}"  ><i class="bi bi-eye-fill"></i> </a>

										<button type="button" value="{{$donationboxe->id}}" class="btn btn-primary" id="donBtn" ><i class="bi bi-pencil-square" ></i> </button>

										<button type="button" value="{{$donationboxe->id}}" class="btn btn-warning" id="donDbtn" ><i class="fa fa-trash-o m-r-5"></i> </button>

									</div>
								</div>
							</td>
						</tr>
					</tbody>
					@empty
						<tr><td colspan="14">No records found</td></tr>
					@endforelse
					
				</table>
				{{$donationboxes->links()}}

			</div>
		</div>
	</div>
</div>
<!-- /Page Content -->

<!-- Add donationboxe Center Modal -->
<div id="add_overtime" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add donationboxe Center</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="background-color: teal">
				<form action="{{route('donationboxes.store')}}" method="post" enctype="multipart/form-data">
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
								<label class="col-form-label"> Category: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="" name="txtCategory" placeholder="Enter " >
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
								<label class="col-form-label">Receiver Name: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="" name="txtReceiver_name" placeholder="Enter " required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Member Category : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="" name="txtMember_category" placeholder="Enter " >
							</div>
						</div>	<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Address: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="" name="txtAddress" placeholder="Enter " required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Box No : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="" name="txtBox_no" placeholder="Enter " >
							</div>
						</div>	
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Phone: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="" name="txtPhone" placeholder="Enter " required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Provider Name : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="" name="txtProvider_name" placeholder="Enter " required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label"> Comment : <span class="text-danger">*</span></label>
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
<!-- /Add donationboxe Center Modal -->

<!-- Edit donationboxe Center Modal -->
<div id="edit_don" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit donationboxes</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="background-color: teal">
				<form action="{{url('donationboxe-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Brunch Id : <span class="text-danger">*</span></label>
								<input type="hidden" class="form-control" id="doncmbdonId" name="cmbdonId" placeholder="Enter " required>

								<select id="donbrunch_id" class="form-control" name="cmbBrunchId" required>
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
								<input type="text" class="form-control" id="donbrunch_name" name="txtBrunch_name" placeholder="Enter " >
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label"> Category: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="doncategory" name="txtCategory" placeholder="Enter " >
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Date : <span class="text-danger">*</span></label>
								<input type="date" class="form-control" id="dondate" name="txtDate" placeholder="Enter " required>
							</div>
						</div>
						
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Receiver Name: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="donreceiver_name" name="txtReceiver_name" placeholder="Enter " required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Address: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="donaddress" name="txtAddress" placeholder="Enter " required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Box No : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="donbox_no" name="txtBox_no" placeholder="Enter " >
							</div>
						</div>	
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Phone: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="donphone" name="txtPhone" placeholder="Enter " required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Provider Name : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="donprovider_name" name="txtProvider_name" placeholder="Enter " required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label"> Comment : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="doncomment" name="txtComment" placeholder="Enter " >
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
<!-- /Edit donationboxe Center Modal -->

<!-- Delete donationboxe Center Modal -->
<div class="modal custom-modal fade" id="delete_don" role="dialog">
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
							
						

						<form action="{{url('delete-donationboxe')}}" method="post" >
									@csrf
									@method("DELETE")
									<input type="hidden" id="delete_donId" name="d_don">


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
<!-- /Delete donationboxe Center Modal -->


<script>
$(document).ready(function(){
        $(document).on('click','#donDbtn',function(){
			var don_id=$(this).val();
            // alert(member_id);
			$('#delete_don').modal('show');
			$('#delete_donId').val(don_id);
		});



		$(document).on('click','#donBtn',function(){
			//  alert("ok");

			var don_id=$(this).val();
			// alert(invi_id);
			$('#edit_don').modal('show');
			$.ajax({
				type: "GET",
				url: "/edit-donationboxe/"+don_id,
				success:function(response){
					// console.log(response.donationboxe.brunch_name);
					$('#doncmbdonId').val(don_id);
						
					$('#donbrunch_id').val(response.donationboxe.brunch_id);	
					$('#donbrunch_name').val(response.donationboxe.brunch_name);	
					$('#doncategory').val(response.donationboxe.category);
					$('#dondate').val(response.donationboxe.date);
					$('#donreceiver_name').val(response.donationboxe.receiver_name);
					$('#donaddress').val(response.donationboxe.address);
					$('#donbox_no').val(response.donationboxe.box_no);
					$('#donphone').val(response.donationboxe.phone);
					$('#donprovider_name').val(response.donationboxe.provider_name);
					$('#doncomment').val(response.donationboxe.comment);
				
				
					
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


        
	});
</script>
@endsection




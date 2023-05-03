@extends('layout.erp.home')
@section('page')

<!-- Page Content -->
<div class="content container-fluid">
				
	<!-- Page Header -->
	<div class="page-header">
		<div class="row align-items-center">
			<div class="col">
				<h3 class="page-title">fazleahmadi </h3>
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
					<li class="breadcrumb-item active">fazleahmadi </li>
				</ul>
			</div>
			<div class="col-auto float-right ml-auto">
				<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_overtime"><i class="fa fa-plus"></i> Add fazleahmadi-Center</a>
			</div>
		</div>
	</div>
	<!-- /Page Header -->
	
	<!-- fazleahmadi Center Statistics -->
	<div class="row">
		<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
			<div class="stats-info">
				<h6>fazleahmadi  member</h6>
				<h4>12 <span>this month</span></h4>
			</div>
		</div>
		<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
			<div class="stats-info">
				<h6>fazleahmadi Center </h6>
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
	<!-- /fazleahmadi Center Statistics -->
	@if (session('success'))
		<div class="alert alert-success"><b>{{session('success')}}</b> </div>
	@endif
	<div class="row">
		<div class="col-md-12">
			<div class="table-responsive">
				<table class="table table-striped custom-table mb-0 datatable">
					<thead>
						<tr>
							<th>Member Name</th>
							<th>Brunch Name</th>
							<th>Member Category</th>
							<th>Designation</th>
							<th>Date</th>
							<th>Edition No To</th>
							<th>Edition No From</th>
						
							
							<th class="text-right">Actions</th>
						</tr>
					</thead>
					<tbody>
						@forelse ($fazleahmadis as $fazleahmadi)



						<tr>
							<td>{{$fazleahmadi->member_name}}</td>
							<td>{{$fazleahmadi->brunch_name}}</td>
							<td>{{$fazleahmadi->member_category}}</td>
							<td>{{$fazleahmadi->designation}}</td>
							<td>{{$fazleahmadi->date}}</td>
							<td>{{$fazleahmadi->edition_no_to}}</td>
							<td>{{$fazleahmadi->edition_no_from}}</td>
						
							<td class="text-right">
								<div class="dropdown dropdown-action">
									<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-fazanded="false"><i class="material-icons">more_vert</i></a>
									<div class="dropdown-menu dropdown-menu-right">


									


										<button type="button" value="{{$fazleahmadi->id}}" class="btn btn-success" id="fazshBtn" ><i class="bi bi-eye-fill" ></i> </button>

										<button type="button" value="{{$fazleahmadi->id}}" class="btn btn-primary" id="fazBtn" ><i class="bi bi-pencil-square" ></i> </button>

										<button type="button" value="{{$fazleahmadi->id}}" class="btn btn-warning" id="fazDbtn" ><i class="fa fa-trash-o m-r-5"></i> </button>

									</div>
								</div>
							</td>
						</tr>
					</tbody>
					@empty
						<tr><td colspan="14">No records found</td></tr>
					@endforelse
					
				</table>
				{{$fazleahmadis->links()}}

			</div>
		</div>
	</div>
</div>
<!-- /Page Content -->

<!-- Add fazleahmadi Center Modal -->
<div id="add_overtime" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add fazleahmadi Center</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="background-color: teal">
				<form action="{{route('fazleahmadis.store')}}" method="post" enctype="multipart/form-data">
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
								<label class="col-form-label">Member Id : <span class="text-danger">*</span></label>
								<select id="" class="form-control" name="cmbMemberId" required>
									<option selected>Choose...</option>
	
									@foreach ($members as $member)
									<option value="{{ $member->id }}">{{ $member->id }} | {{ $member->name }}</option>
									@endforeach
									</select>>
							</div>
						</div>	<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Member Name: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="" name="txtMember_name" placeholder="Enter " required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Member Category : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="" name="txtMember_category" placeholder="Enter " >
							</div>
						</div>	<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Phone: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="" name="txtPhone" placeholder="Enter " required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Designation : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="" name="txtDesignation" placeholder="Enter " >
							</div>
						</div>	
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Edition No To : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="" name="txtEdition_no_to" placeholder="Enter " required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Edition No Form : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="" name="txtEdition_no_from" placeholder="Enter " required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label"> Received Amount : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="" name="txtReceived_amount" placeholder="Enter " >
							</div>
						</div>	<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Money Receipt No : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="" name="txtMoney_receipt_no" placeholder="Enter " >
							</div>
						</div>	<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Edition Delivery: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="" name="txtEdition_delivery" placeholder="Enter " >
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
<!-- /Add fazleahmadi Center Modal -->

<!-- Edit fazleahmadi Center Modal -->
<div id="edit_faz" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit fazleahmadis</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="background-color: teal">
				<form action="{{url('fazleahmadi-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Brunch Id : <span class="text-danger">*</span></label>
								<input type="hidden" class="form-control" id="cmbfazId" name="cmbfazId" placeholder="Enter " required>

								<select id="fazbrunch_id" class="form-control" name="cmbBrunchId" required>
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
								<input type="text" class="form-control" id="fazbrunch_name" name="txtBrunch_name" placeholder="Enter " >
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Date : <span class="text-danger">*</span></label>
								<input type="date" class="form-control" id="fazdate" name="txtDate" placeholder="Enter " required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Member Id : <span class="text-danger">*</span></label>
								<select id="fazmember_id" class="form-control" name="cmbMemberId" required>
									<option selected>Choose...</option>
	
									@foreach ($members as $member)
									<option value="{{ $member->id }}">{{ $member->id }} | {{ $member->name }}</option>
									@endforeach
									</select>>
							</div>
						</div>	<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Member Name: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="fazmember_name" name="txtMember_name" placeholder="Enter " required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Member Category : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="fazmember_category" name="txtMember_category" placeholder="Enter " >
							</div>
						</div>	<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Phone: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="fazphone" name="txtPhone" placeholder="Enter " required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Designation : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="fazdesignation" name="txtDesignation" placeholder="Enter " >
							</div>
						</div>	
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Edition No To : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="fazedition_no_to" name="txtEdition_no_to" placeholder="Enter " required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Edition No Form : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="fazedition_no_from" name="txtEdition_no_from" placeholder="Enter " required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label"> Received Amount : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="fazreceived_amount" name="txtReceived_amount" placeholder="Enter " >
							</div>
						</div>	<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Money Receipt No : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="fazmoney_receipt_no" name="txtMoney_receipt_no" placeholder="Enter " >
							</div>
						</div>	<div class="col-sm-6">
							<div class="form-group">
								<label class="col-form-label">Edition Delivery: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="fazedition_delivery" name="txtEdition_delivery" placeholder="Enter " >
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
<!-- /Edit fazleahmadi Center Modal -->

<!-- Delete fazleahmadi Center Modal -->
<div class="modal custom-modal fade" id="delete_faz" role="dialog">
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
							
						

						<form action="{{url('delete-fazleahmadi')}}" method="post" >
									@csrf
									@method("DELETE")
									<input type="hidden" id="delete_fazId" name="d_faz">


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
<!-- /Delete fazleahmadi Center Modal -->


<!-- show padcollection Center Modal -->

<div id="show_faz" class="modal custom-modal fade" role="dialog">
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
								<div class="form-control "  id="fazSHbrunch_id"></div>
								
							</div>
						</div>
						
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Brunch Name: <span class="text-danger">*</span></label>
								<div class="form-control" id="fazSHbrunch_name"></div>
								
							</div>
						</div>
						
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Date : <span class="text-danger">*</span></label>
								<div class="form-control" id="fazSHdate"></div>
								
							</div>
						</div>
					
						
					
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Member_id : <span class="text-danger">*</span></label>
								<div class="form-control" id="fazSHmember_id"></div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb"> Member Name: <span class="text-danger">*</span></label>
								<div class="form-control" id="fazSHmember_name"></div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb"> Phone: <span class="text-danger">*</span></label>
								<div class="form-control" id="fazSHphone"></div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb"> Member_category: <span class="text-danger">*</span></label>
								<div class="form-control" id="fazSHmember_category"></div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Designation: <span class="text-danger">*</span></label>
								<div class="form-control" id="fazSHdesignation"></div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Date : <span class="text-danger">*</span></label>
								<div class="form-control" id="fazSHdate"></div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Edition_no_from : <span class="text-danger">*</span></label>
								<div class="form-control" id="fazSHedition_no_from"></div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Edition_no_to : <span class="text-danger">*</span></label>
								<div class="form-control" id="fazSHedition_no_to"></div>
								
							</div>
						</div>
						
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Received_amount : <span class="text-danger">*</span></label>
								<div class="form-control" id="fazSHreceived_amount"></div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Money_receipt_no : <span class="text-danger">*</span></label>
								<div class="form-control" id="fazSHmoney_receipt_no"></div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Edition_delivery : <span class="text-danger">*</span></label>
								<div class="form-control" id="fazSHedition_delivery"></div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">comment: <span class="text-danger">*</span></label>
								<div class="form-control" id="fazSHcomment"></div>
								
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
        $(document).on('click','#fazDbtn',function(){
			var faz_id=$(this).val();
            // alert(member_id);
			$('#delete_faz').modal('show');
			$('#delete_fazId').val(faz_id);
		});



		$(document).on('click','#fazBtn',function(){
			//  alert("ok");

			var faz_id=$(this).val();
			// alert(invi_id);
			$('#edit_faz').modal('show');
			$.ajax({
				type: "GET",
				url: "/edit-fazleahmadi/"+faz_id,
				success:function(response){
					// console.log(response.fazleahmadi.brunch_name);
					$('#cmbfazId').val(faz_id);
					$('#fazmember_id').val(response.fazleahmadi.member_id);


					$('#fazmember_name').val(response.fazleahmadi.member_name);
					$('#fazphone').val(response.fazleahmadi.phone);
					$('#fazbrunch_id').val(response.fazleahmadi.brunch_id);
					$('#fazbrunch_name').val(response.fazleahmadi.brunch_name);
					$('#fazmember_category').val(response.fazleahmadi.member_category);
					$('#fazdesignation').val(response.fazleahmadi.designation);
					$('#fazdate').val(response.fazleahmadi.date);
					$('#fazedition_no_to').val(response.fazleahmadi.edition_no_to);
					$('#fazedition_no_from').val(response.fazleahmadi.edition_no_from);
					$('#fazreceived_amount').val(response.fazleahmadi.received_amount);
					$('#fazmoney_receipt_no').val(response.fazleahmadi.money_receipt_no);
					$('#fazedition_delivery').val(response.fazleahmadi.edition_delivery);
					
				
					
				}
			});
		});

		$('#fazbrunch_id').on('change', function () {
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
		// $('#txtCountry').on('change', function () {
		// 	var idState = this.value;
		// 	$("#txtCity").html('');
		// 	$.ajax({
		// 		url: "{{url('api/fetch-cities')}}",
		// 		type: "POST",
		// 		data: {
		// 			country_id: idState,
		// 			_token: '{{csrf_token()}}'
		// 		},
		// 		dataType: 'json',
		// 		success: function (res) {
		// 			$('#txtCity').html('<option value="">Select City</option>');
		// 			$.each(res.cities, function (key, value) {
		// 				$("#txtCity").append('<option value="' + value
		// 					.id + '">' + value.name + '</option>');
		// 			});
		// 		}
		// 	});
		// });

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

		$(document).on('click','#fazshBtn',function(){
			//  alert("ok");

			var fazsh_id=$(this).val();
			// alert(invi_id);
			$('#show_faz').modal('show');
			$.ajax({
				type: "GET",
				url: "/show-fazleahmadi/"+fazsh_id,
				success:function(response){
					// console.log(response.padcollection.brunch_name);
					$('#cmbincSHId').html(fazsh_id);
					

					$('#fazSHbrunch_id').html(response.sfazleahmadi.brunch_id);
					$('#fazSHbrunch_name').html(response.sfazleahmadi.brunch_name);
					$('#fazSHmember_id').html(response.sfazleahmadi.member_id);
					$('#fazSHmember_name').html(response.sfazleahmadi.member_name);
					$('#fazSHphone').html(response.sfazleahmadi.phone);
					$('#fazSHmember_category').html(response.sfazleahmadi.member_category);
					$('#fazSHdesignation').html(response.sfazleahmadi.designation);
					$('#fazSHdate').html(response.sfazleahmadi.date);
					$('#fazSHedition_no_to').html(response.sfazleahmadi.edition_no_to);
					$('#fazSHedition_no_from').html(response.sfazleahmadi.edition_no_from);
					$('#fazSHreceived_amount').html(response.sfazleahmadi.received_amount);
					$('#fazSHmoney_receipt_no').html(response.sfazleahmadi.money_receipt_no);
					$('#fazSHedition_delivery').html(response.sfazleahmadi.edition_delivery);

					
				
					
				}
			});
		});
	});
</script>
@endsection



@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{route('complexpromises.create')}}">Create</a><table class='table'>
<tr>
	<th>Id</th>
	<th>Brunch Id</th>
	<th>Brunche Name</th>
	<th>Mamber Id</th>
	<th>Member Name</th>
	<th>Date</th>
	<th>Donar Name</th>
	<th>Category</th>
	<th>Animale</th>
	<th>Medium</th>
	<th>Qty</th>
	<th>Created At</th>
	<th>Updated At</th>
	<th>Deleted At</th>

</tr>
@forelse ($complexpromises as $complexpromise)
<tr>
	<td>{{$complexpromise->id}}</td>
	<td>{{$complexpromise->brunch_id}}</td>
	<td>{{$complexpromise->brunche_name}}</td>
	<td>{{$complexpromise->mamber_id}}</td>
	<td>{{$complexpromise->member_name}}</td>
	<td>{{$complexpromise->date}}</td>
	<td>{{$complexpromise->donar_name}}</td>
	<td>{{$complexpromise->category}}</td>
	<td>{{$complexpromise->animale}}</td>
	<td>{{$complexpromise->medium}}</td>
	<td>{{$complexpromise->qty}}</td>
	<td>{{$complexpromise->created_at}}</td>
	<td>{{$complexpromise->updated_at}}</td>
	<td>{{$complexpromise->deleted_at}}</td>

	<td>
	<div>
	<form action="{{route('complexpromises.destroy',$complexpromise->id)}}" method="post" >
	<a class='btn btn-primary' href="{{route('complexpromises.edit',$complexpromise->id)}}">Edit<a>
	<a class='btn btn-info' href="{{route('complexpromises.show',$complexpromise->id)}}">Show<a>
		@csrf
		@method("DELETE")
		<input class='btn btn-danger' type="submit" name="btnDelete" class="btnDelete" data-id="{{$complexpromise->id}}"  value="Delete" />
	</form>
	</div>
	</td>
</tr>
@empty
<tr><td colspan="14">No records found</td></tr>
@endforelse
</table>
{{$complexpromises->links()}}


<style>
	#labelb{
		color: rgb(255, 242, 128);
		font-size: 20px;
	}
	.form-control{
		color: rgb(0, 0, 0);
	}
</style>

<!-- Page Content -->
<div class="content container-fluid">
				
	<!-- Page Header -->
	<div class="page-header">
		<div class="row align-items-center">
			<div class="col">
				<h2 class="page-title">complexpromise </h2>
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
					<li class="breadcrumb-item active">complexpromise </li>
				</ul>
			</div>
			<div class="col-auto float-right ml-auto">
				<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_overtime"><i class="fa fa-plus"></i> Add complexpromise-Center</a>
			</div>
		</div>
	</div>
	<!-- /Page Header -->
	
	<!-- complexpromise Center Statistics -->
	<div class="row">
		<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
			<div class="stats-info">
				<h6>complexpromise  member</h6>
				<h4>12 <span>this month</span></h4>
			</div>
		</div>
		<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
			<div class="stats-info">
				<h6>complexpromise Center </h6>
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
	<!-- /complexpromise Center Statistics -->
	@if (session('success'))
		<div class="alert alert-success"><b>{{session('success')}}</b> </div>
	@endif
	<div class="row">
		<div class="col-md-12">
			<div class="table-responsive">
				<table class="table display nowrap" id="example">
					<thead>
						<tr>
							<th>Brunche Name</th>
							<th>Member Name</th>
							<th>Date</th>
							<th>Donar Name</th>
							<th>Category</th>
							<th>Animale</th>
							<th>Medium</th>
							<th>Qty</th>
												
							
							<th class="text-right">Actions</th>
						</tr>
					</thead>
					<tbody>
						@forelse ($complexpromises as $complexpromise)

						<tr>
							<td>{{$complexpromise->brunch_id}}| {{$complexpromise->brunch_name}}</td>
							<td> {{$complexpromise->cp_name}}</td>
							<td>{{$complexpromise->date}}</td>
							<td>{{$complexpromise->cp_name}}</td>
							<td>{{$complexpromise->deg}}</td>
							<td>{{$complexpromise->promise}}</td>
							<td>{{$complexpromise->paid}}</td>
							<td>{{$complexpromise->comment}}</td>
						
							<td class="text-right">
								<div class="dropdown dropdown-action">
									<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
									<div class="dropdown-menu dropdown-menu-right">

									
										<button type="button" value="{{$complexpromise->id}}" class="btn btn-success" id="complexpromiseshBtn" ><i class="bi bi-eye-fill"></i> </button>


										<button type="button" value="{{$complexpromise->id}}" class="btn btn-primary" id="complexpromiseBtn" ><i class="bi bi-pencil-square" ></i> </button>

										<button type="button" value="{{$complexpromise->id}}" class="btn btn-warning" id="complexpromiseDbtn" ><i class="fa fa-trash-o m-r-5"></i> </button>

									</div>
								</div>
							</td>
						</tr>
					</tbody>
					@empty
						<tr><td colspan="14">No records found</td></tr>
					@endforelse
					
				</table>
				{{$complexpromises->links()}}

			</div>
		</div>
	</div>
</div>
<!-- /Page Content -->

<!-- Add complexpromise Center Modal -->
<div id="add_overtime" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add complexpromise </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="background-color: teal">
				<form action="{{route('complexpromises.store')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Brunch Code / শাখা: <span class="text-danger">*</span></label>
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
						
							
							{{-- <div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Mamber Id : <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="Smamber_id" name="cmbMamberId" placeholder="Enter Speakers Name" required> 
								</div>
							</div>
					
						
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label"> Member Name : <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="Smember_name" name="txtMember_name" placeholder="Email" required>
								</div>
							</div>
						 --}}
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Date  :</label>
									<input type="date" class="form-control" id="" name="txtDate" placeholder="Enter Address" required>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Donar Name :</label>
									<input type="text" class="form-control" id="" name="txtCp_name" placeholder="Enter Address" required>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label"> Designation : <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="" name="txtDeg" placeholder="Enter Provider" required>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Promise : <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="" name="txtPromise" placeholder="Enter Provider" required>
								</div>
							</div>	<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Paid: <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="" name="txtPaid" placeholder="Enter Designation" required>
								</div>
							</div>	
							
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Comment : <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="" name="txtComment" placeholder="Enter Bg" required>
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
<!-- /Add complexpromise Center Modal -->

<!-- Edit complexpromise Center Modal -->
<div id="edit_complexpromise" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit complexpromises</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="background-color: teal">
				<form action="{{url('complexpromise-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
				
					<div class="row">
						<div class="col-sm-4">
							<div class="form-group">
								<input type="hidden" class="form-control" id="cmbcomplexpromiseId" name="cmbcomplexpromiseId" required>
								<label class="col-form-label">Brunch Code / শাখা: <span class="text-danger">*</span></label>
								<select id="ScmbBrunchId" class="form-control" name="cmbBrunchId" required>
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
								<input type="text" class="form-control" id="SBrunch_name" name="txtBrunche_name" required>
								
							</div>
						</div>
						
							
						{{-- <div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Mamber Id : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="Smamber_id" name="cmbMamberId" placeholder="Enter Speakers Name" required> 
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Member Name : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="Smember_name" name="txtMember_name" placeholder="Enter Speakers Name" required> 
							</div>
						</div> --}}
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Date : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="Scdate" name="txtDate" placeholder="Enter Speakers Name" required> 
							</div>
						</div>
					
					
						
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Donar Name :</label>
								<input type="date" class="form-control" id="Scp_name" name="txtCp_name" placeholder="Enter Address" required>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Designation : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="Sdeg" name="txtDeg" placeholder="Enter Provider" required>
							</div>
						</div>	<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Promise : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="Spromise" name="txtPromise" placeholder="Enter Designation" required>
							</div>
						</div>	
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Paid : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="Spaid" name="txtPaid" placeholder="Enter Bg" required>
							</div>
						</div>	
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Comment : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="Scomment" name="txtComment" placeholder="Enter Bg" required>
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
<!-- /Edit complexpromise Center Modal -->

<!-- Delete complexpromise Center Modal -->
<div class="modal custom-modal fade" id="delete_complexpromise" role="dialog">
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
							
						

						<form action="{{url('delete-complexpromise')}}" method="post" >
									@csrf
									@method("DELETE")
									<input type="hidden" id="delete_complexpromiseId" name="d_complexpromise">


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
<!-- /Delete complexpromise Center Modal -->

<!-- show complexpromise Center Modal -->


<div id="show_complexpromise" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Show complexpromisench Details</h5>
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
								<div class="form-control "  id="Shbrunch_id"></div>
								
							</div>
						</div>
						
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Brunch Name: <span class="text-danger">*</span></label>
								<div class="form-control" id="Shbrunch_name"></div>
								
							</div>
						</div>
						
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">P Member Name : <span class="text-danger">*</span></label>
								<div class="form-control" id="Shcp_name"></div>
								
							</div>
						</div>
					
						
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Date : <span class="text-danger">*</span></label>
								<div class="form-control" id="Shdate"></div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Designation: <span class="text-danger">*</span></label>
								<div class="form-control" id="Shdeg"></div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Complex Promise: <span class="text-danger">*</span></label>
								<div class="form-control" id="Shpromise"></div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Paid: <span class="text-danger">*</span></label>
								<div class="form-control" id="Shpaid"></div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">comment: <span class="text-danger">*</span></label>
								<div class="form-control" id="Shcomment"></div>
								
							</div>
						</div>
						
					</div>
							
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /show complexpromise Center Modal -->
<script>
	$(document).ready(function(){
        $(document).on('click','#complexpromiseDbtn',function(){
			var complexpromise_id=$(this).val();
            // alert(member_id);
			$('#delete_complexpromise').modal('show');
			$('#delete_complexpromiseId').val(complexpromise_id);
		});



		$(document).on('click','#complexpromiseBtn',function(){
			//  alert("ok");

			var complexpromise_id=$(this).val();
			// alert(complexpromise_id);
			$('#edit_complexpromise').modal('show');
			$.ajax({
				type: "GET",
				url: "/edit-complexpromise/"+complexpromise_id,
				success:function(response){
					console.log(response.complexpromise.date);
					$('#cmbcomplexpromiseId').val(complexpromise_id);
					
					$('#ScmbBrunchId').val(response.complexpromise.brunch_id);
					$('#SBrunch_name').val(response.complexpromise.brunch_name);
					
					$('#Scdate').val(response.complexpromise.date);
					$('#Scp_name').val(response.complexpromise.cp_name);
					$('#Sdeg').val(response.complexpromise.deg);
					$('#Spromise').val(response.complexpromise.promise);
					$('#Spaid').val(response.complexpromise.paid);
					$('#Scomment').val(response.complexpromise.comment);
									
					
					
				}
			});
		});

		$(document).on('click','#complexpromiseshBtn',function(){
			//  alert("ok");

			var complexpromisesh_id=$(this).val();
			// alert(invi_id);
			$('#show_complexpromise').modal('show');
			$.ajax({
				type: "GET",
				url: "/show-complexpromise/"+complexpromisesh_id,
				success:function(response){
					$('#cmbcomplexpromiseSHId').html(complexpromisesh_id);

					$('#Shbrunch_id').html(response.scomplexpromise.brunch_id);
					$('#Shbrunch_name').html(response.scomplexpromise.brunch_name);
				
					$('#Shdate').html(response.scomplexpromise.date);
				
					$('#Shcp_name').html(response.scomplexpromise.cp_name);
					
					$('#Shdeg').html(response.scomplexpromise.deg);
					$('#Shpromise').html(response.scomplexpromise.promise);
					$('#Shpaid').html(response.scomplexpromise.paid);
					$('#Shcomment').html(response.scomplexpromise.comment);
				
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

<script>
	$(document).ready(function() {
		$('#example').DataTable( {
			dom: 'Bfrtip',
			buttons: [
				'copy', 'csv', 'excel', 'pdf', 'print'
			]
		} );
	} );
</script>
@endsection











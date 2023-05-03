@extends('layout.erp.home')
@section('page')



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
				<h2 class="page-title">Jakat </h2>
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
					<li class="breadcrumb-item active">jakat </li>
				</ul>
			</div>
			<div class="col-auto float-right ml-auto">
				<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_overtime"><i class="fa fa-plus"></i> Add jakat-Center</a>
			</div>
		</div>
	</div>
	<!-- /Page Header -->
	
	<!-- jakat Center Statistics -->
	<div class="row">
		<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
			<div class="stats-info">
				<h6>jakat  member</h6>
				<h4>12 <span>this month</span></h4>
			</div>
		</div>
		<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
			<div class="stats-info">
				<h6>jakat Center </h6>
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
	<!-- /jakat Center Statistics -->
	@if (session('success'))
		<div class="alert alert-success"><b>{{session('success')}}</b> </div>
	@endif
	<div class="row">
		<div class="col-md-12">
			<div class="table-responsive">
				<table class="table display nowrap" id="example">
					<thead>
						<tr>
							<th>Brunch Name</th>
							<th>Donor</th>
							<th>Category</th>
							<th>Mediam</th>
							<th>Amount</th>
							<th>Comment</th>

												
							
							<th class="text-right">Actions</th>
						</tr>
					</thead>
					<tbody>
						@forelse ($jakats as $jakat)

						<tr>
							<td>{{$jakat->brunch_id}}| {{$jakat->brunch_name}}</td>
							<td>{{$jakat->donor}}</td>
							<td>{{$jakat->category}}</td>
							<td>{{$jakat->mediam}}</td>
							<td>{{$jakat->amount}}</td>
							<td>{{$jakat->comment}}</td>
						
							<td class="text-right">
								<div class="dropdown dropdown-action">
									<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
									<div class="dropdown-menu dropdown-menu-right">

									
										<button type="button" value="{{$jakat->id}}" class="btn btn-success" id="jakatshBtn" ><i class="bi bi-eye-fill"></i> </button>


										<button type="button" value="{{$jakat->id}}" class="btn btn-primary" id="jakatBtn" ><i class="bi bi-pencil-square" ></i> </button>

										<button type="button" value="{{$jakat->id}}" class="btn btn-warning" id="jakatDbtn" ><i class="fa fa-trash-o m-r-5"></i> </button>

									</div>
								</div>
							</td>
						</tr>
					</tbody>
					@empty
						<tr><td colspan="14">No records found</td></tr>
					@endforelse
					
				</table>
				{{$jakats->links()}}

			</div>
		</div>
	</div>
</div>
<!-- /Page Content -->

<!-- Add jakat Center Modal -->
<div id="add_overtime" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add jakat </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="background-color: teal">
				<form action="{{route('jakats.store')}}" method="post" enctype="multipart/form-data">
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
						
							
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Donar: <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="" name="txtDonor" placeholder="Enter Donar Name" required> 
								</div>
							</div>
							
						
							
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Category :</label>
									<input type="text" class="form-control" id="" name="txtCategory" placeholder="Enter Address" required>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Mediam :</label>
									<input type="text" class="form-control" id="" name="txtMediam" placeholder="Enter Address" required>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Amount :</label>
									<input type="text" class="form-control" id="" name="txtAmount" placeholder="Enter Address" required>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Comment: <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="" name="txtComment" placeholder="Enter Provider" required>
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
<!-- /Add jakat Center Modal -->

<!-- Edit jakat Center Modal -->
<div id="edit_jakat" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit jakats</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="background-color: teal">
				<form action="{{url('jakat-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
				
					<div class="row">
						<div class="col-sm-4">
							<div class="form-group">
								<input type="hidden" class="form-control" id="cmbjakatId" name="cmbjakatId" required>


								<label class="col-form-label">Brunch Code / শাখা: <span class="text-danger">*</span></label>
								<select id="ecmbBrunchId" class="form-control" name="cmbBrunchId" required>
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
								<input type="text" class="form-control" id="eBrunch_name" name="txtBrunch_name" required>
								
							</div>
						</div>
						
							
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Donar: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="Edonor" name="txtDonor" placeholder="Enter Speakers Name" required> 
							</div>
						</div>
						
					
						
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Category :</label>
								<input type="text" class="form-control" id="Scategory" name="txtCategory" placeholder="Enter Address" required>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Mediam :</label>
								<input type="text" class="form-control" id="Smediam" name="txtMediam" placeholder="Enter Address" required>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Amount :</label>
								<input type="text" class="form-control" id="Samount" name="txtAmount" placeholder="Enter Address" required>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Comment: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="Scomment" name="txtComment" placeholder="Enter Provider" required>
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
<!-- /Edit jakat Center Modal -->

<!-- Delete jakat Center Modal -->
<div class="modal custom-modal fade" id="delete_jakat" role="dialog">
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
							
						

						<form action="{{url('delete-jakat')}}" method="post" >
									@csrf
									@method("DELETE")
									<input type="hidden" id="delete_jakatId" name="d_jakat">


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
<!-- /Delete jakat Center Modal -->

<!-- show jakat Center Modal -->


<div id="show_jakat" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Show jakatnch Details</h5>
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
								<label class="col-form-label" id="labelb">Donor Name: <span class="text-danger">*</span></label>
								<div class="form-control" id="shdonor"></div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Category: <span class="text-danger">*</span></label>
								<div class="form-control" id="shcategory"></div>
								
							</div>
						</div>
					
						
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Mediam : <span class="text-danger">*</span></label>
								<div class="form-control" id="shmediam"></div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Amount : <span class="text-danger">*</span></label>
								<div class="form-control" id="shamount"></div>
								
							</div>
						</div>
				
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Comment: <span class="text-danger">*</span></label>
								<div class="form-control" id="Shcomment"></div>
								
							</div>
						</div>
						
					</div>
							
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /show jakat Center Modal -->
<script>
	$(document).ready(function(){
        $(document).on('click','#jakatDbtn',function(){
			var jakat_id=$(this).val();
            // alert(member_id);
			$('#delete_jakat').modal('show');
			$('#delete_jakatId').val(jakat_id);
		});



		$(document).on('click','#jakatBtn',function(){
			//  alert("ok");

			var jakat_id=$(this).val();
			// alert(jakat_id);
			$('#edit_jakat').modal('show');
			$.ajax({
				type: "GET",
				url: "/edit-jakat/"+jakat_id,
				success:function(response){
					// console.log(response.jakat.brunch_id);
	
					
					$('#cmbjakatId').val(jakat_id);

					$('#ecmbBrunchId').val(response.jakat.brunch_id);
					

					$('#eBrunch_name').val(response.jakat.brunch_name);
					$('#Edonor').val(response.jakat.donor);
					
					$('#Scategory').val(response.jakat.category);
					$('#Smediam').val(response.jakat.mediam);
					$('#Samount').val(response.jakat.amount);
					$('#Scomment').val(response.jakat.comment);
					
				}
			});
		});

		$(document).on('click','#jakatshBtn',function(){
			//  alert("ok");

			var jakatsh_id=$(this).val();
			// alert(invi_id);
			$('#show_jakat').modal('show');
			$.ajax({
				type: "GET",
				url: "/show-jakat/"+jakatsh_id,
				success:function(response){
					$('#cmbjakatSHId').html(jakatsh_id);

						$('#Shbrunch_id').html(response.sjakat.brunch_id);


						$('#Shbrunch_name').html(response.sjakat.brunch_name);

						$('#shdonor').html(response.sjakat.donor);
						$('#shcategory').html(response.sjakat.category);
						$('#shmediam').html(response.sjakat.mediam);
						$('#shamount').html(response.sjakat.amount);

						$('#Shcomment').html(response.sjakat.comment);

					
				
					
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










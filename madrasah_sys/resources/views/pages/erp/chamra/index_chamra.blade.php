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
				<h2 class="page-title">Chamra Collection </h2>
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
					<li class="breadcrumb-item active">chamra </li>
				</ul>
			</div>
			<div class="col-auto float-right ml-auto">
				<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_overtime"><i class="fa fa-plus"></i> Add Chamra</a>
			</div>
		</div>
	</div>
	<!-- /Page Header -->
	
	<!-- chamra Center Statistics -->
	<div class="row">
		<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
			<div class="stats-info">
				<h6>chamra  member</h6>
				<h4>12 <span>this month</span></h4>
			</div>
		</div>
		<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
			<div class="stats-info">
				<h6>chamra Center </h6>
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
	<!-- /chamra Center Statistics -->
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
						@forelse ($chamras as $chamra)

						<tr>
							<td>{{$chamra->brunch_id}}| {{$chamra->brunche_name}}</td>
							<td>{{$chamra->mamber_id}} | {{$chamra->member_name}}</td>
							<td>{{$chamra->date}}</td>
							<td>{{$chamra->donar_name}}</td>
							<td>{{$chamra->category}}</td>
							<td>{{$chamra->animale}}</td>
							<td>{{$chamra->medium}}</td>
							<td>{{$chamra->qty}}</td>
						
							<td class="text-right">
								<div class="dropdown dropdown-action">
									<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
									<div class="dropdown-menu dropdown-menu-right">

									
										<button type="button" value="{{$chamra->id}}" class="btn btn-success" id="chamrashBtn" ><i class="bi bi-eye-fill"></i> </button>


										<button type="button" value="{{$chamra->id}}" class="btn btn-primary" id="chamraBtn" ><i class="bi bi-pencil-square" ></i> </button>

										<button type="button" value="{{$chamra->id}}" class="btn btn-warning" id="chamraDbtn" ><i class="fa fa-trash-o m-r-5"></i> </button>

									</div>
								</div>
							</td>
						</tr>
					</tbody>
					@empty
						<tr><td colspan="14">No records found</td></tr>
					@endforelse
					
				</table>
				{{$chamras->links()}}

			</div>
		</div>
	</div>
</div>
<!-- /Page Content -->

<!-- Add chamra Center Modal -->
<div id="add_overtime" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add chamra </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="background-color: teal">
				<form action="{{route('chamras.store')}}" method="post" enctype="multipart/form-data">
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
								<input type="text" class="form-control" id="ooBrunch_name" name="txtBrunche_name" required>
								
							</div>
						</div>
						
							
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Mamber Id : <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="" name="cmbMamberId" placeholder="Enter Speakers Name" required> 
								</div>
							</div>
					
						
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label"> Member Name : <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="" name="txtMember_name" placeholder="Email" required>
								</div>
							</div>
						
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Date  :</label>
									<input type="date" class="form-control" id="" name="txtDate" placeholder="Enter Address" required>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Donar Name :</label>
									<input type="text" class="form-control" id="" name="txtDonar_name" placeholder="Enter Address" required>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label"> Category: <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="" name="txtCategory" placeholder="Enter Provider" required>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Animale Category: <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="" name="txtAnimale" placeholder="Enter Provider" required>
								</div>
							</div>	<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Medium: <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="" name="txtMedium" placeholder="Enter Designation" required>
								</div>
							</div>	
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Qty : <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="" name="txtQty" placeholder="Enter Bg" required>
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
<!-- /Add chamra Center Modal -->

<!-- Edit chamra Center Modal -->
<div id="edit_chamra" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit chamras</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="background-color: teal">
				<form action="{{url('chamra-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
				
					<div class="row">
						<div class="col-sm-4">
							<div class="form-group">
								<input type="hidden" class="form-control" id="cmbchamraId" name="cmbchamraId" required>
								<label class="col-form-label">Brunch Code / শাখা: <span class="text-danger">*</span></label>
								<select id="chcmbBrunchId" class="form-control" name="cmbBrunchId" required>
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
								<input type="text" class="form-control" id="chamrabrunch_name" name="txtBrunche_name" required>
								
							</div>
						</div>
						
							
						<div class="col-sm-4">
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
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Category : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="Scategory" name="Scategory" placeholder="Enter Speakers Name" required> 
							</div>
						</div>
					
					
						
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Donar Name :</label>
								<input type="text" class="form-control" id="Sdonar_name" name="txtDonar_name" placeholder="Enter Address" required>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Animale Category: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="Sanimale" name="txtAnimale" placeholder="Enter Provider" required>
							</div>
						</div>	<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Medium: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="Smedium" name="txtMedium" placeholder="Enter Designation" required>
							</div>
						</div>	
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Qty : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="Sqty" name="txtQty" placeholder="Enter Bg" required>
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
<!-- /Edit chamra Center Modal -->

<!-- Delete chamra Center Modal -->
<div class="modal custom-modal fade" id="delete_chamra" role="dialog">
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
							
						

						<form action="{{url('delete-chamra')}}" method="post" >
									@csrf
									@method("DELETE")
									<input type="hidden" id="delete_chamraId" name="d_chamra">


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
<!-- /Delete chamra Center Modal -->

<!-- show chamra Center Modal -->


<div id="show_chamra" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Show chamranch Details</h5>
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
								<label class="col-form-label" id="labelb">Member id : <span class="text-danger">*</span></label>
								<div class="form-control" id="Shmamber_id"></div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Member Name : <span class="text-danger">*</span></label>
								<div class="form-control" id="Shmember_name"></div>
								
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
								<label class="col-form-label" id="labelb">Donar Name: <span class="text-danger">*</span></label>
								<div class="form-control" id="Shdonar_name"></div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Category: <span class="text-danger">*</span></label>
								<div class="form-control" id="Shcategory"></div>
								
							</div>
						</div>
						
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Animale: <span class="text-danger">*</span></label>
								<div class="form-control" id="Shanimale"></div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Medium: <span class="text-danger">*</span></label>
								<div class="form-control" id="Shmedium"></div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Qty: <span class="text-danger">*</span></label>
								<div class="form-control" id="Shqty"></div>
								
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
<!-- /show chamra Center Modal -->
<script>
	$(document).ready(function(){
        $(document).on('click','#chamraDbtn',function(){
			var chamra_id=$(this).val();
            // alert(member_id);
			$('#delete_chamra').modal('show');
			$('#delete_chamraId').val(chamra_id);
		});



		$(document).on('click','#chamraBtn',function(){
			//  alert("ok");

			var chamra_id=$(this).val();
			// alert(chamra_id);
			$('#edit_chamra').modal('show');
			$.ajax({
				type: "GET",
				url: "/edit-chamra/"+chamra_id,
				success:function(response){
					// console.log(response.chamra.brunch_id);
					$('#cmbchamraId').val(chamra_id);
					

					$('#chcmbBrunchId').val(response.chamra.brunch_id);
					

					$('#chamrabrunch_name').val(response.chamra.brunche_name);
				
					$('#Smamber_id').val(response.chamra.mamber_id);
					$('#Smember_name').val(response.chamra.member_name);
					$('#Sdonar_name').val(response.chamra.donar_name);
					$('#Scategory').val(response.chamra.category);
					$('#Sanimale').val(response.chamra.animale);
					$('#Smedium').val(response.chamra.medium);
					$('#Sqty').val(response.chamra.qty);
					$('#Scomment').val(response.chamra.comment);
					
				
					
				}
			});
		});

		$(document).on('click','#chamrashBtn',function(){
			//  alert("ok");

			var chamrash_id=$(this).val();
			// alert(invi_id);
			$('#show_chamra').modal('show');
			$.ajax({
				type: "GET",
				url: "/show-chamra/"+chamrash_id,
				success:function(response){
					$('#cmbchamraSHId').html(chamrash_id);

					$('#Shbrunch_id').html(response.schamra.brunch_id);
					

					$('#Shbrunch_name').html(response.schamra.brunche_name);
				
					$('#Shmamber_id').html(response.schamra.mamber_id);
					$('#Shmember_name').html(response.schamra.member_name);
					$('#Shdate').html(response.schamra.date);

					$('#Shdonar_name').html(response.schamra.donar_name);
					$('#Shcategory').html(response.schamra.category);
					$('#Shanimale').html(response.schamra.animale);
					$('#Shmedium').html(response.schamra.medium);
					$('#Shqty').html(response.schamra.qty);
					$('#Shcomment').html(response.schamra.comment);

					
				
					
				}
			});
		});

		$("#chcmbBrunchId").on("change",function(){
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










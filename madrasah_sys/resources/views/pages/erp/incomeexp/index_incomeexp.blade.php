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
				<h2 class="page-title">incomeexp </h2>
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
					<li class="breadcrumb-item active">incomeexp </li>
				</ul>
			</div>
			<div class="col-auto float-right ml-auto">
				<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_overtime"><i class="fa fa-plus"></i> Add incomeexp-Center</a>
			</div>
		</div>
	</div>
	<!-- /Page Header -->
	
	<!-- incomeexp Center Statistics -->
	<div class="row">
		<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
			<div class="stats-info">
				<h6>incomeexp  member</h6>
				<h4>12 <span>this month</span></h4>
			</div>
		</div>
		<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
			<div class="stats-info">
				<h6>incomeexp Center </h6>
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
	<!-- /incomeexp Center Statistics -->
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
							<th>E Date</th>
							<th>Income</th>
							<th>Expanse</th>
							<th>Comment</th>
												
							
							<th class="text-right">Actions</th>
						</tr>
					</thead>
					<tbody>
						@forelse ($incomeexps as $incomeexp)

						<tr>
							<td>{{$incomeexp->brunch_code}}| {{$incomeexp->brunch_name}}</td>
							<td>{{$incomeexp->e_date}}</td>
							<td>{{$incomeexp->income}}</td>
							<td>{{$incomeexp->expanse}}</td>
							<td>{{$incomeexp->comment}}</td>
						
							<td class="text-right">
								<div class="dropdown dropdown-action">
									<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
									<div class="dropdown-menu dropdown-menu-right">

									
										<button type="button" value="{{$incomeexp->id}}" class="btn btn-success" id="incomeexpshBtn" ><i class="bi bi-eye-fill"></i> </button>


										<button type="button" value="{{$incomeexp->id}}" class="btn btn-primary" id="incomeexpBtn" ><i class="bi bi-pencil-square" ></i> </button>

										<button type="button" value="{{$incomeexp->id}}" class="btn btn-warning" id="incomeexpDbtn" ><i class="fa fa-trash-o m-r-5"></i> </button>

									</div>
								</div>
							</td>
						</tr>
					</tbody>
					@empty
						<tr><td colspan="14">No records found</td></tr>
					@endforelse
					
				</table>
				{{$incomeexps->links()}}

			</div>
		</div>
	</div>
</div>
<!-- /Page Content -->

<!-- Add incomeexp Center Modal -->
<div id="add_overtime" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add incomeexp </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="background-color: teal">
				<form action="{{route('incomeexps.store')}}" method="post" enctype="multipart/form-data">
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
									<label class="col-form-label">Transtion Date: <span class="text-danger">*</span></label>
									<input type="date" class="form-control" id="" name="txtE_date" placeholder="Enter Speakers Name" required> 
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label"> Income  : <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="" name="txtIncome" placeholder="Email" required>
								</div>
							</div>
						
							
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Expanse :</label>
									<input type="text" class="form-control" id="" name="txtExpanse" placeholder="Enter Address" required>
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
<!-- /Add incomeexp Center Modal -->

<!-- Edit incomeexp Center Modal -->
<div id="edit_incomeexp" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit incomeexps</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="background-color: teal">
				<form action="{{url('incomeexp-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
				
					<div class="row">
						<div class="col-sm-4">
							<div class="form-group">
								<input type="hidden" class="form-control" id="cmbincomeexpId" name="cmbincomeexpId" required>
								<label class="col-form-label">Brunch Code / শাখা: <span class="text-danger">*</span></label>
								<select id="Sbrunch_id" class="form-control" name="cmbBrunchId" required>
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
								<input type="text" class="form-control" id="Sbrunch_name" name="txtBrunch_name" required>
								
							</div>
						</div>
						
							
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Trancsion Date: <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="se_date" name="txtE_date" placeholder="Enter Speakers Name" required> 
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label"> Income: <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="sincome" name="txtIncome" placeholder="Email" required>
								</div>
							</div>
						
							
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Expanse :</label>
									<input type="text" class="form-control" id="sexpanse" name="txtExpanse" placeholder="Enter Address" required>
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
<!-- /Edit incomeexp Center Modal -->

<!-- Delete incomeexp Center Modal -->
<div class="modal custom-modal fade" id="delete_incomeexp" role="dialog">
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
							
						

						<form action="{{url('delete-incomeexp')}}" method="post" >
									@csrf
									@method("DELETE")
									<input type="hidden" id="delete_incomeexpId" name="d_incomeexp">


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
<!-- /Delete incomeexp Center Modal -->

<!-- show incomeexp Center Modal -->


<div id="show_incomeexp" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Show incomeexpnch Details</h5>
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
								<label class="col-form-label" id="labelb">Transion date: <span class="text-danger">*</span></label>
								<div class="form-control" id="she_date"></div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Income: <span class="text-danger">*</span></label>
								<div class="form-control" id="shincome"></div>
								
							</div>
						</div>
					
						
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Expanse : <span class="text-danger">*</span></label>
								<div class="form-control" id="shexpanse"></div>
								
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
<!-- /show incomeexp Center Modal -->
<script>
	$(document).ready(function(){
        $(document).on('click','#incomeexpDbtn',function(){
			var incomeexp_id=$(this).val();
            // alert(member_id);
			$('#delete_incomeexp').modal('show');
			$('#delete_incomeexpId').val(incomeexp_id);
		});



		$(document).on('click','#incomeexpBtn',function(){
			//  alert("ok");

			var incomeexp_id=$(this).val();
			// alert(incomeexp_id);
			$('#edit_incomeexp').modal('show');
			$.ajax({
				type: "GET",
				url: "/edit-incomeexp/"+incomeexp_id,
				success:function(response){
					// console.log(response.incomeexp.brunch_id);
	
					
					$('#cmbincomeexpId').val(incomeexp_id);

					$('#Sbrunch_id').val(response.incomeexp.brunch_id);
					

					$('#Sbrunch_name').val(response.incomeexp.brunch_name);
					
					$('#se_date').val(response.incomeexp.e_date);
					$('#sincome').val(response.incomeexp.income);
					$('#sexpanse').val(response.incomeexp.expanse);
					$('#Scomment').val(response.incomeexp.comment);
					
				}
			});
		});

		$(document).on('click','#incomeexpshBtn',function(){
			//  alert("ok");

			var incomeexpsh_id=$(this).val();
			// alert(invi_id);
			$('#show_incomeexp').modal('show');
			$.ajax({
				type: "GET",
				url: "/show-incomeexp/"+incomeexpsh_id,
				success:function(response){
					$('#cmbincomeexpSHId').html(incomeexpsh_id);

						$('#Shbrunch_id').html(response.sincomeexp.brunch_id);


						$('#Shbrunch_name').html(response.sincomeexp.brunch_name);

						$('#she_date').html(response.sincomeexp.e_date);
						$('#shincome').html(response.sincomeexp.income);
						$('#shexpanse').html(response.sincomeexp.expanse);
						$('#Shcomment').html(response.sincomeexp.comment);

					
				
					
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









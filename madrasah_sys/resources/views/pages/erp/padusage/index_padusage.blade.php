@extends('layout.erp.home')
@section('page')



<!-- Page Content -->
<div class="content container-fluid">
				
	<!-- Page Header -->
	<div class="page-header">
		<div class="row align-items-center">
			<div class="col">
				<h2 class="page-title">padusage </h2>
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
					<li class="breadcrumb-item active">padusage </li>
				</ul>
			</div>
			<div class="col-auto float-right ml-auto">
				<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_overtime"><i class="fa fa-plus"></i> Add padusage-Center</a>
			</div>
		</div>
	</div>
	<!-- /Page Header -->
	
	<!-- padusage Center Statistics -->
	<div class="row">
		<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
			<div class="stats-info">
				<h6>padusage  member</h6>
				<h4>12 <span>this month</span></h4>
			</div>
		</div>
		<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
			<div class="stats-info">
				<h6>padusage Center </h6>
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
	<!-- /padusage Center Statistics -->
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
							<th>Date</th>
							<th>Padused Des</th>
							<th>Padused Page</th>
							<th>Stock</th>
							<th>Comment</th>
						
							
							<th class="text-right">Actions</th>
						</tr>
					</thead>
					<tbody>
						@forelse ($padusages as $padusage)



						<tr>
							<td>{{$padusage->brunch_name}} | {{$padusage->brunch_id}}</td>
							<td>{{$padusage->date}}</td>
							<td>{{$padusage->padused_des}}</td>
							<td>{{$padusage->padused_page}}</td>
							<td>{{$padusage->stock}}</td>
							<td>{{$padusage->comment}}</td>
						
							<td class="text-right">
								<div class="dropdown dropdown-action">
									<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
									<div class="dropdown-menu dropdown-menu-right">

									
										<button type="button" value="{{$padusage->id}}" class="btn btn-success" id="padurshBtn" ><i class="bi bi-eye-fill"></i> </button>


										<button type="button" value="{{$padusage->id}}" class="btn btn-primary" id="padurBtn" ><i class="bi bi-pencil-square" ></i> </button>

										<button type="button" value="{{$padusage->id}}" class="btn btn-warning" id="padurDbtn" ><i class="fa fa-trash-o m-r-5"></i> </button>

									</div>
								</div>
							</td>
						</tr>
					</tbody>
					@empty
						<tr><td colspan="14">No records found</td></tr>
					@endforelse
					
				</table>
				{{$padusages->links()}}

			</div>
		</div>
	</div>
</div>
<!-- /Page Content -->

<!-- Add padusage Center Modal -->
<div id="add_overtime" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add padusage </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="background-color: teal">
				<form action="{{route('padusages.store')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-sm-4">
	
							<div class="form-group">
								<label class="col-form-label">Brunch NO / শাখা নং: <span class="text-danger">*</span></label>
								
								{{-- <input type="hidden" class="form-control" id="cmbpadurId" name="cmbpadurId" required>
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
									<label class="col-form-label">Date: <span class="text-danger">*</span></label>
									<input type="date" class="form-control" id="" name="txtDate" placeholder="Enter Speakers Name" required> 
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Padused Des: <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="" name="txtPadused_des" placeholder="Occasion" required>
								</div>
							</div>
						
							
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Padused Page :</label>
									<input type="text" class="form-control" id="" name="txtPadused_page" placeholder="Enter Duty Date" required>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Stock: <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="txtStock" name="txtStock" placeholder="Enter Provider" required>
								</div>
							</div>	<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Comment: <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="" name="txtComment" placeholder="Enter Speakers" required>
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
<!-- /Add padusage Center Modal -->

<!-- Edit padusage Center Modal -->
<div id="edit_padur" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit padusages</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="background-color: teal">
				<form action="{{url('padusage-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="row">
						<div class="col-sm-4">
	
							<div class="form-group">
								<label class="col-form-label">Brunch NO / শাখা নং: <span class="text-danger">*</span></label>
								
								<input type="hidden" class="form-control" id="cmbpadurId" name="cmbpadurId" required>
								
								<select id="padurbrunch_id" class="form-control" name="cmbBrunchId" required>
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
								<input type="text" class="form-control" id="padurbrunch_name" name="txtBrunch_name" required>
								
							</div>
						</div>
						
							
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Date: <span class="text-danger">*</span></label>
									<input type="date" class="form-control" id="padurdate" name="txtDate" placeholder="Enter Speakers Name" required> 
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Padused Des: <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="padurpadused_des" name="txtPadused_des" placeholder="Occasion" required>
								</div>
							</div>
						
							
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Padused Page :</label>
									<input type="text" class="form-control" id="padurpadused_page" name="txtPadused_page" placeholder="Enter Duty Date" required>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Stock: <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="padurstock" name="txtStock" placeholder="Enter Provider" required>
								</div>
							</div>	<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Comment: <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="padurcomment" name="txtComment" placeholder="Enter Speakers" required>
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
<!-- /Edit padusage Center Modal -->

<!-- Delete padusage Center Modal -->
<div class="modal custom-modal fade" id="delete_padur" role="dialog">
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
							
						

						<form action="{{url('delete-padusage')}}" method="post" >
									@csrf
									@method("DELETE")
									<input type="hidden" id="delete_padurId" name="d_padur">


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
<!-- /Delete padusage Center Modal -->




<div id="show_padur" class="modal custom-modal fade" role="dialog">
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
								<div class="form-control "  id="padurSHbrunch_id"></div>
								
							</div>
						</div>
						
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Brunch Name: <span class="text-danger">*</span></label>
								<div class="form-control" id="padurSHbrunch_name"></div>
								
							</div>
						</div>
						
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Date : <span class="text-danger">*</span></label>
								<div class="form-control" id="padurSHdate"></div>
								
							</div>
						</div>
					
						
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Description : <span class="text-danger">*</span></label>
								<div class="form-control" id="padurSHpadused_des"></div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Used page: <span class="text-danger">*</span></label>
								<div class="form-control" id="padurSHpadused_page"></div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">Stock: <span class="text-danger">*</span></label>
								<div class="form-control" id="padurSHstock"></div>
								
							</div>
						</div>
					
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label" id="labelb">comment: <span class="text-danger">*</span></label>
								<div class="form-control" id="padurSHcomment"></div>
								
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
        $(document).on('click','#padurDbtn',function(){
			var padur_id=$(this).val();
            // alert(member_id);
			$('#delete_padur').modal('show');
			$('#delete_padurId').val(padur_id);
		});



		$(document).on('click','#padurBtn',function(){
			//  alert("ok");

			var padur_id=$(this).val();
			// alert(invi_id);
			$('#edit_padur').modal('show');
			$.ajax({
				type: "GET",
				url: "/edit-padusage/"+padur_id,
				success:function(response){
					// console.log(response.padusage.brunch_name);
					$('#cmbpadurId').val(padur_id);
					

					$('#padurbrunch_id').val(response.padusage.brunch_id);
					$('#padurbrunch_name').val(response.padusage.brunch_name);
					$('#padurdate').val(response.padusage.date);
					$('#padurpadused_des').val(response.padusage.padused_des);
					$('#padurpadused_page').val(response.padusage.padused_page);
					$('#padurstock').val(response.padusage.stock);
					$('#padurcomment').val(response.padusage.comment);
					
				
					
				}
			});
		});

		$(document).on('click','#padurshBtn',function(){
			//  alert("ok");

			var padursh_id=$(this).val();
			// alert(invi_id);
			$('#show_padur').modal('show');
			$.ajax({
				type: "GET",
				url: "/show-padusage/"+padursh_id,
				success:function(response){
					$('#cmbpadurSHId').html(padursh_id);
					

					$('#padurSHbrunch_id').html(response.spadusage.brunch_id);
					$('#padurSHbrunch_name').html(response.spadusage.brunch_name);
					$('#padurSHdate').html(response.spadusage.date);
					$('#padurSHpadused_des').html(response.spadusage.padused_des);
					$('#padurSHpadused_page').html(response.spadusage.padused_page);
					$('#padurSHstock').html(response.spadusage.stock);
					$('#padurSHcomment').html(response.spadusage.comment);
					
				
					
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
              let padusage=JSON.parse(res);
                console.log(padusage);
               $("#ooBrunch_name").val(padusage.brunch_name);

              
            //    $("#").val(member.);
              





             }
           });
        }); 

	

        
	});
</script>
@endsection







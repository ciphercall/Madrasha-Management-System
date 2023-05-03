@extends('layout.erp.home')
@section('page')
<div class="content container-fluid">
				
	<!-- Page Header -->
	<div class="page-header">
		<div class="row align-items-center">
			<div class="col">
				<h3 class="page-title">Guest gmembers</h3>
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
					<li class="breadcrumb-item active">gmember</li>
				</ul>
			</div>
			<div class="col-auto float-right ml-auto">
				<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_employee"><i class="fa fa-plus"></i> Add Guest gmember</a>
				<div class="view-icons">
					<a href="employees.html" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
					{{-- <a href="{{route('gmembers')}}" class="list-view btn btn-link"><i class="fa fa-bars"></i></a> --}}
					<a href="{{url('all/employee/card')}}" class="list-view btn btn-link"><i class="fa fa-bars"></i></a>

				</div>
			</div>
		</div>
	</div>
	<!-- /Page Header -->
	
	<!-- Search Filter -->
	  <div class="row filter-row">
		<div class="col-sm-6 col-md-3">  
			<div class="form-group form-focus">
				<input type="text" class="form-control floating">
				<label class="focus-label">Employee ID</label>
			</div>
		</div>
		<div class="col-sm-6 col-md-3">  
			<div class="form-group form-focus">
				<input type="text" class="form-control floating">
				<label class="focus-label">Employee Name</label>
			</div>
		</div>
		<div class="col-sm-6 col-md-3"> 
			<div class="form-group form-focus select-focus">
				<select class="select floating"> 
					<option>Select Designation</option>
					<option>Web Developer</option>
					<option>Web Designer</option>
					<option>Android Developer</option>
					<option>Ios Developer</option>
				</select>
				<label class="focus-label">Designation</label>
			</div>
		</div>
		<div class="col-sm-6 col-md-3">  
			<a href="#" class="btn btn-success btn-block"> Search </a>  
		</div>
	</div>
	<!-- Search Filter -->
	
	   <div class="row staff-grid-row">
		@foreach ($gmembers as $gmember)
		<div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
			<div class="profile-widget">
				<div class="profile-img">
					<a href="{{route('guestmembers.show',$gmember->id)}}" class="avatar"><img src="img/{{$gmember->photo}}" height="80px" width="85px"/></a>
				</div>
				<div class="dropdown profile-action">
					<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
					<div class="dropdown-menu dropdown-menu-right">
						{{-- <a class="dropdown-item" href="{{route('gmembers.edit',$gmember->id)}}" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a>
					
					
						<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a> --}}
						<a href="{{route('guestmembers.show',$gmember->id)}}"><button type="button" value="{{$gmember->id}}" class="btn btn-success" id="padcshBtn" ><i class="bi bi-eye-fill"></i> </button></a>


						<button type="button" value="{{$gmember->id}}" class="btn btn-primary" id="gmemBtn" ><i class="bi bi-pencil-square" ></i> </button>

						<button type="button" value="{{$gmember->id}}" class="btn btn-warning" id="gmemDbtn" ><i class="fa fa-trash-o m-r-5"></i> </button>
					</div>
				</div>
				<h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="profile.html">{{$gmember->name}}</a></h4>
				<div class="small text-muted">{{$gmember->occupation}}</div>
			</div>
		</div>
	
		@endforeach
	
	</div>
</div>
<!-- /Page Content -->





<script>
	$(document).ready(function () {
		$('#txtWorkplace').on('change', function () {
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
		$('#txtCountry').on('change', function () {
			var idState = this.value;
			$("#txtCity").html('');
			$.ajax({
				url: "{{url('api/fetch-cities')}}",
				type: "POST",
				data: {
					country_id: idState,
					_token: '{{csrf_token()}}'
				},
				dataType: 'json',
				success: function (res) {
					$('#txtCity').html('<option value="">Select City</option>');
					$.each(res.cities, function (key, value) {
						$("#txtCity").append('<option value="' + value
							.id + '">' + value.name + '</option>');
					});
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
@include('pages.erp.guestmember.edit_guestmember')
@include('pages.erp.guestmember.create_guestmember')

@endsection

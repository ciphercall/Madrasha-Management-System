@extends('layout.erp.home')
@section('page')

{{-- <a class='btn btn-success' href="{{route('duties.create')}}">Create</a><table class='table'>
<tr>
	<th>Id</th>
	<th>Name</th>
	<th>Deleted At</th>
	<th>Created At</th>
	<th>Updated At</th>

</tr>
@forelse ($duties as $dutie)
<tr>
	<td>{{$dutie->id}}</td>
	<td>{{$dutie->name}}</td>
	<td>{{$dutie->deleted_at}}</td>
	<td>{{$dutie->created_at}}</td>
	<td>{{$dutie->updated_at}}</td>

	<td>
	<div>
	<form action="{{route('duties.destroy',$dutie->id)}}" method="post" >
	<a class='btn btn-primary' href="{{route('duties.edit',$dutie->id)}}">Edit<a>
	<a class='btn btn-info' href="{{route('duties.show',$dutie->id)}}">Show<a>
		@csrf
		@method("DELETE")
		<input class='btn btn-danger' type="submit" name="btnDelete" class="btnDelete" data-id="{{$dutie->id}}"  value="Delete" />
	</form>
	</div>
	</td>
</tr>
@empty
<tr><td colspan="5">No records found</td></tr>
@endforelse
</table>
{{$duties->links()}} --}}

<div class="content container-fluid">
					
	<!-- Page Header -->
	<div class="page-header">
		<div class="row">
			<div class="col-sm-12">
				<h3 class="page-title">All Dutys</h3>
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
					<li class="breadcrumb-item active">All Dutys</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /Page Header -->
	
		<!-- Content Starts -->
		<!-- Search Filter -->
	<div class="row filter-row">
		
		<div class="col-sm-6 col-md-3">  
			<div class="form-group form-focus">
				<input type="text" class="form-control floating">
				<label class="focus-label"> Dutys Name</label>
			</div>
		</div>
		<div class="col-sm-6 col-md-3">  
			<div class="form-group form-focus">
				<div class="cal-icon">
					<select class="form-control floating select">
						<option>
							Jan
						</option>
						<option>
							Feb
						</option>
						<option>
							Mar
						</option>
					</select>
				</div>
				<label class="focus-label">Month</label>
			</div>
		</div>
		<div class="col-sm-6 col-md-3">  
			<div class="form-group form-focus">
				<div class="cal-icon">
					<select class="form-control floating select">
						<option>
							2018
						</option>
						<option>
							2019
						</option>
						<option>
							2020
						</option>
					</select>
				</div>
				<label class="focus-label">Year</label>
			</div>
		</div>
		<div class="col-sm-6 col-md-3">  
			<a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#add_duty"><i class="fa fa-plus"></i>  Add Duty </a>  
		</div>     
	</div>
	<!-- /Search Filter -->
	@if ($message = Session::get('success'))
	<div class="alert alert-success">
		<p>{{ $message }}</p>
	</div>
	@endif
	<div class="row">
		<div class="col-md-12">
			<div class="table-responsive">
				<table class="table table-striped  ">
					<thead>
						<tr>
							<th>ID</th>
							<th>Duty Name</th>
							<th>Create_time</th>
						
							
							<th class="text-center">Actions</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($duties as $dutie)
						<tr>
							<td>{{$dutie->id}}</td>
							<td>
								{{$dutie->name}}
							</td>
							<td>{{$dutie->created_at}}</td>
						
							<td class="text-right">
								{{-- <button type="button" class="btn btn-success">
									<i class="bi bi-eye-fill"></i>
								</button> --}}
								<a class="btn btn-success" href="{{route('dutys.show',$dutie->id)}}" ><i class="bi bi-eye-fill"></i> </a>
								
								<a class="btn btn-warning" href="{{route('dutys.edit',$dutie->id)}}" data-toggle="modal" data-target="#edit_employee"><i class="bi bi-pencil-square"></i> </a>

								  <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#delete_employee"><i class="bi bi-trash-fill"></i> </a>
                            
                            </td>
						</tr>

		<!-- Delete Employee Modal -->
			<div class="modal custom-modal fade" id="delete_employee" role="dialog">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-body">
							<div class="form-header">
								<h3>Delete Employee</h3>
								<p>Are you sure want to delete?</p>
							</div>
							<div class="modal-btn delete-action">
								<div class="row">
									<div class="col-6">
										<form action="{{route('dutys.destroy',$dutie->id)}}" method="post" >
											@csrf
											@method("DELETE")
											<input class="btn btn-primary continue-btn" type="submit" name="btnDelete" class="btnDelete" data-id="{{$dutie->id}}"  value="Delete" />
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
		<!-- /Delete Employee Modal -->
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<!-- /Content End -->
	
</div>
<div class="d-felx justify-content-center">

	{{ $duties->links() }}

</div>

<!-- /Page Content -->
@include('pages.erp.dutie.create_dutie')
@endsection

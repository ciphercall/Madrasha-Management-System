

{{-- <a class='btn btn-success' href="{{route('centralmembers.create')}}">Create</a><table class='table'>
<tr>
	<th>Id</th>
	<th>Name</th>
	<th>Phone</th>
	<th>Email</th>
	<th>Date Birth</th>
	<th>Father</th>
	<th>Mother</th>
	<th>Family Member</th>
	<th>Blood Group</th>
	<th>Gender</th>
	<th>Eduction Type</th>
	<th>Education Skill</th>
	<th>Occupation</th>
	<th>Workplace</th>
	<th>Country</th>
	<th>Presentadd</th>
	<th>Parmanentadd</th>
	<th>Workplace Address</th>
	<th>Relationship</th>
	<th>Nid</th>
	<th>Image</th>
	<th>Torikot Date</th>
	<th>Sobok Type</th>
	<th>Brunch Id</th>
	<th>Brunch Name</th>
	<th>Baiyat Date</th>
	<th>Donation Box Id</th>
	<th>Occasion</th>
	<th>Duty</th>
	<th>Deleted At</th>
	<th>Created At</th>
	<th>Updated At</th>
	<th>Designation</th>

</tr>
@forelse ($centralmembers as $centralmember)
<tr>
	<td>{{$centralmember->id}}</td>
	<td>{{$centralmember->name}}</td>
	<td>{{$centralmember->phone}}</td>
	<td>{{$centralmember->email}}</td>
	<td>{{$centralmember->date_birth}}</td>
	<td>{{$centralmember->father}}</td>
	<td>{{$centralmember->mother}}</td>
	<td>{{$centralmember->family_member}}</td>
	<td>{{$centralmember->blood_group}}</td>
	<td>{{$centralmember->gender}}</td>
	<td>{{$centralmember->eduction_type}}</td>
	<td>{{$centralmember->education_skill}}</td>
	<td>{{$centralmember->occupation}}</td>
	<td>{{$centralmember->workplace}}</td>
	<td>{{$centralmember->country}}</td>
	<td>{{$centralmember->presentadd}}</td>
	<td>{{$centralmember->parmanentadd}}</td>
	<td>{{$centralmember->workplace_address}}</td>
	<td>{{$centralmember->relationship}}</td>
	<td>{{$centralmember->nid}}</td>
	<td>{{$centralmember->image}}</td>
	<td>{{$centralmember->torikot_date}}</td>
	<td>{{$centralmember->sobok_type}}</td>
	<td>{{$centralmember->brunch_id}}</td>
	<td>{{$centralmember->brunch_name}}</td>
	<td>{{$centralmember->baiyat_date}}</td>
	<td>{{$centralmember->donation_box_id}}</td>
	<td>{{$centralmember->occasion}}</td>
	<td>{{$centralmember->duty}}</td>
	<td>{{$centralmember->deleted_at}}</td>
	<td>{{$centralmember->created_at}}</td>
	<td>{{$centralmember->updated_at}}</td>
	<td>{{$centralmember->designation}}</td>

	<td>
	<div>
	<form action="{{route('centralmembers.destroy',$centralmember->id)}}" method="post" >
	<a class='btn btn-primary' href="{{route('centralmembers.edit',$centralmember->id)}}">Edit<a>
	<a class='btn btn-info' href="{{route('centralmembers.show',$centralmember->id)}}">Show<a>
		@csrf
		@method("DELETE")
		<input class='btn btn-danger' type="submit" name="btnDelete" class="btnDelete" data-id="{{$centralmember->id}}"  value="Delete" />
	</form>
	</div>
	</td>
</tr>
@empty
<tr><td colspan="33">No records found</td></tr>
@endforelse
</table>
{{$centralmembers->links()}} --}}
@extends('layout.erp.home')
@section('page')
<div class="content container-fluid">
				
	<!-- Page Header -->
	<div class="page-header">
		<div class="row align-items-center">
			<div class="col">
				<h2 class="page-title">Central Members</h2>
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
					<li class="breadcrumb-item active">Central Members</li>
				</ul>
			</div>
			<div class="col-auto float-right ml-auto">
				<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_employee"><i class="fa fa-plus"></i> Add Central Member</a>
				<div class="view-icons">
					<a href="employees.html" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
					{{-- <a href="{{route('members')}}" class="list-view btn btn-link"><i class="fa fa-bars"></i></a> --}}
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
	@if (session('success'))
	<div class="alert alert-success"><b>{{session('success')}}</b> </div>
@endif

	   <div class="row staff-grid-row">
		@foreach ($cmembers as $cmember)
		<div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
			<div class="profile-widget">
				<div class="profile-img">
					<a href="{{route('centralmembers.show',$cmember->id)}}" class="avatar"><img src="img/{{$cmember->photo}}" height="80px" width="85px"/></a>
				</div>
				<div class="dropdown profile-action">
					<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
					<div class="dropdown-menu dropdown-menu-right">
						{{-- <a class="dropdown-item" href="{{route('members.edit',$cmember->id)}}" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a>
					
					
						<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a> --}}
						<a href="{{route('centralmembers.show',$cmember->id)}}"><button type="button" value="{{$cmember->id}}" class="btn btn-success" id="padcshBtn" ><i class="bi bi-eye-fill"></i> </button></a>

						<button type="button" value="{{$cmember->id}}" class="btn btn-primary" id="cmemBtn" ><i class="bi bi-pencil-square" ></i> </button>

						<button type="button" value="{{$cmember->id}}" class="btn btn-warning" id="cmemDbtn" ><i class="fa fa-trash-o m-r-5"></i> </button>
					</div>
				</div>
				<h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="profile.html">{{$cmember->name}}</a></h4>
				<div class="small text-muted">{{$cmember->occupation}}</div>
			</div>
		</div>
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
										<form action="{{route('members.destroy',$cmember->id)}}" method="post" >
											@csrf
											@method("DELETE")
											<input class="btn btn-primary continue-btn" type="submit" name="btnDelete" class="btnDelete" data-id="{{$cmember->id}}"  value="Delete" />
										</form>
									
										{{-- <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a> --}}
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
	
	</div>
</div>
<!-- /Page Content -->

<!-- Add Employee Modal -->
<div id="add_employee" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add Employee</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			{{-- add employee--}}
			<div class="modal-body" style="background-color: rgb(4, 102, 102)">
				<form action="{{route('centralmembers.store')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">NAME / নাম : <span class="text-danger">*</span></label>
								{{-- <input type="text" class="form-control" id="txtName" name="txtName" placeholder="Enter Full Name" required> --}}
								


								<select id="txtName" class="form-control" name="txtName" required>
									<option selected>Choose...</option>
									@foreach ($members as $name)
									<option value="{{ $name->id }}">{{ $name->name }}</option>
								@endforeach
								</select>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">PHONE / ফোন :</label>
								<input type="number" class="form-control" id="txtPhone" name="txtPhone" placeholder="Enter Phone Number" required>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">EMAIL / ইমেইল : <span class="text-danger">*</span></label>
								<input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="Enter Your Email" required>
							</div>
						</div><div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Date Birth / জন্ম তারিখ : <span class="text-danger">*</span></label>
								<input type="date" class="form-control" id="txtDate_birth" name="txtDate_birth" required>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Father Name / পিতার নাম :</label>
								<input type="text" class="form-control" id="txtFather" name="txtFather" placeholder="Enter Father Name" required>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Mother Name / মাতার নাম: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="txtMother" name="txtMother" placeholder="Enter Mother Name" required> 
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Family/তরিক্বপন্থী সদস্য: <span class="text-danger">*</span></label>
								<input type="number" class="form-control" id="txtFamily_member" name="txtFamily_member" placeholder="পরিবারে তরিক্বত পন্থী সদস্য" required>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Blood Group / রক্তের গ্রুপ:</label>
								<select id="txtBlood_group" class="form-control" name="txtBlood_group" required>
									<option selected>Choose...</option>
									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
								</select>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Gender / লিঙ্গ: <span class="text-danger">*</span></label>
								<select id="txtGender" class="form-control" name="txtGender" required>
									<option selected>Choose...</option>
									<option value="Male">পুরুষ</option>
									<option value="Female">মহিলা</option>
								</select>
							</div>
						</div>	
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Eduction Type / শিক্ষার ধরন: <span class="text-danger">*</span></label>
								<select id="txtEduction_type" class="form-control" name="txtEduction_type" required>
									<option selected>Choose...</option>
									<option value="general">জেনারেল</option>
									<option value="madrasa">মাদ্রাসা</option>
								</select>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Education/শিক্ষাগত যোগ্যতা:</label>
								<input type="text" class="form-control" id="txtEducation_skill" name="txtEducation_skill" placeholder="Enter Educational Qualification" required>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Occupation / পেশা: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="txtOccupation" name="txtOccupation" placeholder="Enter Occupation" required>
							</div>
						</div>	
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Workplace / কর্মস্থল: <span class="text-danger">*</span></label>
								<select id="txtWorkplace" class="form-control" name="txtWorkplace" required>
									<option selected>Choose...</option>
									@foreach ($workplaces as $wp)
									<option value="{{ $wp->id }}">{{ $wp->name }}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Country Name / দেশের নাম:</label>
								<select id="txtCountry" class="form-control" name="txtCountry" required>
									
								</select>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">State Name / দেশের নাম:</label>
								<select id="txtCity" class="form-control" name="txtCity" required>
									
								</select>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Present/বর্তমান ঠিকানা: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="txtPresentadd" name="txtPresentadd" placeholder="Enter Present Address" required>
							</div>
						</div>	
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Parmanent/স্থায়ী ঠিকানা: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="txtParmanentadd" name="txtParmanentadd" placeholder="Enter Parmanent Address" required>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">কর্মস্থলের ঠিকানা:</label>
								<input type="text" class="form-control" id="txtWorkplace_address" name="txtWorkplace_address" placeholder="Enter Parmanent Address" required>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Relationship / বৈবাহিক অবস্থা: <span class="text-danger">*</span></label>
								<select id="txtRelationship" class="form-control" name="txtRelationship" required>
									<option selected>Choose...</option>
									<option value="Married">Married</option>
									<option value="Unmarried">Unmarried</option>
								</select>
							</div>
						</div>	
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">NID / এনআইডি নম্বর: <span class="text-danger">*</span></label>
								<input type="number" class="form-control" id="txtNid" name="txtNid" placeholder="Enter Valid NID Number" required>
							</div>
						</div>
					
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Donation Box/দান বাক্স নম্বর:</label>
								<input type="number" class="form-control" id="cmbDonation_boxId" name="cmbDonation_boxId" required>
							</div>
						</div>
						
							
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Torikot Date/তরিক্বত তারিখ: <span class="text-danger">*</span></label>
								<input type="date" class="form-control" id="txtTorikot_date" name="txtTorikot_date" required>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Sobok Type / শেষ ছবক:</label>
								<select id="txtSobok_type" class="form-control" name="txtSobok_type" required>
									<option selected>Choose...</option>
									@foreach ($soboks as $sobok)
									<option value="{{ $sobok->id }}">{{ $sobok->name }}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Brunch NO / শাখা নং: <span class="text-danger">*</span></label>
								{{-- <input type="number" class="form-control" id="cmbBrunchId" name="cmbBrunchId" required> --}}
								<select id="cmbBrunchId" class="form-control" name="cmbBrunchId" required>
								<option selected>Choose...</option>

								@foreach ($brunchs as $brunch)
								<option value="{{ $brunch->id }}">{{ $brunch->brunch_code }} | {{ $brunch->brunch_name }}</option>
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
								<label class="col-form-label">Baiyat Date/বাইয়াত তারিখ:</label>
								<input type="date" class="form-control" id="txtBaiyat_date" name="txtBaiyat_date" required>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Ocations / উপলক্ষ্য: <span class="text-danger">*</span></label>
								<select id="txtOccasion" class="form-control" name="txtOccasion" required>
									<option selected>Choose...</option>
									@foreach ($occasions as $occasion)
									<option value="{{ $occasion->id }}">{{ $occasion->name }}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Duty / দায়িত্ব : <span class="text-danger">*</span></label>
								<select id="txtDuty" class="form-control" name="txtDuty" required>
									<option selected>Choose...</option>
									@foreach ($dutys as $du)
									<option value="{{ $du->id }}">{{ $du->name }}</option>
									@endforeach                         
								</select>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Image / ছবি: <span class="text-danger">*</span></label>
								<input type="file" name="filePhoto" class="form-control" placeholder="image">
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<img src="{{ URL::to('/assets/photo/av.jpg') }}" alt="" sizes="" srcset="">
								{{-- <label class="col-form-label">Image / ছবি: <span class="text-danger">*</span></label>
								<input type="file" name="filePhoto" class="form-control" placeholder="image"> --}}
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Designations / পদবি : <span class="text-danger">*</span></label>
								<select id="txtDesignation" class="form-control" name="txtDesignation" required>
									<option selected>Choose...</option>
									@foreach ($designations as $designation)
									<option value="{{ $designation->id }}">{{ $designation->name }}</option>
									@endforeach
								</select>
							</div>
						</div>	
					</div>
					{{-- <div class="table-responsive m-t-15">
						<table class="table table-striped custom-table">
							<thead>
								<tr>
									<th>Module Permission</th>
									<th class="text-center">Read</th>
									<th class="text-center">Write</th>
									<th class="text-center">Create</th>
									<th class="text-center">Delete</th>
									<th class="text-center">Import</th>
									<th class="text-center">Export</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Holidays</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
								</tr>
								<tr>
									<td>Leaves</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
								</tr>
								<tr>
									<td>Clients</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
								</tr>
								<tr>
									<td>Projects</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
								</tr>
								<tr>
									<td>Tasks</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
								</tr>
								<tr>
									<td>Chats</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
								</tr>
								<tr>
									<td>Assets</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
								</tr>
								<tr>
									<td>Timing Sheets</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input checked="" type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
									<td class="text-center">
										<input type="checkbox">
									</td>
								</tr>
							</tbody>
						</table>
					</div> --}}
					<div class="submit-section">
						<input class="btn btn-primary submit-btn" type="submit"  name="btnCreate" value="Submit">

					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /Add Employee Modal -->

<!-- Edit padcollection Center Modal -->
{{-- <div id="edit_padc" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit padcollections</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="background-color: teal">
				<form action="{{url('padcollection-update')}}"  method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="row">
						<div class="col-sm-4">
	
							<div class="form-group">
								<label class="col-form-label">Brunch NO / শাখা নং: <span class="text-danger">*</span></label>
								
								<input type="hidden" class="form-control" id="cmbpadcId" name="cmbpadcId" required>
								
								<select id="padcbrunch_id" class="form-control" name="cmbBrunchId" required>
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
								<input type="text" class="form-control" id="padcbrunch_name" name="txtBrunch_name" required>
								
							</div>
						</div>
						
							
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Date: <span class="text-danger">*</span></label>
									<input type="date" class="form-control" id="padcdate" name="txtDate" placeholder="Enter Speakers Name" required> 
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Page_no: <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="padcpage_no" name="txtPage_no" placeholder="Occasion" required>
								</div>
							</div>
						
							
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Pad Collection:</label>
									<input type="text" class="form-control" id="padcpad_collection" name="txtPad_collection" placeholder="Enter Duty Date" required>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Provider: <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="padcprovider" name="txtProvider" placeholder="Enter Provider" required>
								</div>
							</div>	<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Comment: <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="padccomment" name="txtComment" placeholder="Enter Speakers" required>
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
</div> --}}
<!-- /Edit padcollection Center Modal -->



<script>
	$(document).ready(function () {

  //Show customer other information
  		$("#txtName").on("change",function(){
           $.ajax({
             url:"<?php echo url("getmembers")?>",
             type:'GET',
             data:{"id":$(this).val()},
             success:function(res){
              let member=JSON.parse(res);
                console.log(member);
            //    $("#customer-name").val(member.name);
               $("#txtPhone").val(member.phone);
               $("#txtEmail").val(member.email);
               $("#txtDate_birth").val(member.date_birth);
               $("#txtFather").val(member.father);
               $("#txtMother").val(member.mother);
               $("#txtFamily_member").val(member.family_member);

               $("#txtBlood_group").val(member.blood_group);
               $("#txtGender").val(member.gender);
			   $("#txtEduction_type").val(member.eduction_type);


               $("#txtEducation_skill").val(member.education_skill);
               $("#txtOccupation").val(member.occupation);

               $("#txtWorkplace").val(member.workplace);

               $("#txtCountry").val(member.country);
               $("#txtCity").val(member.city);
               $("#txtPresentadd").val(member.presentadd);
               $("#txtParmanentadd").val(member.parmanentadd);
               $("#txtWorkplace_address").val(member.workplace_address);

               $("#txtRelationship").val(member.relationship);
               $("#txtNid").val(member.nid);
               $("#cmbDonation_boxId").val(member.donation_box_id);

               $("#txtTorikot_date").val(member.torikot_date);
               $("#txtSobok_type").val(member.sobok_type);
               $("#cmbBrunchId").val(member.brunch_id);
               $("#txtBrunch_name").val(member.brunch_name);
               $("#txtBaiyat_date").val(member.baiyat_date);
               $("#txtOccasion").val(member.occasion);
               $("#txtDuty").val(member.duty);
               $("#txtDesignation").val(member.designation);
            //    $("#").val(member.);
              





             }
           });
        }); 


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

@include('pages.erp.centralmember.edit_centralmember')

@endsection




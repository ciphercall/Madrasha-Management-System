@extends('layout.erp.home')
@section('page')

<!-- Page Content -->
<div class="content container-fluid">
				
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Employee</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Employee</li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_employee"><i class="fa fa-plus"></i> Add Employee</a>
                <div class="view-icons">
                    <a href="{{url('/members')}}" class="grid-view btn btn-link"><i class="fa fa-th"></i></a>
                    <a href="#" class="list-view btn btn-link active"><i class="fa fa-bars"></i></a>
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
    <!-- /Search Filter -->
    
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table datatable">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Member ID</th>
                            <th>Email</th>
                            <th>Mobile</th>

                            <th>Duty</th>


                            <th>Baiyat Date</th>
                            <th>Status</th>


                            <th class="text-right no-sort">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $members as $member)
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{route('members.show',$member->id)}}" class="avatar"><img src="{{asset('img')}}/{{$member->photo}}" /></a>
                                    <a href="{{route('members.show',$member->id)}}">{{$member->name}} <span>{{$member->occupation}}</span></a>
                                </h2>
                            </td>
                            <td>{{$member->id}}</td>
                            <td>{{$member->email}}</td>
                            <td>{{$member->phone}}</td>
                            <td>{{$member->duty}}</td>


                            <td>
                                {{$member->baiyat_date}}

                            </td>
                            <td>
                                            <div class="dropdown action-label">
													<a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> Inactive </a>
													{{-- <div class="dropdown-menu" style="">
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
														<a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
													</div> --}}
												</div>
                             </td>                   
                            <td class="text-right">
								{{-- <button type="button" class="btn btn-success">
									<i class="bi bi-eye-fill"></i>
								</button> --}}
								<a class="btn btn-success" href="{{route('members.show',$member->id)}}" ><i class="bi bi-eye-fill"></i> </a>
								  {{-- <a  href="" data-target="#edit_employee">
								  <button type="button" class="btn btn-warning">
									<i class="bi bi-pencil-square"></i>

								  </button>
								</a>  --}}
								<a class="btn btn-warning" href="{{route('members.edit',$member->id)}}" data-toggle="modal" data-target="#edit_employee"><i class="bi bi-pencil-square"></i> </a>

								  {{-- <button type="button" class="btn btn-primary">
									<i class="bi bi-trash-fill"></i>

								  </button> --}}
								  <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#delete_employee"><i class="bi bi-trash-fill"></i> </a>
                                {{-- <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{route('members.edit',$member->id)}}" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a>


                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                    </div>
                                </div> --}}
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
										<form action="{{route('members.destroy',$member->id)}}" method="post" >
											@csrf
											@method("DELETE")
											<input class="btn btn-primary continue-btn" type="submit" name="btnDelete"  data-id="{{$member->id}}"  value="Delete" />
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
                    </tbody>
                </table>
            </div>
        </div>
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
			<div class="modal-body">
				<form action="{{route('members.store')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">NAME / নাম : <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="txtName" name="txtName" placeholder="Enter Full Name" required>
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
						</div>	<div class="col-sm-4">
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
						</div>	<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Workplace / কর্মস্থল: <span class="text-danger">*</span></label>
								<select id="txtWorkplace" class="form-control" name="txtWorkplace" required>
									<option selected>Choose...</option>
									<option value="local">স্থানীয়</option>
									<option value="foreign">প্রবাসী</option>                          
								</select>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Country Name / দেশের নাম:</label>
								<select id="txtCountry" class="form-control" name="txtCountry" required>
									<option selected>Choose...</option>
									<option value="Bangladesh">Bangladesh</option>
									<option value="usa">USA</option>
									<option value="soudi arob">Soudi Arob</option>
								</select>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Present/বর্তমান ঠিকানা: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="txtPresentadd" name="txtPresentadd" placeholder="Enter Present Address" required>
							</div>
						</div>	<div class="col-sm-4">
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
						</div>	<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">NID / এনআইডি নম্বর: <span class="text-danger">*</span></label>
								<input type="number" class="form-control" id="txtNid" name="txtNid" placeholder="Enter Valid NID Number" required>
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
									<option value="Kolbb">ক্বলব</option>
									<option value="Ruhh">রুহ</option>
									<option value="Sirr">সির্</option>
									<option value="Khofi">খফি</option>
									<option value="Akhfa">আখফা</option>
									<option value="Nofs">নফস</option>
									<option value="Ba'D">বা'দ</option>
									<option value="Nar">নার</option>
									<option value="M'a">ম'</option>
									<option value="Khak">খাক</option>
									<option value="Anoyare Latayef">আনোয়ারে লাতায়েফ</option>
									<option value="Makame Taoba">মাকামে তাওবা</option>
								</select>
							</div>
						</div><div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Brunch NO / শাখা নং: <span class="text-danger">*</span></label>
								{{-- <input type="number" class="form-control" id="cmbBrunchId" name="cmbBrunchId" required> --}}
								<select id="cmbBrunchId" class="form-control" name="cmbBrunchId" required>

								@foreach ($brunchs as $brunch)
								<option value="{{ $brunch->id }}">{{ $brunch->brunch_code }} | {{ $brunch->brunch_name }}</option>
								@endforeach
								</select>

							</div>
						</div>	<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Brunch Name / শাখার নাম: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="txtBrunch_name" name="txtBrunch_name" required>
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
									<option value="3rd Ramjan">৩রা রমজান</option>
									<option value="Shobe Borat">শবে বরাত</option>
									<option value="Shobe Kodor">শবে কদর</option>
									<option value="Eid ul Fitr">ঈদ উল ফিতর</option>
									<option value="Eid ul Azha">ঈদ উল আজহা</option>
									<option value="Mohrom">মহরম</option>
									<option value="Merajunnabi">মেরাজুন্নবী</option>
									<option value="Miladunnabi">মিলাদুন্নবী</option>
									<option value="Fateha Yazdaham">ফাতেহা ইয়াজদাহম</option>
									<option value="Fateha Yazdaham">সালানা ওরসে গাউছুল আজম (রা:)</option>
								</select>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Duty / দায়িত্ব : <span class="text-danger">*</span></label>
								<select id="txtDuty" class="form-control" name="txtDuty" required>
									<option selected>Choose...</option>
									<option value="Decoretion">শৃঙ্খলা </option>
									<option value="Discipline">আপ্যায়ন</option>
									<option value="Entertain">ডেকোরেশন </option>
									<option value="Stage">শৌচাগার </option>
									<option value="Lighting">অতিথী আপ্যায়ন</option>
									<option value="CCTV">প্রশাসনিক </option>
									<option value="Traffic">লাইটিং </option>
									<option value="Parking">Parking</option>
									<option value="Administration">মঞ্চ আপ্যায়ন </option>
									<option value="Reporting">সংবাদ </option>
									<option value="Sound System">অতিথী দাওয়াত </option>
									<option value="Washroom">মুদ্রন </option>
									<option value="Media">প্রচার </option>
									<option value="Printing">বাস্তবায়ন </option>
									<option value="Guest Invitation">বক্তা </option>
									<option value="Others">সঞ্চালক </option>
									<option value="Sound System">মঞ্চ নির্মান </option>
									<option value="Washroom">সোশাল মিডিয়া </option>
									<option value="Media">অতিথী বরন </option>
									<option value="Printing">প্রধান অতিথীর নিরপত্তা </option>
									<option value="Guest Invitation">সাউন্ড সিষ্টেম </option>
									<option value="Others">সি সি টিভি </option>
									<option value="Printing">অনলাইন ব্রডকাস্ট </option>                            
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

<!-- Edit Employee Modal -->
<div id="edit_employee" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Edit Employee</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{route('members.update',$member->id)}}" method="post" enctype="multipart/form-data">
					@csrf
					@method("PUT")
					<div class="row">
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">NAME / নাম : <span class="text-danger">*</span></label>
							<input type="hidden"  value="{{ $member->id }}" id="cmbMemberId" name="cmbMemberId" >

								<input type="text" class="form-control" value="{{ $member->name }}" id="txtName" name="txtName" placeholder="Enter Full Name" required>

							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">PHONE / ফোন :</label>
								<input type="number" class="form-control" value="{{ $member->phone }}" id="txtPhone" name="txtPhone" placeholder="Enter Phone Number" required>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">EMAIL / ইমেইল : <span class="text-danger">*</span></label>
								<input type="email" class="form-control" value="{{ $member->email }}" id="txtEmail" name="txtEmail" placeholder="Enter Your Email" required>
							</div>
						</div><div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Date Birth / জন্ম তারিখ : <span class="text-danger">*</span></label>
								<input type="date" class="form-control" value="{{ $member->date_birth }}" id="txtDate_birth" name="txtDate_birth" required>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Father Name / পিতার নাম :</label>
								<input type="text" class="form-control" value="{{ $member->father }}" id="txtFather" name="txtFather" placeholder="Enter Father Name" required>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Mother Name / মাতার নাম: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="{{ $member->mother }}" id="txtMother" name="txtMother" placeholder="Enter Mother Name" required> 
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Family/তরিক্বপন্থী সদস্য: <span class="text-danger">*</span></label>
								<input type="number" class="form-control" value="{{ $member->family_member }}" id="txtFamily_member" name="txtFamily_member" placeholder="পরিবারে তরিক্বত পন্থী সদস্য" required>
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
						</div>	<div class="col-sm-4">
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
								<input type="text" class="form-control" value="{{ $member->eduction_type }}" id="txtEducation_skill" name="txtEducation_skill" placeholder="Enter Educational Qualification" required>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Occupation / পেশা: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="{{ $member->education_skill }}" id="txtOccupation" name="txtOccupation" placeholder="Enter Occupation" required>
							</div>
						</div>	<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Workplace / কর্মস্থল: <span class="text-danger">*</span></label>
								<select id="txtWorkplace" class="form-control"   name="txtWorkplace" required>
									<option selected>Choose...</option>
									<option value="local">স্থানীয়</option>
									<option value="foreign">প্রবাসী</option>                          
								</select>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Country Name / দেশের নাম:</label>
								<select id="txtCountry" class="form-control" name="txtCountry" required>
									<option selected>Choose...</option>
									<option value="Bangladesh">Bangladesh</option>
									<option value="usa">USA</option>
									<option value="soudi arob">Soudi Arob</option>
								</select>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Present/বর্তমান ঠিকানা: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="{{ $member->presentadd }}" id="txtPresentadd" name="txtPresentadd" placeholder="Enter Present Address" required>
							</div>
						</div>	<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Parmanent/স্থায়ী ঠিকানা: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="{{ $member->parmanentadd }}" id="txtParmanentadd" name="txtParmanentadd" placeholder="Enter Parmanent Address" required>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">কর্মস্থলের ঠিকানা:</label>
								<input type="text" class="form-control" value="{{ $member->workplace_address }}" id="txtWorkplace_address" name="txtWorkplace_address" placeholder="Enter Parmanent Address" required>
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
						</div>	<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">NID / এনআইডি নম্বর: <span class="text-danger">*</span></label>
								<input type="number" class="form-control" value="{{ $member->nid }}" id="txtNid" name="txtNid" placeholder="Enter Valid NID Number" required>
							</div>
						</div>
					
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Donation Box/দান বাক্স নম্বর:</label>
								<input type="number" class="form-control" value="{{ $member->donation_box_id }}" id="cmbDonation_boxId" name="cmbDonation_boxId" required>
							</div>
						</div>
						
							
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Torikot Date/তরিক্বত তারিখ: <span class="text-danger">*</span></label>
								<input type="date" class="form-control" value="{{ $member->txtTorikot_date }}" id="txtTorikot_date" name="txtTorikot_date" required>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Sobok Type / শেষ ছবক:</label>
								<select id="txtSobok_type" class="form-control" name="txtSobok_type" required>
									<option selected>Choose...</option>
									<option value="Kolbb">ক্বলব</option>
									<option value="Ruhh">রুহ</option>
									<option value="Sirr">সির্</option>
									<option value="Khofi">খফি</option>
									<option value="Akhfa">আখফা</option>
									<option value="Nofs">নফস</option>
									<option value="Ba'D">বা'দ</option>
									<option value="Nar">নার</option>
									<option value="M'a">ম'</option>
									<option value="Khak">খাক</option>
									<option value="Anoyare Latayef">আনোয়ারে লাতায়েফ</option>
									<option value="Makame Taoba">মাকামে তাওবা</option>
								</select>
							</div>
						</div><div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Brunch NO / শাখা নং: <span class="text-danger">*</span></label>
								{{-- <input type="number" class="form-control" id="cmbBrunchId" name="cmbBrunchId" required> --}}
								<select id="cmbBrunchId" class="form-control" name="cmbBrunchId" required>

								@foreach ($brunchs as $brunch)
								<option value="{{ $brunch->id }}">{{ $brunch->brunch_code }} | {{ $brunch->brunch_name }}</option>
								@endforeach
								</select>

							</div>
						</div>	<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Brunch Name / শাখার নাম: <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="{{ $member->brunch_name }}" id="txtBrunch_name" name="txtBrunch_name" required>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Baiyat Date/বাইয়াত তারিখ:</label>
								<input type="date" class="form-control" value="{{ $member->baiyat_date }}" id="txtBaiyat_date" name="txtBaiyat_date" required>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Ocations / উপলক্ষ্য: <span class="text-danger">*</span></label>
								<select id="txtOccasion" class="form-control" name="txtOccasion" required>
									<option selected>Choose...</option>
									<option value="3rd Ramjan">৩রা রমজান</option>
									<option value="Shobe Borat">শবে বরাত</option>
									<option value="Shobe Kodor">শবে কদর</option>
									<option value="Eid ul Fitr">ঈদ উল ফিতর</option>
									<option value="Eid ul Azha">ঈদ উল আজহা</option>
									<option value="Mohrom">মহরম</option>
									<option value="Merajunnabi">মেরাজুন্নবী</option>
									<option value="Miladunnabi">মিলাদুন্নবী</option>
									<option value="Fateha Yazdaham">ফাতেহা ইয়াজদাহম</option>
									<option value="Fateha Yazdaham">সালানা ওরসে গাউছুল আজম (রা:)</option>
								</select>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Duty / দায়িত্ব : <span class="text-danger">*</span></label>
								<select id="txtDuty" class="form-control" name="txtDuty" required>
									<option selected>Choose...</option>
									<option value="Decoretion">শৃঙ্খলা </option>
									<option value="Discipline">আপ্যায়ন</option>
									<option value="Entertain">ডেকোরেশন </option>
									<option value="Stage">শৌচাগার </option>
									<option value="Lighting">অতিথী আপ্যায়ন</option>
									<option value="CCTV">প্রশাসনিক </option>
									<option value="Traffic">লাইটিং </option>
									<option value="Parking">Parking</option>
									<option value="Administration">মঞ্চ আপ্যায়ন </option>
									<option value="Reporting">সংবাদ </option>
									<option value="Sound System">অতিথী দাওয়াত </option>
									<option value="Washroom">মুদ্রন </option>
									<option value="Media">প্রচার </option>
									<option value="Printing">বাস্তবায়ন </option>
									<option value="Guest Invitation">বক্তা </option>
									<option value="Others">সঞ্চালক </option>
									<option value="Sound System">মঞ্চ নির্মান </option>
									<option value="Washroom">সোশাল মিডিয়া </option>
									<option value="Media">অতিথী বরন </option>
									<option value="Printing">প্রধান অতিথীর নিরপত্তা </option>
									<option value="Guest Invitation">সাউন্ড সিষ্টেম </option>
									<option value="Others">সি সি টিভি </option>
									<option value="Printing">অনলাইন ব্রডকাস্ট </option>                            
								</select>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-form-label">Image / ছবি: <span class="text-danger">*</span></label>
								<input type="file" name="filePhoto"  class="form-control" placeholder="image">
								
						      	
							</div>
							{{-- <img src="img/{{$member->photo}}" height="80px" width="85px"/> --}}

						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<img src="{{asset('img')}}/{{$member->photo}}" height="80px" width="85px"/>
							
						      	
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
						<input class="btn btn-primary submit-btn" type="submit"  name="btnUpdate" value="Update">

					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /Edit Employee Modal -->



@endsection

@extends('layout.erp.home')
@section('page')

{{-- <a class='btn btn-success' href="{{route('members.index')}}">Manage</a>
<table class='table'>
	<tr><th>Member Id</th><td>{{$member->id}}</td></tr>
	<tr><th>Name</th><td>{{$member->name}}</td></tr>
	<tr><th>Phone</th><td>{{$member->phone}}</td></tr>
	<tr><th>Email</th><td>{{$member->email}}</td></tr> --}}
	

	{{-- <tr><th>Date Birth</th><td>{{$member->date_birth}}</td></tr>
	<tr><th>Father</th><td>{{$member->father}}</td></tr>
	<tr><th>Mother</th><td>{{$member->mother}}</td></tr>
	<tr><th>Family Member</th><td>{{$member->family_member}}</td></tr>
	<tr><th>Blood Group</th><td>{{$member->blood_group}}</td></tr>
	<tr><th>Gender</th><td>{{$member->gender}}</td></tr>
	<tr><th>Eduction Type</th><td>{{$member->eduction_type}}</td></tr>
	<tr><th>Education Skill</th><td>{{$member->education_skill}}</td></tr>
	<tr><th>Occupation</th><td>{{$member->occupation}}</td></tr>
	<tr><th>Workplace</th><td>{{$member->workplace}}</td></tr>
	<tr><th>Country</th><td>{{$member->country}}</td></tr>
	<tr><th>Presentadd</th><td>{{$member->presentadd}}</td></tr>
	<tr><th>Parmanentadd</th><td>{{$member->parmanentadd}}</td></tr>
	<tr><th>Workplace Address</th><td>{{$member->workplace_address}}</td></tr>
	<tr><th>Relationship</th><td>{{$member->relationship}}</td></tr>
	<tr><th>Nid</th><td>{{$member->nid}}</td></tr>
	<tr><th>Image</th><td>{{$member->image}}</td></tr>
	<tr><th>Torikot Date</th><td>{{$member->torikot_date}}</td></tr>
	<tr><th>Sobok Type</th><td>{{$member->sobok_type}}</td></tr>
	<tr><th>Brunch Id</th><td>{{$member->brunch_id}}</td></tr>
	<tr><th>Brunch Name</th><td>{{$member->brunch_name}}</td></tr>
	<tr><th>Baiyat Date</th><td>{{$member->baiyat_date}}</td></tr>
	<tr><th>Donation Box Id</th><td>{{$member->donation_box_id}}</td></tr>
	<tr><th>Occasion</th><td>{{$member->occasion}}</td></tr>
	<tr><th>Duty</th><td>{{$member->duty}}</td></tr>
	<tr><th>Deleted At</th><td>{{$member->deleted_at}}</td></tr>
	<tr><th>Created At</th><td>{{$member->created_at}}</td></tr>
	<tr><th>Updated At</th><td>{{$member->updated_at}}</td></tr> --}}

{{-- </table> --}}
<!-- Page Content -->
<div class="content container-fluid">
				
	<!-- Page Header -->
	<div class="page-header">
		<div class="row">
			<div class="col-sm-12">
				<h3 class="page-title">Profile</h3>
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
					<li class="breadcrumb-item active">Profile</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /Page Header -->
	
	<div class="card mb-0">
		<div class="card-body">
			<div class="row">
				<div class="col-md-12">
					<div class="profile-view">
						<div class="profile-img-wrap">
							<div class="profile-img">
								<a href="#"><img src="{{asset('img')}}/{{$member->photo}}" height="80px" width="85px"/></a>
							</div>
						</div>
						<div class="profile-basic">
							<div class="row">
								<div class="col-md-5">
									<div class="profile-info-left">
										<h3 class="user-name m-t-0 mb-0">{{$member->name}}</h3>
										<h6 class="text-muted">{{$member->education_skill}}</h6>
										<small class="text-muted">{{$member->occupation}}</small>
										<div class="staff-id">Member ID : FT-{{$member->id}}</div>
										<div class="small doj text-muted">Date of Bayat : {{$member->baiyat_date}}</div>
										<div class="staff-msg"><a class="btn btn-custom" href="chat.html">Send Message</a></div>
									</div>
								</div>
								<div class="col-md-7">
									<ul class="personal-info">
										<li>
											<div class="title">Phone:</div>
											<div class="text"><a href="">{{$member->phone}}</a></div>
										</li>
										<li>
											<div class="title">Email:</div>
											<div class="text"><a href="">{{$member->email}}</a></div>
										</li>
										<li>
											<div class="title">Birthday:</div>
											<div class="text">{{$member->date_birth}}</div>
										</li>
										<li>
											<div class="title">Address:</div>
											<div class="text">{{$member->presentadd}}</div>
										</li>
										<li>
											<div class="title">Gender:</div>
											<div class="text">{{$member->gender}}</div>
										</li>
										<li>
											<div class="title">Reports to:</div>
											<div class="text">
											   <div class="avatar-box">
												  <div class="avatar avatar-xs">
													<img src="{{asset('img')}}/{{$member->photo}}" />
												  </div>
											   </div>
											   <a href="profile.html">
												{{$member->name}}
												</a>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="pro-edit"><a data-target="#profile_info" data-toggle="modal" class="edit-icon" href="#"><i class="fa fa-pencil"></i></a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="card tab-box">
		<div class="row user-tabs">
			<div class="col-lg-12 col-md-12 col-sm-12 line-tabs">
				<ul class="nav nav-tabs nav-tabs-bottom">
					<li class="nav-item"><a href="#emp_profile" data-toggle="tab" class="nav-link active">Profile</a></li>
					<li class="nav-item"><a href="#emp_projects" data-toggle="tab" class="nav-link">Projects</a></li>
					<li class="nav-item"><a href="#bank_statutory" data-toggle="tab" class="nav-link">Bank & Statutory <small class="text-danger">(Admin Only)</small></a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<div class="tab-content">
	
		<!-- Profile Info Tab -->
		<div id="emp_profile" class="pro-overview tab-pane fade show active">
			<div class="row">
				<div class="col-md-6 d-flex">
					<div class="card profile-box flex-fill">
						<div class="card-body">
							<h3 class="card-title">Personal Informations <a href="#" class="edit-icon" data-toggle="modal" data-target="#personal_info_modal"><i class="fa fa-pencil"></i></a></h3>
							<ul class="personal-info">
								<li>
									<div class="title">N-ID No.</div>
									<div class="text">{{$member->nid}}</div>
								</li>
								
								<li>
									<div class="title">Tel</div>
									<div class="text"><a href="">{{$member->phone}}</a></div>
								</li>
								<li>
									<div class="title">Nationality</div>
									<div class="text">{{$member->country}}</div>
								</li>
								<li>
									<div class="title">Blood Group</div>
									<div class="text">{{$member->blood_group}}</div>
								</li>
								<li>
									<div class="title">Marital status</div>
									<div class="text">{{$member->relationship}}</div>
								</li>
								<li>
									<div class="title">Employment of spouse</div>
									<div class="text">No</div>
								</li>
								<li>
									<div class="title">No. of Family Member</div>
									<div class="text">{{$member->family_member}}</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-6 d-flex">
					<div class="card profile-box flex-fill">
						<div class="card-body">
							<h2 class="card-title">Emergency Contact <a href="#" class="edit-icon" data-toggle="modal" data-target="#emergency_contact_modal"><i class="fa fa-pencil"></i></a></h2>
							<h5 class="section-title">Primary</h5>
							<ul class="personal-info">
								<li>
									<div class="title">Name</div>
									<div class="text">{{$member->father}}</div>
								</li>
								
								<li>
									<div class="title">Phone </div>
									<div class="text">{{$member->phone}}</div>
								</li>
							</ul>
							<hr>
							<h5 class="section-title">Secondary</h5>
							<ul class="personal-info">
								<li>
									<div class="title">Name</div>
									<div class="text">{{$member->mother}}</div>
								</li>
								
								<li>
									<div class="title">Phone </div>
									<div class="text">{{$member->phone}}</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 d-flex">
					<div class="card profile-box flex-fill">
						<div class="card-body">
							<h3 class="card-title">Baiyat information</h3>
							<ul class="personal-info">
								<li>
									<div class="title">Torikot Date</div>
									<div class="text">{{$member->torikot_date}}</div>
								</li>
								<li>
									<div class="title">Sobok Type</div>
									<div class="text">{{$member->sobok_type}}</div>
								</li>
								<li>
									<div class="title">Baiyat Date</div>
									<div class="text">{{$member->baiyat_date}}</div>
								</li>
								<li>
									<div class="title">Occasion</div>
									<div class="text">{{$member->occasion}}</div>
								</li>
								<li>
									<div class="title">Duty</div>
									<div class="text">{{$member->duty}}</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-6 d-flex">
					<div class="card profile-box flex-fill">
						<div class="card-body">
							<h3 class="card-title">Brunch Informations <a href="#" class="edit-icon" data-toggle="modal" data-target="#family_info_modal"><i class="fa fa-pencil"></i></a></h3>
							<div class="table-responsive">
								<table class="table table-nowrap">
									<thead>
										<tr>
											<th>Brunch ID</th>
											<th>Brunch Name</th>
											<th>Baiyat Date</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>{{$member->brunch_id}}</td>
											<td>{{$member->brunch_name}}</td>
											<td>{{$member->baiyat_date}}</td>
											{{-- <td class="text-right">
												<div class="dropdown dropdown-action">
													<a aria-expanded="false" data-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a href="#" class="dropdown-item"><i class="fa fa-pencil m-r-5"></i> Edit</a>
														<a href="#" class="dropdown-item"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td> --}}
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 d-flex">
					<div class="card profile-box flex-fill">
						<div class="card-body">
							<h3 class="card-title">Education Informations <a href="#" class="edit-icon" data-toggle="modal" data-target="#education_info"><i class="fa fa-pencil"></i></a></h3>
							<div class="experience-box">
								<ul class="experience-list">
									<li>
										<div class="experience-user">
											<div class="before-circle"></div>
										</div>
										<div class="experience-content">
											<div class="timeline-content">
												<a href="#/" class="name">{{$member->eduction_type}}</a>
												<div>{{$member->education_skill}}</div>
												<span class="time">2000 - 2003</span>
											</div>
										</div>
									</li>
									{{-- <li>
										<div class="experience-user">
											<div class="before-circle"></div>
										</div>
										<div class="experience-content">
											<div class="timeline-content">
												<a href="#/" class="name">International College of Arts and Science (PG)</a>
												<div>Msc Computer Science</div>
												<span class="time">2000 - 2003</span>
											</div>
										</div>
									</li> --}}
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 d-flex">
					<div class="card profile-box flex-fill">
						<div class="card-body">
							<h3 class="card-title">Experience <a href="#" class="edit-icon" data-toggle="modal" data-target="#experience_info"><i class="fa fa-pencil"></i></a></h3>
							<div class="experience-box">
								<ul class="experience-list">
									<li>
										<div class="experience-user">
											<div class="before-circle"></div>
										</div>
										<div class="experience-content">
											<div class="timeline-content">
												<a href="#/" class="name">Web Designer at Zen Corporation</a>
												<span class="time">Jan 2013 - Present (5 years 2 months)</span>
											</div>
										</div>
									</li>
									<li>
										<div class="experience-user">
											<div class="before-circle"></div>
										</div>
										<div class="experience-content">
											<div class="timeline-content">
												<a href="#/" class="name">Web Designer at Ron-tech</a>
												<span class="time">Jan 2013 - Present (5 years 2 months)</span>
											</div>
										</div>
									</li>
									<li>
										<div class="experience-user">
											<div class="before-circle"></div>
										</div>
										<div class="experience-content">
											<div class="timeline-content">
												<a href="#/" class="name">Web Designer at Dalt Technology</a>
												<span class="time">Jan 2013 - Present (5 years 2 months)</span>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Profile Info Tab -->
		
		<!-- Projects Tab -->
		<div class="tab-pane fade" id="emp_projects">
			<div class="row">
				<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
					<div class="card">
						<div class="card-body">
							<div class="dropdown profile-action">
								<a aria-expanded="false" data-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
								<div class="dropdown-menu dropdown-menu-right">
									<a data-target="#edit_project" data-toggle="modal" href="#" class="dropdown-item"><i class="fa fa-pencil m-r-5"></i> Edit</a>
									<a data-target="#delete_project" data-toggle="modal" href="#" class="dropdown-item"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
								</div>
							</div>
							<h4 class="project-title"><a href="project-view.html">Office Management</a></h4>
							<small class="block text-ellipsis m-b-15">
								<span class="text-xs">1</span> <span class="text-muted">open tasks, </span>
								<span class="text-xs">9</span> <span class="text-muted">tasks completed</span>
							</small>
							<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
								typesetting industry. When an unknown printer took a galley of type and
								scrambled it...
							</p>
							<div class="pro-deadline m-b-15">
								<div class="sub-title">
									Deadline:
								</div>
								<div class="text-muted">
									17 Apr 2019
								</div>
							</div>
							<div class="project-members m-b-15">
								<div>Project Leader :</div>
								<ul class="team-members">
									<li>
										<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
									</li>
								</ul>
							</div>
							<div class="project-members m-b-15">
								<div>Team :</div>
								<ul class="team-members">
									<li>
										<a href="#" data-toggle="tooltip" title="John Doe"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
									</li>
									<li>
										<a href="#" data-toggle="tooltip" title="Richard Miles"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
									</li>
									<li>
										<a href="#" data-toggle="tooltip" title="John Smith"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
									</li>
									<li>
										<a href="#" data-toggle="tooltip" title="Mike Litorus"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
									</li>
									<li>
										<a href="#" class="all-users">+15</a>
									</li>
								</ul>
							</div>
							<p class="m-b-5">Progress <span class="text-success float-right">40%</span></p>
							<div class="progress progress-xs mb-0">
								<div style="width: 40%" title="" data-toggle="tooltip" role="progressbar" class="progress-bar bg-success" data-original-title="40%"></div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
					<div class="card">
						<div class="card-body">
							<div class="dropdown profile-action">
								<a aria-expanded="false" data-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
								<div class="dropdown-menu dropdown-menu-right">
									<a data-target="#edit_project" data-toggle="modal" href="#" class="dropdown-item"><i class="fa fa-pencil m-r-5"></i> Edit</a>
									<a data-target="#delete_project" data-toggle="modal" href="#" class="dropdown-item"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
								</div>
							</div>
							<h4 class="project-title"><a href="project-view.html">Project Management</a></h4>
							<small class="block text-ellipsis m-b-15">
								<span class="text-xs">2</span> <span class="text-muted">open tasks, </span>
								<span class="text-xs">5</span> <span class="text-muted">tasks completed</span>
							</small>
							<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
								typesetting industry. When an unknown printer took a galley of type and
								scrambled it...
							</p>
							<div class="pro-deadline m-b-15">
								<div class="sub-title">
									Deadline:
								</div>
								<div class="text-muted">
									17 Apr 2019
								</div>
							</div>
							<div class="project-members m-b-15">
								<div>Project Leader :</div>
								<ul class="team-members">
									<li>
										<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
									</li>
								</ul>
							</div>
							<div class="project-members m-b-15">
								<div>Team :</div>
								<ul class="team-members">
									<li>
										<a href="#" data-toggle="tooltip" title="John Doe"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
									</li>
									<li>
										<a href="#" data-toggle="tooltip" title="Richard Miles"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
									</li>
									<li>
										<a href="#" data-toggle="tooltip" title="John Smith"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
									</li>
									<li>
										<a href="#" data-toggle="tooltip" title="Mike Litorus"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
									</li>
									<li>
										<a href="#" class="all-users">+15</a>
									</li>
								</ul>
							</div>
							<p class="m-b-5">Progress <span class="text-success float-right">40%</span></p>
							<div class="progress progress-xs mb-0">
								<div style="width: 40%" title="" data-toggle="tooltip" role="progressbar" class="progress-bar bg-success" data-original-title="40%"></div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
					<div class="card">
						<div class="card-body">
							<div class="dropdown profile-action">
								<a aria-expanded="false" data-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
								<div class="dropdown-menu dropdown-menu-right">
									<a data-target="#edit_project" data-toggle="modal" href="#" class="dropdown-item"><i class="fa fa-pencil m-r-5"></i> Edit</a>
									<a data-target="#delete_project" data-toggle="modal" href="#" class="dropdown-item"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
								</div>
							</div>
							<h4 class="project-title"><a href="project-view.html">Video Calling App</a></h4>
							<small class="block text-ellipsis m-b-15">
								<span class="text-xs">3</span> <span class="text-muted">open tasks, </span>
								<span class="text-xs">3</span> <span class="text-muted">tasks completed</span>
							</small>
							<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
								typesetting industry. When an unknown printer took a galley of type and
								scrambled it...
							</p>
							<div class="pro-deadline m-b-15">
								<div class="sub-title">
									Deadline:
								</div>
								<div class="text-muted">
									17 Apr 2019
								</div>
							</div>
							<div class="project-members m-b-15">
								<div>Project Leader :</div>
								<ul class="team-members">
									<li>
										<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
									</li>
								</ul>
							</div>
							<div class="project-members m-b-15">
								<div>Team :</div>
								<ul class="team-members">
									<li>
										<a href="#" data-toggle="tooltip" title="John Doe"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
									</li>
									<li>
										<a href="#" data-toggle="tooltip" title="Richard Miles"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
									</li>
									<li>
										<a href="#" data-toggle="tooltip" title="John Smith"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
									</li>
									<li>
										<a href="#" data-toggle="tooltip" title="Mike Litorus"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
									</li>
									<li>
										<a href="#" class="all-users">+15</a>
									</li>
								</ul>
							</div>
							<p class="m-b-5">Progress <span class="text-success float-right">40%</span></p>
							<div class="progress progress-xs mb-0">
								<div style="width: 40%" title="" data-toggle="tooltip" role="progressbar" class="progress-bar bg-success" data-original-title="40%"></div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-sm-6 col-md-4 col-xl-3">
					<div class="card">
						<div class="card-body">
							<div class="dropdown profile-action">
								<a aria-expanded="false" data-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
								<div class="dropdown-menu dropdown-menu-right">
									<a data-target="#edit_project" data-toggle="modal" href="#" class="dropdown-item"><i class="fa fa-pencil m-r-5"></i> Edit</a>
									<a data-target="#delete_project" data-toggle="modal" href="#" class="dropdown-item"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
								</div>
							</div>
							<h4 class="project-title"><a href="project-view.html">Hospital Administration</a></h4>
							<small class="block text-ellipsis m-b-15">
								<span class="text-xs">12</span> <span class="text-muted">open tasks, </span>
								<span class="text-xs">4</span> <span class="text-muted">tasks completed</span>
							</small>
							<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
								typesetting industry. When an unknown printer took a galley of type and
								scrambled it...
							</p>
							<div class="pro-deadline m-b-15">
								<div class="sub-title">
									Deadline:
								</div>
								<div class="text-muted">
									17 Apr 2019
								</div>
							</div>
							<div class="project-members m-b-15">
								<div>Project Leader :</div>
								<ul class="team-members">
									<li>
										<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img alt="" src="assets/img/profiles/avatar-16.jpg"></a>
									</li>
								</ul>
							</div>
							<div class="project-members m-b-15">
								<div>Team :</div>
								<ul class="team-members">
									<li>
										<a href="#" data-toggle="tooltip" title="John Doe"><img alt="" src="assets/img/profiles/avatar-02.jpg"></a>
									</li>
									<li>
										<a href="#" data-toggle="tooltip" title="Richard Miles"><img alt="" src="assets/img/profiles/avatar-09.jpg"></a>
									</li>
									<li>
										<a href="#" data-toggle="tooltip" title="John Smith"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
									</li>
									<li>
										<a href="#" data-toggle="tooltip" title="Mike Litorus"><img alt="" src="assets/img/profiles/avatar-05.jpg"></a>
									</li>
									<li>
										<a href="#" class="all-users">+15</a>
									</li>
								</ul>
							</div>
							<p class="m-b-5">Progress <span class="text-success float-right">40%</span></p>
							<div class="progress progress-xs mb-0">
								<div style="width: 40%" title="" data-toggle="tooltip" role="progressbar" class="progress-bar bg-success" data-original-title="40%"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Projects Tab -->
		
		<!-- Bank Statutory Tab -->
		<div class="tab-pane fade" id="bank_statutory">
			<div class="card">
				<div class="card-body">
					<h3 class="card-title"> Basic Salary Information</h3>
					<form>
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Salary basis <span class="text-danger">*</span></label>
									<select class="select">
										<option>Select salary basis type</option>
										<option>Hourly</option>
										<option>Daily</option>
										<option>Weekly</option>
										<option>Monthly</option>
									</select>
							   </div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Salary amount <small class="text-muted">per month</small></label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">$</span>
										</div>
										<input type="text" class="form-control" placeholder="Type your salary amount" value="0.00">
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Payment type</label>
									<select class="select">
										<option>Select payment type</option>
										<option>Bank transfer</option>
										<option>Check</option>
										<option>Cash</option>
									</select>
							   </div>
							</div>
						</div>
						<hr>
						<h3 class="card-title"> PF Information</h3>
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">PF contribution</label>
									<select class="select">
										<option>Select PF contribution</option>
										<option>Yes</option>
										<option>No</option>
									</select>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">PF No. <span class="text-danger">*</span></label>
									<select class="select">
										<option>Select PF contribution</option>
										<option>Yes</option>
										<option>No</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Employee PF rate</label>
									<select class="select">
										<option>Select PF contribution</option>
										<option>Yes</option>
										<option>No</option>
									</select>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Additional rate <span class="text-danger">*</span></label>
									<select class="select">
										<option>Select additional rate</option>
										<option>0%</option>
										<option>1%</option>
										<option>2%</option>
										<option>3%</option>
										<option>4%</option>
										<option>5%</option>
										<option>6%</option>
										<option>7%</option>
										<option>8%</option>
										<option>9%</option>
										<option>10%</option>
									</select>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Total rate</label>
									<input type="text" class="form-control" placeholder="N/A" value="11%">
								</div>
							</div>
					   </div>
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Employee PF rate</label>
									<select class="select">
										<option>Select PF contribution</option>
										<option>Yes</option>
										<option>No</option>
									</select>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Additional rate <span class="text-danger">*</span></label>
									<select class="select">
										<option>Select additional rate</option>
										<option>0%</option>
										<option>1%</option>
										<option>2%</option>
										<option>3%</option>
										<option>4%</option>
										<option>5%</option>
										<option>6%</option>
										<option>7%</option>
										<option>8%</option>
										<option>9%</option>
										<option>10%</option>
									</select>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Total rate</label>
									<input type="text" class="form-control" placeholder="N/A" value="11%">
								</div>
							</div>
						</div>
						
						<hr>
						<h3 class="card-title"> ESI Information</h3>
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">ESI contribution</label>
									<select class="select">
										<option>Select ESI contribution</option>
										<option>Yes</option>
										<option>No</option>
									</select>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">ESI No. <span class="text-danger">*</span></label>
									<select class="select">
										<option>Select ESI contribution</option>
										<option>Yes</option>
										<option>No</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Employee ESI rate</label>
									<select class="select">
										<option>Select ESI contribution</option>
										<option>Yes</option>
										<option>No</option>
									</select>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Additional rate <span class="text-danger">*</span></label>
									<select class="select">
										<option>Select additional rate</option>
										<option>0%</option>
										<option>1%</option>
										<option>2%</option>
										<option>3%</option>
										<option>4%</option>
										<option>5%</option>
										<option>6%</option>
										<option>7%</option>
										<option>8%</option>
										<option>9%</option>
										<option>10%</option>
									</select>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-form-label">Total rate</label>
									<input type="text" class="form-control" placeholder="N/A" value="11%">
								</div>
							</div>
					   </div>
						
						<div class="submit-section">
							<button class="btn btn-primary submit-btn" type="submit">Save</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Bank Statutory Tab -->
		
	</div>
</div>
<!-- /Page Content -->

<!-- Profile Modal -->
<div id="profile_info" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Profile Information</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{route('members.update',$member->id)}}" method="post" enctype="multipart/form-data">
					@csrf
					@method("PUT")
					<div class="row">
						<div class="col-md-12">
							<div class="profile-img-wrap edit-img">
							
								<img class="inline-block" src="{{asset('img')}}/{{$member->photo}}" alt="user"/>
								<div class="fileupload btn">
									<span class="btn-text">edit</span>
									<input type="file" name="filePhoto" class="upload" type="file">
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label> Name</label>
										<input type="hidden"  value="{{ $member->id }}" id="cmbMemberId" name="cmbMemberId" >

								<input type="text" class="form-control" value="{{ $member->name }}" id="txtName" name="txtName" placeholder="Enter Full Name" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Last Name</label>
										<input type="text" class="form-control" value="Doe">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Birth Date</label>
										<div class="cal-icon">
											<input class="form-control datetimepicker" type="text" value="05/06/1985">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Gender</label>
										<select class="select form-control">
											<option value="male selected">Male</option>
											<option value="female">Female</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Address</label>
								<input type="text" class="form-control" value="4487 Snowbird Lane">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>State</label>
								<input type="text" class="form-control" value="New York">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Country</label>
								<input type="text" class="form-control" value="United States">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Pin Code</label>
								<input type="text" class="form-control" value="10523">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" class="form-control" value="631-889-3206">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Department <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select Department</option>
									<option>Web Development</option>
									<option>IT Management</option>
									<option>Marketing</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Designation <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select Designation</option>
									<option>Web Designer</option>
									<option>Web Developer</option>
									<option>Android Developer</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Reports To <span class="text-danger">*</span></label>
								<select class="select">
									<option>-</option>
									<option>Wilmer Deluna</option>
									<option>Lesley Grauer</option>
									<option>Jeffery Lalor</option>
								</select>
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
<!-- /Profile Modal -->

<!-- Personal Info Modal -->
<div id="personal_info_modal" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Personal Information</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Passport No</label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Passport Expiry Date</label>
								<div class="cal-icon">
									<input class="form-control datetimepicker" type="text">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Tel</label>
								<input class="form-control" type="text">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Nationality <span class="text-danger">*</span></label>
								<input class="form-control" type="text">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Religion</label>
								<div class="cal-icon">
									<input class="form-control" type="text">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Marital status <span class="text-danger">*</span></label>
								<select class="select form-control">
									<option>-</option>
									<option>Single</option>
									<option>Married</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Employment of spouse</label>
								<input class="form-control" type="text">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>No. of children </label>
								<input class="form-control" type="text">
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
<!-- /Personal Info Modal -->

<!-- Family Info Modal -->
<div id="family_info_modal" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"> Family Informations</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-scroll">
						<div class="card">
							<div class="card-body">
								<h3 class="card-title">Family Member <a href="javascript:void(0);" class="delete-icon"><i class="fa fa-trash-o"></i></a></h3>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Name <span class="text-danger">*</span></label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Relationship <span class="text-danger">*</span></label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Date of birth <span class="text-danger">*</span></label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Phone <span class="text-danger">*</span></label>
											<input class="form-control" type="text">
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="card">
							<div class="card-body">
								<h3 class="card-title">Education Informations <a href="javascript:void(0);" class="delete-icon"><i class="fa fa-trash-o"></i></a></h3>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Name <span class="text-danger">*</span></label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Relationship <span class="text-danger">*</span></label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Date of birth <span class="text-danger">*</span></label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Phone <span class="text-danger">*</span></label>
											<input class="form-control" type="text">
										</div>
									</div>
								</div>
								<div class="add-more">
									<a href="javascript:void(0);"><i class="fa fa-plus-circle"></i> Add More</a>
								</div>
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
<!-- /Family Info Modal -->

<!-- Emergency Contact Modal -->
<div id="emergency_contact_modal" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Personal Information</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="card">
						<div class="card-body">
							<h3 class="card-title">Primary Contact</h3>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Name <span class="text-danger">*</span></label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Relationship <span class="text-danger">*</span></label>
										<input class="form-control" type="text">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Phone <span class="text-danger">*</span></label>
										<input class="form-control" type="text">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Phone 2</label>
										<input class="form-control" type="text">
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="card">
						<div class="card-body">
							<h3 class="card-title">Primary Contact</h3>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Name <span class="text-danger">*</span></label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Relationship <span class="text-danger">*</span></label>
										<input class="form-control" type="text">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Phone <span class="text-danger">*</span></label>
										<input class="form-control" type="text">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Phone 2</label>
										<input class="form-control" type="text">
									</div>
								</div>
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
<!-- /Emergency Contact Modal -->

<!-- Education Modal -->
<div id="education_info" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"> Education Informations</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-scroll">
						<div class="card">
							<div class="card-body">
								<h3 class="card-title">Education Informations <a href="javascript:void(0);" class="delete-icon"><i class="fa fa-trash-o"></i></a></h3>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group form-focus focused">
											<input type="text" value="Oxford University" class="form-control floating">
											<label class="focus-label">Institution</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-focus focused">
											<input type="text" value="Computer Science" class="form-control floating">
											<label class="focus-label">Subject</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-focus focused">
											<div class="cal-icon">
												<input type="text" value="01/06/2002" class="form-control floating datetimepicker">
											</div>
											<label class="focus-label">Starting Date</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-focus focused">
											<div class="cal-icon">
												<input type="text" value="31/05/2006" class="form-control floating datetimepicker">
											</div>
											<label class="focus-label">Complete Date</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-focus focused">
											<input type="text" value="BE Computer Science" class="form-control floating">
											<label class="focus-label">Degree</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-focus focused">
											<input type="text" value="Grade A" class="form-control floating">
											<label class="focus-label">Grade</label>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="card">
							<div class="card-body">
								<h3 class="card-title">Education Informations <a href="javascript:void(0);" class="delete-icon"><i class="fa fa-trash-o"></i></a></h3>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group form-focus focused">
											<input type="text" value="Oxford University" class="form-control floating">
											<label class="focus-label">Institution</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-focus focused">
											<input type="text" value="Computer Science" class="form-control floating">
											<label class="focus-label">Subject</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-focus focused">
											<div class="cal-icon">
												<input type="text" value="01/06/2002" class="form-control floating datetimepicker">
											</div>
											<label class="focus-label">Starting Date</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-focus focused">
											<div class="cal-icon">
												<input type="text" value="31/05/2006" class="form-control floating datetimepicker">
											</div>
											<label class="focus-label">Complete Date</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-focus focused">
											<input type="text" value="BE Computer Science" class="form-control floating">
											<label class="focus-label">Degree</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-focus focused">
											<input type="text" value="Grade A" class="form-control floating">
											<label class="focus-label">Grade</label>
										</div>
									</div>
								</div>
								<div class="add-more">
									<a href="javascript:void(0);"><i class="fa fa-plus-circle"></i> Add More</a>
								</div>
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
<!-- /Education Modal -->

<!-- Experience Modal -->
<div id="experience_info" class="modal custom-modal fade" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Experience Informations</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-scroll">
						<div class="card">
							<div class="card-body">
								<h3 class="card-title">Experience Informations <a href="javascript:void(0);" class="delete-icon"><i class="fa fa-trash-o"></i></a></h3>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group form-focus">
											<input type="text" class="form-control floating" value="Digital Devlopment Inc">
											<label class="focus-label">Company Name</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-focus">
											<input type="text" class="form-control floating" value="United States">
											<label class="focus-label">Location</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-focus">
											<input type="text" class="form-control floating" value="Web Developer">
											<label class="focus-label">Job Position</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-focus">
											<div class="cal-icon">
												<input type="text" class="form-control floating datetimepicker" value="01/07/2007">
											</div>
											<label class="focus-label">Period From</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-focus">
											<div class="cal-icon">
												<input type="text" class="form-control floating datetimepicker" value="08/06/2018">
											</div>
											<label class="focus-label">Period To</label>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="card">
							<div class="card-body">
								<h3 class="card-title">Experience Informations <a href="javascript:void(0);" class="delete-icon"><i class="fa fa-trash-o"></i></a></h3>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group form-focus">
											<input type="text" class="form-control floating" value="Digital Devlopment Inc">
											<label class="focus-label">Company Name</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-focus">
											<input type="text" class="form-control floating" value="United States">
											<label class="focus-label">Location</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-focus">
											<input type="text" class="form-control floating" value="Web Developer">
											<label class="focus-label">Job Position</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-focus">
											<div class="cal-icon">
												<input type="text" class="form-control floating datetimepicker" value="01/07/2007">
											</div>
											<label class="focus-label">Period From</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-focus">
											<div class="cal-icon">
												<input type="text" class="form-control floating datetimepicker" value="08/06/2018">
											</div>
											<label class="focus-label">Period To</label>
										</div>
									</div>
								</div>
								<div class="add-more">
									<a href="javascript:void(0);"><i class="fa fa-plus-circle"></i> Add More</a>
								</div>
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
<!-- /Experience Modal -->
@endsection

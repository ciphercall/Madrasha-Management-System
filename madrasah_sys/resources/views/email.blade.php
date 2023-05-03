@extends('layout.erp.home')
@section('page')
<!-- ///////////////////// -->
<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Tables</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Products List</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
                        <a href="{{url('/customer')}}">

							<button type="button" class="btn btn-primary">Settings</button></a>
							<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-7 mx-auto">
						
						<h2 class="mb-0 text-uppercase">Create New Email</h2>
						<hr/>
						<div class="card border-top border-0 border-4 border-danger">
							<div class="card-body p-5">
								<div class="card-title d-flex align-items-center">
									<div><i class="bx bxs-user me-1 font-22 text-danger"></i>
									</div>
									<h5 class="mb-0 text-danger">Add Product</h5>
								</div>
								<hr>
								<form class="row g-3" action="{{route('send-email')}}"  method="post" enctype="multipart/form-data">
                				  @csrf

								  <!-- <pre>@php
									  print_r($errors->all());
									  @endphp
								  </pre> -->
								  
								  @if(Session::has("success"))
                            <div class="alert alert-success alert-dismissible"><button type="button" class="close">&times;</button>{{Session::get('success')}}</div>
                        @elseif(Session::has("failed"))
                            <div class="alert alert-danger alert-dismissible"><button type="button" class="close">&times;</button>{{Session::get('failed')}}</div>
                        @endif
									<div class="col-md-6">
										<label for="inputLastName1" class="form-label">Email To</label>
										<div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-user'></i></span>
											<input type="text" class="form-control border-start-0" id="inputLastName1" placeholder="Email To" name="emailRecipient"/><br>
										
										</div>
										
									</div>
									<div class="col-md-6">
										<label for="inputLastName2" class="form-label">CC</label>
										<div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-user'></i></span>
											<input type="text" class="form-control border-start-0" id="inputLastName2" placeholder="Email CC" name="emailCc"/><br>
										
										</div>
										
									</div>
									<div class="col-12">
										<label for="inputPhoneNo" class="form-label">Email BCC</label>
										<div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-microphone' ></i></span>
											<input type="text" class="form-control border-start-0" id="inputPhoneNo" placeholder="Email BCC" name="emailBcc"/>
										</div>
									
									</div>
									<div class="col-12">
										<label for="inputEmailAddress" class="form-label">Email Subject</label>
										<div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-message' ></i></span>
											<input type="text" class="form-control border-start-0" id="inputEmailAddress" placeholder="Email Subject" name="emailSubject"/>
										</div>
									</div>
                                    	<div class="col-12">
										<label for="inputAddress3" class="form-label">Write Your Message</label>
										<textarea class="form-control" id="inputAddress3" placeholder="Enter Address" rows="3" name="emailBody"></textarea>
									</div>
									<div class="col-12">
										<label for="inputChoosePassword" class="form-label">Choose Photo</label>
										<div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-lock-open' ></i></span>
											<input type="file" multiple="multiple" class="form-control border-start-0" name="emailAttachments[]" />
										</div>
									</div>
									
								
									<div class="col-12">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" id="gridCheck2">
											<label class="form-check-label" for="gridCheck2">Check me out</label>
										</div>
									</div>
									<div class="col-12">
										<button type="submit" class="btn btn-danger px-5">Register</button>
									</div>
								</form>
							</div>
						</div>
						
					</div>
				</div>
			

</div>


  @endsection

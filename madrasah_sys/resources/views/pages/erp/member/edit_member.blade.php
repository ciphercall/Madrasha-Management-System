<!-- Edit Employee Modal -->
<div id="editModal" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Member</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{-- <form action="{{route('members.update',$member->id)}}" method="PUT" enctype="multipart/form-data"> --}}
                {{-- <form action="" method="post" enctype="multipart/form-data"> --}}

					<form action="{{url('member-update')}}"  method="POST" enctype="multipart/form-data">
						@csrf
						@method('PUT')
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">NAME / নাম : <span class="text-danger">*</span></label>
                                <input type="hidden" value="" id="cmbMemberId" name="cmbMemberId">

                                <input type="text" class="form-control" id="ename"
                                    name="txtName" placeholder="Enter Full Name" required>

                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">PHONE / ফোন :</label>
                                <input type="number" class="form-control" value="" id="ephone"
                                    name="txtPhone" placeholder="Enter Phone Number" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">EMAIL / ইমেইল : <span
                                        class="text-danger">*</span></label>
                                <input type="email" class="form-control"  id="eEmail"
                                    name="txtEmail" placeholder="Enter Your Email" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Date Birth / জন্ম তারিখ : <span
                                        class="text-danger">*</span></label>
                                <input type="date" class="form-control"
                                    id="edate_birth" name="txtDate_birth" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Father Name / পিতার নাম :</label>
                                <input type="text" class="form-control"  id="efather"
                                    name="txtFather" placeholder="Enter Father Name" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Mother Name / মাতার নাম: <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control"  id="eMother"
                                    name="txtMother" placeholder="Enter Mother Name" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Family/তরিক্বপন্থী সদস্য: <span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control"
                                    id="eFamily_member" name="txtFamily_member"
                                    placeholder="পরিবারে তরিক্বত পন্থী সদস্য" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Blood Group / রক্তের গ্রুপ:</label>
                                <select id="eBlood_group" class="form-control" name="txtBlood_group" required>
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
                                <label class="col-form-label">Gender / লিঙ্গ: <span
                                        class="text-danger">*</span></label>
                                <select id="eGender" class="form-control" name="txtGender" required>
                                    <option selected>Choose...</option>
                                    <option value="Male">পুরুষ</option>
                                    <option value="Female">মহিলা</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Eduction Type / শিক্ষার ধরন: <span
                                        class="text-danger">*</span></label>
                                <select id="eEduction_type" class="form-control" name="txtEduction_type" required>
                                    <option selected>Choose...</option>
                                    <option value="general">জেনারেল</option>
                                    <option value="madrasa">মাদ্রাসা</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Education/শিক্ষাগত যোগ্যতা:</label>
                                <input type="text" class="form-control" 
                                    id="eEducation_skill" name="txtEducation_skill"
                                    placeholder="Enter Educational Qualification" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Occupation / পেশা: <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" 
                                    id="eOccupation" name="txtOccupation" placeholder="Enter Occupation" required>
                            </div>
                        </div>
                  
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Workplace / কর্মস্থল: <span
                                        class="text-danger">*</span></label>
                                <select id="txtWorkplacee" class="form-control" name="txtWorkplace" >
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
                                <select id="txtCountrye" class="form-control" name="txtCountry" >
                                    {{-- <option selected>Choose...</option>
									<option value="Bangladesh">Bangladesh</option>
									<option value="usa">USA</option>
									<option value="soudi arob">Soudi Arob</option> --}}
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">State Name / বিভাগ নাম:</label>
                                <select id="txtCitye" class="form-control" name="txtCity" >
                                    {{-- <option selected>Choose...</option>
									<option value="Bangladesh">Bangladesh</option>
									<option value="usa">USA</option>
									<option value="soudi arob">Soudi Arob</option> --}}
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Present/বর্তমান ঠিকানা: <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control"
                                    id="ePresentadd" name="txtPresentadd" placeholder="Enter Present Address"
                                    required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Parmanent/স্থায়ী ঠিকানা: <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" 
                                    id="eParmanentadd" name="txtParmanentadd" placeholder="Enter Parmanent Address"
                                    required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">কর্মস্থলের ঠিকানা:</label>
                                <input type="text" class="form-control" 
                                    id="eWorkplace_address" name="txtWorkplace_address"
                                    placeholder="Enter Parmanent Address" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Relationship / বৈবাহিক অবস্থা: <span
                                        class="text-danger">*</span></label>
                                <select id="eRelationship" class="form-control" name="txtRelationship" required>
                                    <option selected>Choose...</option>
                                    <option value="Married">Married</option>
                                    <option value="Unmarried">Unmarried</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">NID / এনআইডি নম্বর: <span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control"  id="eNid"
                                    name="txtNid" placeholder="Enter Valid NID Number" required>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Donation Box/দান বাক্স নম্বর:</label>
                                <input type="number" class="form-control" 
                                    id="eDonation_boxId" name="cmbDonation_boxId" required>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Torikot Date/তরিক্বত তারিখ: <span
                                        class="text-danger">*</span></label>
                                <input type="date" class="form-control"
                                    id="eTorikot_date" name="txtTorikot_date" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Sobok Type / শেষ ছবক:</label>
                                <select id="eSobok_type" class="form-control" name="txtSobok_type" required>
                                    <option selected>Choose...</option>
                                    @foreach ($soboks as $sobok)
                                        <option value="{{ $sobok->id }}">{{ $sobok->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Brunch NO / শাখা নং: <span
                                        class="text-danger">*</span></label>
                                {{-- <input type="number" class="form-control" id="cmbBrunchId" name="cmbBrunchId" required> --}}
                                <select id="eBrunchId" class="form-control" name="cmbBrunchId" required>
                                    <option selected>Choose...</option>

                                    @foreach ($brunchs as $brunch)
                                        <option value="{{ $brunch->id }}">{{ $brunch->brunch_code }} |
                                            {{ $brunch->brunch_name }}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Brunch Name / শাখার নাম: <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" 
                                    id="eBrunch_name" name="txtBrunch_name" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Baiyat Date/বাইয়াত তারিখ:</label>
                                <input type="date" class="form-control" 
                                    id="eBaiyat_date" name="txtBaiyat_date" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Ocations / উপলক্ষ্য: <span
                                        class="text-danger">*</span></label>
                                <select id="eOccasion" class="form-control" name="txtOccasion" required>
                                    <option selected>Choose...</option>
                                    @foreach ($occasions as $occasion)
                                        <option value="{{ $occasion->id }}">{{ $occasion->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Duty / দায়িত্ব : <span
                                        class="text-danger">*</span></label>
                                <select id="eDuty" class="form-control" name="txtDuty" required>
                                    <option selected>Choose...</option>
                                    @foreach ($dutys as $du)
                                        <option value="{{ $du->id }}">{{ $du->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Designations / পদবি : <span
                                        class="text-danger">*</span></label>
                                <select id="eDesignation" class="form-control" name="txtDesignation" required>
                                    <option selected>Choose...</option>
                                    @foreach ($designations as $designation)
                                        <option value="{{ $designation->id }}">{{ $designation->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Image / ছবি: <span
                                        class="text-danger">*</span></label>
                                <input type="file" name="filePhoto" class="form-control"  placeholder="image">


                            </div>
                            {{-- <img src="img/{{$member->photo}}" height="80px" width="85px"/> --}}

                        </div>
                        <div class="col-sm-4">
                            <div class="form-group" id="eFilephoto">
                                {{-- <img src="img/{{$member->photo}}" height="80px" width="85px"/> --}}


                            </div>
                        </div>
                        
                    </div>
                    <div class="table-responsive m-t-15">
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
                    </div>
                    <div class="submit-section">
                        <input class="btn btn-primary submit-btn" type="submit" name="btnUpdate" value="Update">

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Edit Employee Modal -->
@section('scripts')

<script>
	$(document).ready(function(){
        $(document).on('click','#deletebtn',function(){
			var member_id=$(this).val();
            // alert(member_id);
			$('#deletemember').modal('show');
			$('#delete_memberId').val(member_id);
		});



		$(document).on('click','#editmember',function(){
			var member_id=$(this).val();
			// alert(member_id);
			$('#editModal').modal('show');
			$.ajax({
				type: "GET",
				url: "/edit-member/"+member_id,
				success:function(response){
					// console.log(response.member.name);
					$('#cmbMemberId').val(member_id);

					$('#ename').val(response.member.name);
					$('#ephone').val(response.member.phone);
					 $('#eEmail').val(response.member.email);
					$('#edate_birth').val(response.member.date_birth);
					$('#efather').val(response.member.father);
					$('#eMother').val(response.member.mother);
					$('#eFamily_member').val(response.member.family_member);
					$('#eBlood_group').val(response.member.blood_group);
					$('#eGender').val(response.member.gender);
					$('#eEduction_type').val(response.member.eduction_type);
					$('#eEducation_skill').val(response.member.education_skill);
					$('#eOccupation').val(response.member.occupation);
					$('#txtWorkplacee').val(response.member.workplace);
					$('#txtCountrye').val(response.member.country);
					$('#txtCitye').val(response.member.city);
					$('#ePresentadd').val(response.member.presentadd);
					$('#eParmanentadd').val(response.member.parmanentadd);
					$('#eWorkplace_address').val(response.member.workplace_address);
					$('#eRelationship').val(response.member.relationship);
					$('#eNid').val(response.member.nid);
					$('#eDonation_boxId').val(response.member.donation_box_id);
					$('#eTorikot_date').val(response.member.torikot_date);
					$('#eSobok_type').val(response.member.sobok_type);
					$('#eBrunchId').val(response.member.brunch_id);
					$('#eBrunch_name').val(response.member.brunch_name);
					$('#eBaiyat_date').val(response.member.baiyat_date);
					$('#eOccasion').val(response.member.occasion);
					$('#eDuty').val(response.member.duty);
					// $('#eFilephoto').removeAttr(response.member.photo);

                    $("#eFilephoto").html(
                        `<img src="img/${response.member.photo}" width="100" class="img-fluid img-thumbnail">`);
					$('#eDesignation').val(response.member.designation);
				
				}
			});
		});


        $('#txtWorkplacee').on('change', function() {

                var idCountry = this.value;
                $("#txtCountrye").html('');
                $.ajax({
                    url: "{{ url('api/fetch-country') }}",
                    type: "POST",
                    data: {
                        work_p_id: idCountry,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        $('#txtCountrye').html('<option value="">Select Country</option>');
                        $.each(result.countries, function(key, value) {
                            $("#txtCountrye").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                        $('#txtCitye').html('<option value="">Select City</option>');
                    }
                });
                });
                $('#txtCountrye').on('change', function() {
                var idState = this.value;
                $("#txtCitye").html('');
                $.ajax({
                    url: "{{ url('api/fetch-cities') }}",
                    type: "POST",
                    data: {
                        country_id: idState,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(res) {
                        $('#txtCitye').html('<option value="">Select City</option>');
                        $.each(res.cities, function(key, value) {
                            $("#txtCitye").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                    }
                });
        });
	});
</script>


@endsection




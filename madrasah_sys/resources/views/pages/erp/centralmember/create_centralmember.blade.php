@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{url('/centralmembers')}}">Manage</a>
<form action="{{route('centralmembers.store')}}" method="post" enctype="multipart/form-data">
	@csrf
	{!! input_field(["label"=>"Name","name"=>"txtName"]) !!}
	{!! input_field(["label"=>"Phone","name"=>"txtPhone"]) !!}
	{!! input_field(["label"=>"Email","name"=>"txtEmail"]) !!}
	{!! input_field(["label"=>"Date Birth","name"=>"txtDate_birth"]) !!}
	{!! input_field(["label"=>"Father","name"=>"txtFather"]) !!}
	{!! input_field(["label"=>"Mother","name"=>"txtMother"]) !!}
	{!! input_field(["label"=>"Family Member","name"=>"txtFamily_member"]) !!}
	{!! input_field(["label"=>"Blood Group","name"=>"txtBlood_group"]) !!}
	{!! input_field(["label"=>"Gender","name"=>"txtGender"]) !!}
	{!! input_field(["label"=>"Eduction Type","name"=>"txtEduction_type"]) !!}
	{!! input_field(["label"=>"Education Skill","name"=>"txtEducation_skill"]) !!}
	{!! input_field(["label"=>"Occupation","name"=>"txtOccupation"]) !!}
	{!! input_field(["label"=>"Workplace","name"=>"txtWorkplace"]) !!}
	{!! input_field(["label"=>"Country","name"=>"txtCountry"]) !!}
	{!! input_field(["label"=>"Presentadd","name"=>"txtPresentadd"]) !!}
	{!! input_field(["label"=>"Parmanentadd","name"=>"txtParmanentadd"]) !!}
	{!! input_field(["label"=>"Workplace Address","name"=>"txtWorkplace_address"]) !!}
	{!! input_field(["label"=>"Relationship","name"=>"txtRelationship"]) !!}
	{!! input_field(["label"=>"Nid","name"=>"txtNid"]) !!}
	{!! input_field(["label"=>"Image","name"=>"txtImage"]) !!}
	{!! input_field(["label"=>"Torikot Date","name"=>"txtTorikot_date"]) !!}
	{!! input_field(["label"=>"Sobok Type","name"=>"txtSobok_type"]) !!}
	{!! select_field(["label"=>"Brunch Id","name"=>"cmbBrunchId","table"=>$brunchs]) !!}
	{!! input_field(["label"=>"Brunch Name","name"=>"txtBrunch_name"]) !!}
	{!! input_field(["label"=>"Baiyat Date","name"=>"txtBaiyat_date"]) !!}
	{!! select_field(["label"=>"Donation Box Id","name"=>"cmbDonation_boxId","table"=>$donation_boxs]) !!}
	{!! input_field(["label"=>"Occasion","name"=>"txtOccasion"]) !!}
	{!! input_field(["label"=>"Duty","name"=>"txtDuty"]) !!}
	{!! input_field(["label"=>"Deleted At","name"=>"txtDeleted_at"]) !!}
	{!! input_field(["label"=>"Designation","name"=>"txtDesignation"]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnCreate","value"=>"Create"]) !!}
</form>

@endsection

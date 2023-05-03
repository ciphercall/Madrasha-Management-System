@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{url('/members')}}">Manage</a>
<form action="{{route('members.update',$member)}}" method="post" enctype="multipart/form-data">
	@csrf
	@method("PUT")
	{!! select_field(["label"=>"Member Id","name"=>"cmbMemberId","table"=>$members,"value"=>$member->member_id]) !!}
	{!! input_field(["label"=>"Name","name"=>"txtName","value"=>$member->name]) !!}
	{!! input_field(["label"=>"Phone","name"=>"txtPhone","value"=>$member->phone]) !!}
	{!! input_field(["label"=>"Email","name"=>"txtEmail","value"=>$member->email]) !!}
	{!! input_field(["label"=>"Date Birth","name"=>"txtDate_birth","value"=>$member->date_birth]) !!}
	{!! input_field(["label"=>"Father","name"=>"txtFather","value"=>$member->father]) !!}
	{!! input_field(["label"=>"Mother","name"=>"txtMother","value"=>$member->mother]) !!}
	{!! input_field(["label"=>"Family Member","name"=>"txtFamily_member","value"=>$member->family_member]) !!}
	{!! input_field(["label"=>"Blood Group","name"=>"txtBlood_group","value"=>$member->blood_group]) !!}
	{!! input_field(["label"=>"Gender","name"=>"txtGender","value"=>$member->gender]) !!}
	{!! input_field(["label"=>"Eduction Type","name"=>"txtEduction_type","value"=>$member->eduction_type]) !!}
	{!! input_field(["label"=>"Education Skill","name"=>"txtEducation_skill","value"=>$member->education_skill]) !!}
	{!! input_field(["label"=>"Occupation","name"=>"txtOccupation","value"=>$member->occupation]) !!}
	{!! input_field(["label"=>"Workplace","name"=>"txtWorkplace","value"=>$member->workplace]) !!}
	{!! input_field(["label"=>"Country","name"=>"txtCountry","value"=>$member->country]) !!}
	{!! input_field(["label"=>"Presentadd","name"=>"txtPresentadd","value"=>$member->presentadd]) !!}
	{!! input_field(["label"=>"Parmanentadd","name"=>"txtParmanentadd","value"=>$member->parmanentadd]) !!}
	{!! input_field(["label"=>"Workplace Address","name"=>"txtWorkplace_address","value"=>$member->workplace_address]) !!}
	{!! input_field(["label"=>"Relationship","name"=>"txtRelationship","value"=>$member->relationship]) !!}
	{!! input_field(["label"=>"Nid","name"=>"txtNid","value"=>$member->nid]) !!}
	{!! input_field(["label"=>"Image","name"=>"txtImage","value"=>$member->image]) !!}
	{!! input_field(["label"=>"Torikot Date","name"=>"txtTorikot_date","value"=>$member->torikot_date]) !!}
	{!! input_field(["label"=>"Sobok Type","name"=>"txtSobok_type","value"=>$member->sobok_type]) !!}
	{!! select_field(["label"=>"Brunch Id","name"=>"cmbBrunchId","table"=>$brunchs,"value"=>$member->brunch_id]) !!}
	{!! input_field(["label"=>"Brunch Name","name"=>"txtBrunch_name","value"=>$member->brunch_name]) !!}
	{!! input_field(["label"=>"Baiyat Date","name"=>"txtBaiyat_date","value"=>$member->baiyat_date]) !!}
	{!! select_field(["label"=>"Donation Box Id","name"=>"cmbDonation_boxId","table"=>$donation_boxs,"value"=>$member->donation_box_id]) !!}
	{!! input_field(["label"=>"Occasion","name"=>"txtOccasion","value"=>$member->occasion]) !!}
	{!! input_field(["label"=>"Duty","name"=>"txtDuty","value"=>$member->duty]) !!}
	{!! input_field(["label"=>"Deleted At","name"=>"txtDeleted_at","value"=>$member->deleted_at]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnUpdate","value"=>"Update"]) !!}
</form>

@endsection

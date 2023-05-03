@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{url('/volunteers')}}">Manage</a>
<form action="{{route('volunteers.store')}}" method="post" enctype="multipart/form-data">
	@csrf
	{!! select_field(["label"=>"Volunteer Id","name"=>"cmbVolunteerId","table"=>$volunteers]) !!}
	{!! select_field(["label"=>"Brunch Id","name"=>"cmbBrunchId","table"=>$brunchs]) !!}
	{!! input_field(["label"=>"Brunch Name","name"=>"txtBrunch_name"]) !!}
	{!! input_field(["label"=>"Baiyat Date","name"=>"txtBaiyat_date"]) !!}
	{!! select_field(["label"=>"Donation Box Id","name"=>"cmbDonation_boxId","table"=>$donation_boxs]) !!}
	{!! input_field(["label"=>"Occasion","name"=>"txtOccasion"]) !!}
	{!! input_field(["label"=>"Duty","name"=>"txtDuty"]) !!}
	{!! input_field(["label"=>"Deleted At","name"=>"txtDeleted_at"]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnCreate","value"=>"Create"]) !!}
</form>

@endsection

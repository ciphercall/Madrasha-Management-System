@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{url('/volunteers')}}">Manage</a>
<form action="{{route('volunteers.store')}}" method="post" enctype="multipart/form-data">
	@csrf
	{!! select_field(["label"=>"Brunch Id","name"=>"cmbBrunchId","table"=>$brunchs]) !!}
	{!! input_field(["label"=>"Brunch Name","name"=>"txtBrunch_name"]) !!}
	{!! select_field(["label"=>"Member Id","name"=>"cmbMemberId","table"=>$members]) !!}
	{!! input_field(["label"=>"Member Name","name"=>"txtMember_name"]) !!}
	{!! input_field(["label"=>"Phone","name"=>"txtPhone"]) !!}
	{!! input_field(["label"=>"Occasion","name"=>"txtOccasion"]) !!}
	{!! input_field(["label"=>"Duty","name"=>"txtDuty"]) !!}
	{!! input_field(["label"=>"Present Duty","name"=>"txtPresent_duty"]) !!}
	{!! input_field(["label"=>"Previous Duty","name"=>"txtPrevious_duty"]) !!}
	{!! input_field(["label"=>"Duty Date","name"=>"txtDuty_date"]) !!}
	{!! input_field(["label"=>"Place","name"=>"txtPlace"]) !!}
	{!! input_field(["label"=>"Comment","name"=>"txtComment"]) !!}
	{!! input_field(["label"=>"Deleted At","name"=>"txtDeleted_at"]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnCreate","value"=>"Create"]) !!}
</form>

@endsection

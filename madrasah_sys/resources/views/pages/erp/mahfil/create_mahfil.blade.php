@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{url('/mahfils')}}">Manage</a>
<form action="{{route('mahfils.store')}}" method="post" enctype="multipart/form-data">
	@csrf
	{!! select_field(["label"=>"Brunch Id","name"=>"cmbBrunchId","table"=>$brunchs]) !!}
	{!! input_field(["label"=>"Brunch Name","name"=>"txtBrunch_name"]) !!}
	{!! input_field(["label"=>"Start Date","name"=>"txtStart_date"]) !!}
	{!! input_field(["label"=>"End Date","name"=>"txtEnd_date"]) !!}
	{!! input_field(["label"=>"Start Time","name"=>"txtStart_time"]) !!}
	{!! input_field(["label"=>"End Time","name"=>"txtEnd_time"]) !!}
	{!! input_field(["label"=>"Num Speakers","name"=>"txtNum_speakers"]) !!}
	{!! input_field(["label"=>"Speakers","name"=>"txtSpeakers"]) !!}
	{!! input_field(["label"=>"Occasion","name"=>"txtOccasion"]) !!}
	{!! input_field(["label"=>"Address","name"=>"txtAddress"]) !!}
	{!! input_field(["label"=>"Num Audience","name"=>"txtNum_audience"]) !!}
	{!! input_field(["label"=>"Deleted At","name"=>"txtDeleted_at"]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnCreate","value"=>"Create"]) !!}
</form>

@endsection

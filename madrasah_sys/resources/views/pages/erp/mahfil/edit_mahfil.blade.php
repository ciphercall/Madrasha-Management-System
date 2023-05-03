@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{url('/mahfils')}}">Manage</a>
<form action="{{route('mahfils.update',$mahfil)}}" method="post" enctype="multipart/form-data">
	@csrf
	@method("PUT")
	{!! select_field(["label"=>"Brunch Id","name"=>"cmbBrunchId","table"=>$brunchs,"value"=>$mahfil->brunch_id]) !!}
	{!! input_field(["label"=>"Brunch Name","name"=>"txtBrunch_name","value"=>$mahfil->brunch_name]) !!}
	{!! input_field(["label"=>"Start Date","name"=>"txtStart_date","value"=>$mahfil->start_date]) !!}
	{!! input_field(["label"=>"End Date","name"=>"txtEnd_date","value"=>$mahfil->end_date]) !!}
	{!! input_field(["label"=>"Start Time","name"=>"txtStart_time","value"=>$mahfil->start_time]) !!}
	{!! input_field(["label"=>"End Time","name"=>"txtEnd_time","value"=>$mahfil->end_time]) !!}
	{!! input_field(["label"=>"Num Speakers","name"=>"txtNum_speakers","value"=>$mahfil->num_speakers]) !!}
	{!! input_field(["label"=>"Speakers","name"=>"txtSpeakers","value"=>$mahfil->speakers]) !!}
	{!! input_field(["label"=>"Occasion","name"=>"txtOccasion","value"=>$mahfil->occasion]) !!}
	{!! input_field(["label"=>"Address","name"=>"txtAddress","value"=>$mahfil->address]) !!}
	{!! input_field(["label"=>"Num Audience","name"=>"txtNum_audience","value"=>$mahfil->num_audience]) !!}
	{!! input_field(["label"=>"Deleted At","name"=>"txtDeleted_at","value"=>$mahfil->deleted_at]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnUpdate","value"=>"Update"]) !!}
</form>

@endsection

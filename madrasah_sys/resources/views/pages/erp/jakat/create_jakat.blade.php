@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{url('/jakats')}}">Manage</a>
<form action="{{route('jakats.store')}}" method="post" enctype="multipart/form-data">
	@csrf
	{!! select_field(["label"=>"Brunch Id","name"=>"cmbBrunchId","table"=>$brunchs]) !!}
	{!! input_field(["label"=>"Brunch Name","name"=>"txtBrunch_name"]) !!}
	{!! input_field(["label"=>"Donor","name"=>"txtDonor"]) !!}
	{!! input_field(["label"=>"Category","name"=>"txtCategory"]) !!}
	{!! input_field(["label"=>"Mediam","name"=>"txtMediam"]) !!}
	{!! input_field(["label"=>"Amount","name"=>"txtAmount"]) !!}
	{!! input_field(["label"=>"Deleted At","name"=>"txtDeleted_at"]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnCreate","value"=>"Create"]) !!}
</form>

@endsection

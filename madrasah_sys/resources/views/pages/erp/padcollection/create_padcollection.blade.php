@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{url('/padcollections')}}">Manage</a>
<form action="{{route('padcollections.store')}}" method="post" enctype="multipart/form-data">
	@csrf
	{!! select_field(["label"=>"Brunch Id","name"=>"cmbBrunchId","table"=>$brunchs]) !!}
	{!! input_field(["label"=>"Brunch Name","name"=>"txtBrunch_name"]) !!}
	{!! input_field(["label"=>"Date","name"=>"txtDate"]) !!}
	{!! input_field(["label"=>"Page No","name"=>"txtPage_no"]) !!}
	{!! input_field(["label"=>"Pad Collection","name"=>"txtPad_collection"]) !!}
	{!! input_field(["label"=>"Provider","name"=>"txtProvider"]) !!}
	{!! input_field(["label"=>"Comment","name"=>"txtComment"]) !!}
	{!! input_field(["label"=>"Deleted At","name"=>"txtDeleted_at"]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnCreate","value"=>"Create"]) !!}
</form>

@endsection

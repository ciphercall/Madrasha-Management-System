@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{url('/complexpromises')}}">Manage</a>
<form action="{{route('complexpromises.store')}}" method="post" enctype="multipart/form-data">
	@csrf
	{!! select_field(["label"=>"Brunch Id","name"=>"cmbBrunchId","table"=>$brunchs]) !!}
	{!! input_field(["label"=>"Brunch Name","name"=>"txtBrunch_name"]) !!}
	{!! input_field(["label"=>"Date","name"=>"txtDate"]) !!}
	{!! input_field(["label"=>"Cp Name","name"=>"txtCp_name"]) !!}
	{!! input_field(["label"=>"Deg","name"=>"txtDeg"]) !!}
	{!! input_field(["label"=>"Promise","name"=>"txtPromise"]) !!}
	{!! input_field(["label"=>"Paid","name"=>"txtPaid"]) !!}
	{!! input_field(["label"=>"Comment","name"=>"txtComment"]) !!}
	{!! input_field(["label"=>"Deleted At","name"=>"txtDeleted_at"]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnCreate","value"=>"Create"]) !!}
</form>

@endsection

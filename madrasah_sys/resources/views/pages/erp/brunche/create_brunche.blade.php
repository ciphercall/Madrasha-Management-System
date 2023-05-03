@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{url('/brunches')}}">Manage</a>
<form action="{{route('brunches.store')}}" method="post" enctype="multipart/form-data">
	@csrf
	{!! input_field(["label"=>"Brunch Code","name"=>"txtBrunch_code"]) !!}
	{!! input_field(["label"=>"Brunch Name","name"=>"txtBrunch_name"]) !!}
	{!! input_field(["label"=>"Phone","name"=>"txtPhone"]) !!}
	{!! input_field(["label"=>"Email","name"=>"txtEmail"]) !!}
	{!! input_field(["label"=>"Address","name"=>"txtAddress"]) !!}
	{!! input_field(["label"=>"Brunch Head","name"=>"txtBrunch_head"]) !!}
	{!! input_field(["label"=>"Designation","name"=>"txtDesignation"]) !!}
	{!! input_field(["label"=>"Bg","name"=>"txtBg"]) !!}
	{!! input_field(["label"=>"Deleted At","name"=>"txtDeleted_at"]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnCreate","value"=>"Create"]) !!}
</form>

@endsection

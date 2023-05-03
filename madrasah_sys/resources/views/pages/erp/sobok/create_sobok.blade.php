@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{url('/soboks')}}">Manage</a>
<form action="{{route('soboks.store')}}" method="post" enctype="multipart/form-data">
	@csrf
	{!! input_field(["label"=>"Name","name"=>"txtName"]) !!}
	{!! input_field(["label"=>"Deleted At","name"=>"txtDeleted_at"]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnCreate","value"=>"Create"]) !!}
</form>

@endsection

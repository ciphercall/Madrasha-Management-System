@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{url('/soboks')}}">Manage</a>
<form action="{{route('soboks.update',$sobok)}}" method="post" enctype="multipart/form-data">
	@csrf
	@method("PUT")
	{!! input_field(["label"=>"Name","name"=>"txtName","value"=>$sobok->name]) !!}
	{!! input_field(["label"=>"Deleted At","name"=>"txtDeleted_at","value"=>$sobok->deleted_at]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnUpdate","value"=>"Update"]) !!}
</form>

@endsection

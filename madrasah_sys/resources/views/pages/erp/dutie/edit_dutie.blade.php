@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{url('/duties')}}">Manage</a>
<form action="{{route('duties.update',$dutie)}}" method="post" enctype="multipart/form-data">
	@csrf
	@method("PUT")
	{!! input_field(["label"=>"Name","name"=>"txtName","value"=>$dutie->name]) !!}
	{!! input_field(["label"=>"Deleted At","name"=>"txtDeleted_at","value"=>$dutie->deleted_at]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnUpdate","value"=>"Update"]) !!}
</form>

@endsection

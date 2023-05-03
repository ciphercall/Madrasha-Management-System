@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{url('/brunches')}}">Manage</a>
<form action="{{route('brunches.update',$brunche)}}" method="post" enctype="multipart/form-data">
	@csrf
	@method("PUT")
	{!! input_field(["label"=>"Brunch Code","name"=>"txtBrunch_code","value"=>$brunche->brunch_code]) !!}
	{!! input_field(["label"=>"Brunch Name","name"=>"txtBrunch_name","value"=>$brunche->brunch_name]) !!}
	{!! input_field(["label"=>"Phone","name"=>"txtPhone","value"=>$brunche->phone]) !!}
	{!! input_field(["label"=>"Email","name"=>"txtEmail","value"=>$brunche->email]) !!}
	{!! input_field(["label"=>"Address","name"=>"txtAddress","value"=>$brunche->address]) !!}
	{!! input_field(["label"=>"Brunch Head","name"=>"txtBrunch_head","value"=>$brunche->brunch_head]) !!}
	{!! input_field(["label"=>"Designation","name"=>"txtDesignation","value"=>$brunche->designation]) !!}
	{!! input_field(["label"=>"Bg","name"=>"txtBg","value"=>$brunche->bg]) !!}
	{!! input_field(["label"=>"Deleted At","name"=>"txtDeleted_at","value"=>$brunche->deleted_at]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnUpdate","value"=>"Update"]) !!}
</form>

@endsection

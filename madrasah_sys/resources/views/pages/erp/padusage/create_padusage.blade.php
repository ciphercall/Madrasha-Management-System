@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{url('/padusages')}}">Manage</a>
<form action="{{route('padusages.store')}}" method="post" enctype="multipart/form-data">
	@csrf
	{!! select_field(["label"=>"Brunch Id","name"=>"cmbBrunchId","table"=>$brunchs]) !!}
	{!! input_field(["label"=>"Brunch Name","name"=>"txtBrunch_name"]) !!}
	{!! input_field(["label"=>"Date","name"=>"txtDate"]) !!}
	{!! input_field(["label"=>"Padused Des","name"=>"txtPadused_des"]) !!}
	{!! input_field(["label"=>"Padused Page","name"=>"txtPadused_page"]) !!}
	{!! input_field(["label"=>"Stock","name"=>"txtStock"]) !!}
	{!! input_field(["label"=>"Comment","name"=>"txtComment"]) !!}
	{!! input_field(["label"=>"Deleted At","name"=>"txtDeleted_at"]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnCreate","value"=>"Create"]) !!}
</form>

@endsection

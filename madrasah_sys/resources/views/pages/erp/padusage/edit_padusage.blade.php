@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{url('/padusages')}}">Manage</a>
<form action="{{route('padusages.update',$padusage)}}" method="post" enctype="multipart/form-data">
	@csrf
	@method("PUT")
	{!! select_field(["label"=>"Brunch Id","name"=>"cmbBrunchId","table"=>$brunchs,"value"=>$padusage->brunch_id]) !!}
	{!! input_field(["label"=>"Brunch Name","name"=>"txtBrunch_name","value"=>$padusage->brunch_name]) !!}
	{!! input_field(["label"=>"Date","name"=>"txtDate","value"=>$padusage->date]) !!}
	{!! input_field(["label"=>"Padused Des","name"=>"txtPadused_des","value"=>$padusage->padused_des]) !!}
	{!! input_field(["label"=>"Padused Page","name"=>"txtPadused_page","value"=>$padusage->padused_page]) !!}
	{!! input_field(["label"=>"Stock","name"=>"txtStock","value"=>$padusage->stock]) !!}
	{!! input_field(["label"=>"Comment","name"=>"txtComment","value"=>$padusage->comment]) !!}
	{!! input_field(["label"=>"Deleted At","name"=>"txtDeleted_at","value"=>$padusage->deleted_at]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnUpdate","value"=>"Update"]) !!}
</form>

@endsection

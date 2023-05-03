@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{url('/padcollections')}}">Manage</a>
<form action="{{route('padcollections.update',$padcollection)}}" method="post" enctype="multipart/form-data">
	@csrf
	@method("PUT")
	{!! select_field(["label"=>"Brunch Id","name"=>"cmbBrunchId","table"=>$brunchs,"value"=>$padcollection->brunch_id]) !!}
	{!! input_field(["label"=>"Brunch Name","name"=>"txtBrunch_name","value"=>$padcollection->brunch_name]) !!}
	{!! input_field(["label"=>"Date","name"=>"txtDate","value"=>$padcollection->date]) !!}
	{!! input_field(["label"=>"Page No","name"=>"txtPage_no","value"=>$padcollection->page_no]) !!}
	{!! input_field(["label"=>"Pad Collection","name"=>"txtPad_collection","value"=>$padcollection->pad_collection]) !!}
	{!! input_field(["label"=>"Provider","name"=>"txtProvider","value"=>$padcollection->provider]) !!}
	{!! input_field(["label"=>"Comment","name"=>"txtComment","value"=>$padcollection->comment]) !!}
	{!! input_field(["label"=>"Deleted At","name"=>"txtDeleted_at","value"=>$padcollection->deleted_at]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnUpdate","value"=>"Update"]) !!}
</form>

@endsection

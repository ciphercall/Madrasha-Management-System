@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{url('/jakats')}}">Manage</a>
<form action="{{route('jakats.update',$jakat)}}" method="post" enctype="multipart/form-data">
	@csrf
	@method("PUT")
	{!! select_field(["label"=>"Brunch Id","name"=>"cmbBrunchId","table"=>$brunchs,"value"=>$jakat->brunch_id]) !!}
	{!! input_field(["label"=>"Brunch Name","name"=>"txtBrunch_name","value"=>$jakat->brunch_name]) !!}
	{!! input_field(["label"=>"Donor","name"=>"txtDonor","value"=>$jakat->donor]) !!}
	{!! input_field(["label"=>"Category","name"=>"txtCategory","value"=>$jakat->category]) !!}
	{!! input_field(["label"=>"Mediam","name"=>"txtMediam","value"=>$jakat->mediam]) !!}
	{!! input_field(["label"=>"Amount","name"=>"txtAmount","value"=>$jakat->amount]) !!}
	{!! input_field(["label"=>"Deleted At","name"=>"txtDeleted_at","value"=>$jakat->deleted_at]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnUpdate","value"=>"Update"]) !!}
</form>

@endsection

@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{url('/invitations')}}">Manage</a>
<form action="{{route('invitations.update',$invitation)}}" method="post" enctype="multipart/form-data">
	@csrf
	@method("PUT")
	{!! select_field(["label"=>"Brunch Id","name"=>"cmbBrunchId","table"=>$brunchs,"value"=>$invitation->brunch_id]) !!}
	{!! input_field(["label"=>"Brunch Name","name"=>"txtBrunch_name","value"=>$invitation->brunch_name]) !!}
	{!! input_field(["label"=>"Studid","name"=>"txtStudid","value"=>$invitation->studid]) !!}
	{!! input_field(["label"=>"Date","name"=>"txtDate","value"=>$invitation->date]) !!}
	{!! input_field(["label"=>"Name","name"=>"txtName","value"=>$invitation->name]) !!}
	{!! input_field(["label"=>"Email","name"=>"txtEmail","value"=>$invitation->email]) !!}
	{!! input_field(["label"=>"Phone","name"=>"txtPhone","value"=>$invitation->phone]) !!}
	{!! input_field(["label"=>"Amount","name"=>"txtAmount","value"=>$invitation->amount]) !!}
	{!! input_field(["label"=>"Occasion","name"=>"txtOccasion","value"=>$invitation->occasion]) !!}
	{!! input_field(["label"=>"Comment","name"=>"txtComment","value"=>$invitation->comment]) !!}
	{!! input_field(["label"=>"Deleted At","name"=>"txtDeleted_at","value"=>$invitation->deleted_at]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnUpdate","value"=>"Update"]) !!}
</form>

@endsection

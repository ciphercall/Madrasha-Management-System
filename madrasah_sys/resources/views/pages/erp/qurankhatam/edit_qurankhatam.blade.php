@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{url('/qurankhatams')}}">Manage</a>
<form action="{{route('qurankhatams.update',$qurankhatam)}}" method="post" enctype="multipart/form-data">
	@csrf
	@method("PUT")
	{!! select_field(["label"=>"Brunch Id","name"=>"cmbBrunchId","table"=>$brunchs,"value"=>$qurankhatam->brunch_id]) !!}
	{!! input_field(["label"=>"Brunch Name","name"=>"txtBrunch_name","value"=>$qurankhatam->brunch_name]) !!}
	{!! input_field(["label"=>"Studid","name"=>"txtStudid","value"=>$qurankhatam->studid]) !!}
	{!! input_field(["label"=>"Date","name"=>"txtDate","value"=>$qurankhatam->date]) !!}
	{!! input_field(["label"=>"Name","name"=>"txtName","value"=>$qurankhatam->name]) !!}
	{!! input_field(["label"=>"Email","name"=>"txtEmail","value"=>$qurankhatam->email]) !!}
	{!! input_field(["label"=>"Phone","name"=>"txtPhone","value"=>$qurankhatam->phone]) !!}
	{!! input_field(["label"=>"Amount","name"=>"txtAmount","value"=>$qurankhatam->amount]) !!}
	{!! input_field(["label"=>"Occasion","name"=>"txtOccasion","value"=>$qurankhatam->occasion]) !!}
	{!! input_field(["label"=>"Comment","name"=>"txtComment","value"=>$qurankhatam->comment]) !!}
	{!! input_field(["label"=>"Deleted At","name"=>"txtDeleted_at","value"=>$qurankhatam->deleted_at]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnUpdate","value"=>"Update"]) !!}
</form>

@endsection

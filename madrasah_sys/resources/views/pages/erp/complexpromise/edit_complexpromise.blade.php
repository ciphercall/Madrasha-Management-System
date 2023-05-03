@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{url('/complexpromises')}}">Manage</a>
<form action="{{route('complexpromises.update',$complexpromise)}}" method="post" enctype="multipart/form-data">
	@csrf
	@method("PUT")
	{!! select_field(["label"=>"Brunch Id","name"=>"cmbBrunchId","table"=>$brunchs,"value"=>$complexpromise->brunch_id]) !!}
	{!! input_field(["label"=>"Brunch Name","name"=>"txtBrunch_name","value"=>$complexpromise->brunch_name]) !!}
	{!! input_field(["label"=>"Date","name"=>"txtDate","value"=>$complexpromise->date]) !!}
	{!! input_field(["label"=>"Cp Name","name"=>"txtCp_name","value"=>$complexpromise->cp_name]) !!}
	{!! input_field(["label"=>"Deg","name"=>"txtDeg","value"=>$complexpromise->deg]) !!}
	{!! input_field(["label"=>"Promise","name"=>"txtPromise","value"=>$complexpromise->promise]) !!}
	{!! input_field(["label"=>"Paid","name"=>"txtPaid","value"=>$complexpromise->paid]) !!}
	{!! input_field(["label"=>"Comment","name"=>"txtComment","value"=>$complexpromise->comment]) !!}
	{!! input_field(["label"=>"Deleted At","name"=>"txtDeleted_at","value"=>$complexpromise->deleted_at]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnUpdate","value"=>"Update"]) !!}
</form>

@endsection

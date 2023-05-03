@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{url('/incomeexps')}}">Manage</a>
<form action="{{route('incomeexps.update',$incomeexp)}}" method="post" enctype="multipart/form-data">
	@csrf
	@method("PUT")
	{!! select_field(["label"=>"Brunch Id","name"=>"cmbBrunchId","table"=>$brunchs,"value"=>$incomeexp->brunch_id]) !!}
	{!! input_field(["label"=>"Brunch Name","name"=>"txtBrunch_name","value"=>$incomeexp->brunch_name]) !!}
	{!! input_field(["label"=>"E Date","name"=>"txtE_date","value"=>$incomeexp->e_date]) !!}
	{!! input_field(["label"=>"Income","name"=>"txtIncome","value"=>$incomeexp->income]) !!}
	{!! input_field(["label"=>"Expanse","name"=>"txtExpanse","value"=>$incomeexp->expanse]) !!}
	{!! input_field(["label"=>"Comment","name"=>"txtComment","value"=>$incomeexp->comment]) !!}
	{!! input_field(["label"=>"Deleted At","name"=>"txtDeleted_at","value"=>$incomeexp->deleted_at]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnUpdate","value"=>"Update"]) !!}
</form>

@endsection

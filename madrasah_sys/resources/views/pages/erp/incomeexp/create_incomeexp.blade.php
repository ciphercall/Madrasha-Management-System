@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{url('/incomeexps')}}">Manage</a>
<form action="{{route('incomeexps.store')}}" method="post" enctype="multipart/form-data">
	@csrf
	{!! select_field(["label"=>"Brunch Id","name"=>"cmbBrunchId","table"=>$brunchs]) !!}
	{!! input_field(["label"=>"Brunch Name","name"=>"txtBrunch_name"]) !!}
	{!! input_field(["label"=>"E Date","name"=>"txtE_date"]) !!}
	{!! input_field(["label"=>"Income","name"=>"txtIncome"]) !!}
	{!! input_field(["label"=>"Expanse","name"=>"txtExpanse"]) !!}
	{!! input_field(["label"=>"Comment","name"=>"txtComment"]) !!}
	{!! input_field(["label"=>"Deleted At","name"=>"txtDeleted_at"]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnCreate","value"=>"Create"]) !!}
</form>

@endsection

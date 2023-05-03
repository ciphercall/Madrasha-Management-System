@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{url('/incomeaccounts')}}">Manage</a>
<form action="{{route('incomeaccounts.store')}}" method="post" enctype="multipart/form-data">
	@csrf
	{!! select_field(["label"=>"Brunch Id","name"=>"cmbBrunchId","table"=>$brunchs]) !!}
	{!! input_field(["label"=>"Brunch Name","name"=>"txtBrunch_name"]) !!}
	{!! input_field(["label"=>"Date","name"=>"txtDate"]) !!}
	{!! input_field(["label"=>"Money Receipt No","name"=>"txtMoney_receipt_no"]) !!}
	{!! input_field(["label"=>"Description","name"=>"txtDescription"]) !!}
	{!! input_field(["label"=>"Amount Money","name"=>"txtAmount_money"]) !!}
	{!! input_field(["label"=>"Comment","name"=>"txtComment"]) !!}
	{!! input_field(["label"=>"Deleted At","name"=>"txtDeleted_at"]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnCreate","value"=>"Create"]) !!}
</form>

@endsection

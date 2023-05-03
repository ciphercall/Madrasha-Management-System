@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{url('/expenseaccounts')}}">Manage</a>
<form action="{{route('expenseaccounts.update',$expenseaccount)}}" method="post" enctype="multipart/form-data">
	@csrf
	@method("PUT")
	{!! select_field(["label"=>"Brunch Id","name"=>"cmbBrunchId","table"=>$brunchs,"value"=>$expenseaccount->brunch_id]) !!}
	{!! input_field(["label"=>"Brunch Name","name"=>"txtBrunch_name","value"=>$expenseaccount->brunch_name]) !!}
	{!! input_field(["label"=>"Date","name"=>"txtDate","value"=>$expenseaccount->date]) !!}
	{!! input_field(["label"=>"Receipt No","name"=>"txtReceipt_no","value"=>$expenseaccount->receipt_no]) !!}
	{!! input_field(["label"=>"Description","name"=>"txtDescription","value"=>$expenseaccount->description]) !!}
	{!! input_field(["label"=>"Amount Money","name"=>"txtAmount_money","value"=>$expenseaccount->amount_money]) !!}
	{!! input_field(["label"=>"Comment","name"=>"txtComment","value"=>$expenseaccount->comment]) !!}
	{!! input_field(["label"=>"Deleted At","name"=>"txtDeleted_at","value"=>$expenseaccount->deleted_at]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnUpdate","value"=>"Update"]) !!}
</form>

@endsection

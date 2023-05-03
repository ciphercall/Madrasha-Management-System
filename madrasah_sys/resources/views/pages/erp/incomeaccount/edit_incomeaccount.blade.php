@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{url('/incomeaccounts')}}">Manage</a>
<form action="{{route('incomeaccounts.update',$incomeaccount)}}" method="post" enctype="multipart/form-data">
	@csrf
	@method("PUT")
	{!! select_field(["label"=>"Brunch Id","name"=>"cmbBrunchId","table"=>$brunchs,"value"=>$incomeaccount->brunch_id]) !!}
	{!! input_field(["label"=>"Brunch Name","name"=>"txtBrunch_name","value"=>$incomeaccount->brunch_name]) !!}
	{!! input_field(["label"=>"Date","name"=>"txtDate","value"=>$incomeaccount->date]) !!}
	{!! input_field(["label"=>"Money Receipt No","name"=>"txtMoney_receipt_no","value"=>$incomeaccount->money_receipt_no]) !!}
	{!! input_field(["label"=>"Description","name"=>"txtDescription","value"=>$incomeaccount->description]) !!}
	{!! input_field(["label"=>"Amount Money","name"=>"txtAmount_money","value"=>$incomeaccount->amount_money]) !!}
	{!! input_field(["label"=>"Comment","name"=>"txtComment","value"=>$incomeaccount->comment]) !!}
	{!! input_field(["label"=>"Deleted At","name"=>"txtDeleted_at","value"=>$incomeaccount->deleted_at]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnUpdate","value"=>"Update"]) !!}
</form>

@endsection

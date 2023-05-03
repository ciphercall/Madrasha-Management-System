@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{url('/complexes')}}">Manage</a>
<form action="{{route('complexes.update',$complexe)}}" method="post" enctype="multipart/form-data">
	@csrf
	@method("PUT")
	{!! select_field(["label"=>"Brunch Id","name"=>"cmbBrunchId","table"=>$brunchs,"value"=>$complexe->brunch_id]) !!}
	{!! input_field(["label"=>"Brunch Name","name"=>"txtBrunch_name","value"=>$complexe->brunch_name]) !!}
	{!! input_field(["label"=>"Withdrawal Date","name"=>"txtWithdrawal_date","value"=>$complexe->withdrawal_date]) !!}
	{!! input_field(["label"=>"Receiver Name","name"=>"txtReceiver_name","value"=>$complexe->receiver_name]) !!}
	{!! input_field(["label"=>"Receipt No","name"=>"txtReceipt_no","value"=>$complexe->receipt_no]) !!}
	{!! input_field(["label"=>"Address","name"=>"txtAddress","value"=>$complexe->address]) !!}
	{!! input_field(["label"=>"Received Amount","name"=>"txtReceived_amount","value"=>$complexe->received_amount]) !!}
	{!! input_field(["label"=>"Comment","name"=>"txtComment","value"=>$complexe->comment]) !!}
	{!! input_field(["label"=>"Deleted At","name"=>"txtDeleted_at","value"=>$complexe->deleted_at]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnUpdate","value"=>"Update"]) !!}
</form>

@endsection

@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{url('/dboxwithdrawals')}}">Manage</a>
<form action="{{route('dboxwithdrawals.update',$dboxwithdrawal)}}" method="post" enctype="multipart/form-data">
	@csrf
	@method("PUT")
	{!! select_field(["label"=>"Brunch Id","name"=>"cmbBrunchId","table"=>$brunchs,"value"=>$dboxwithdrawal->brunch_id]) !!}
	{!! input_field(["label"=>"Brunch Name","name"=>"txtBrunch_name","value"=>$dboxwithdrawal->brunch_name]) !!}
	{!! input_field(["label"=>"Withdrawal Date","name"=>"txtWithdrawal_date","value"=>$dboxwithdrawal->withdrawal_date]) !!}
	{!! input_field(["label"=>"Receiver Name","name"=>"txtReceiver_name","value"=>$dboxwithdrawal->receiver_name]) !!}
	{!! input_field(["label"=>"Receipt No","name"=>"txtReceipt_no","value"=>$dboxwithdrawal->receipt_no]) !!}
	{!! input_field(["label"=>"Address","name"=>"txtAddress","value"=>$dboxwithdrawal->address]) !!}
	{!! input_field(["label"=>"Received Amount","name"=>"txtReceived_amount","value"=>$dboxwithdrawal->received_amount]) !!}
	{!! input_field(["label"=>"Box No","name"=>"txtBox_no","value"=>$dboxwithdrawal->box_no]) !!}
	{!! input_field(["label"=>"Comment","name"=>"txtComment","value"=>$dboxwithdrawal->comment]) !!}
	{!! input_field(["label"=>"Deleted At","name"=>"txtDeleted_at","value"=>$dboxwithdrawal->deleted_at]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnUpdate","value"=>"Update"]) !!}
</form>

@endsection

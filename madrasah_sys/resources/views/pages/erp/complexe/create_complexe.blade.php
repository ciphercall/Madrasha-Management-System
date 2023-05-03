@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{url('/complexes')}}">Manage</a>
<form action="{{route('complexes.store')}}" method="post" enctype="multipart/form-data">
	@csrf
	{!! select_field(["label"=>"Brunch Id","name"=>"cmbBrunchId","table"=>$brunchs]) !!}
	{!! input_field(["label"=>"Brunch Name","name"=>"txtBrunch_name"]) !!}
	{!! input_field(["label"=>"Withdrawal Date","name"=>"txtWithdrawal_date"]) !!}
	{!! input_field(["label"=>"Receiver Name","name"=>"txtReceiver_name"]) !!}
	{!! input_field(["label"=>"Receipt No","name"=>"txtReceipt_no"]) !!}
	{!! input_field(["label"=>"Address","name"=>"txtAddress"]) !!}
	{!! input_field(["label"=>"Received Amount","name"=>"txtReceived_amount"]) !!}
	{!! input_field(["label"=>"Comment","name"=>"txtComment"]) !!}
	{!! input_field(["label"=>"Deleted At","name"=>"txtDeleted_at"]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnCreate","value"=>"Create"]) !!}
</form>

@endsection

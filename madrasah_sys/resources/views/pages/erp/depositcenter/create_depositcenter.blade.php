@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{url('/depositcenters')}}">Manage</a>
<form action="{{route('depositcenters.store')}}" method="post" enctype="multipart/form-data">
	@csrf
	{!! select_field(["label"=>"Brunch Id","name"=>"cmbBrunchId","table"=>$brunchs]) !!}
	{!! input_field(["label"=>"Brunch Name","name"=>"txtBrunch_name"]) !!}
	{!! input_field(["label"=>"Collection Date","name"=>"txtCollection_date"]) !!}
	{!! input_field(["label"=>"Member Name","name"=>"txtMember_name"]) !!}
	{!! input_field(["label"=>"Phone","name"=>"txtPhone"]) !!}
	{!! input_field(["label"=>"Received Amount","name"=>"txtReceived_amount"]) !!}
	{!! input_field(["label"=>"Purpose Catagory","name"=>"txtPurpose_catagory"]) !!}
	{!! input_field(["label"=>"Receiver Name","name"=>"txtReceiver_name"]) !!}
	{!! input_field(["label"=>"Money Receipt No","name"=>"txtMoney_receipt_no"]) !!}
	{!! input_field(["label"=>"Acknowledgment Receipt","name"=>"txtAcknowledgment_receipt"]) !!}
	{!! input_field(["label"=>"Comment","name"=>"txtComment"]) !!}
	{!! input_field(["label"=>"Deleted At","name"=>"txtDeleted_at"]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnCreate","value"=>"Create"]) !!}
</form>

@endsection

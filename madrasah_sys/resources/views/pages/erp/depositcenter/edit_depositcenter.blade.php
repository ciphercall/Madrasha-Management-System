@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{url('/depositcenters')}}">Manage</a>
<form action="{{route('depositcenters.update',$depositcenter)}}" method="post" enctype="multipart/form-data">
	@csrf
	@method("PUT")
	{!! select_field(["label"=>"Brunch Id","name"=>"cmbBrunchId","table"=>$brunchs,"value"=>$depositcenter->brunch_id]) !!}
	{!! input_field(["label"=>"Brunch Name","name"=>"txtBrunch_name","value"=>$depositcenter->brunch_name]) !!}
	{!! input_field(["label"=>"Collection Date","name"=>"txtCollection_date","value"=>$depositcenter->collection_date]) !!}
	{!! input_field(["label"=>"Member Name","name"=>"txtMember_name","value"=>$depositcenter->member_name]) !!}
	{!! input_field(["label"=>"Phone","name"=>"txtPhone","value"=>$depositcenter->phone]) !!}
	{!! input_field(["label"=>"Received Amount","name"=>"txtReceived_amount","value"=>$depositcenter->received_amount]) !!}
	{!! input_field(["label"=>"Purpose Catagory","name"=>"txtPurpose_catagory","value"=>$depositcenter->purpose_catagory]) !!}
	{!! input_field(["label"=>"Receiver Name","name"=>"txtReceiver_name","value"=>$depositcenter->receiver_name]) !!}
	{!! input_field(["label"=>"Money Receipt No","name"=>"txtMoney_receipt_no","value"=>$depositcenter->money_receipt_no]) !!}
	{!! input_field(["label"=>"Acknowledgment Receipt","name"=>"txtAcknowledgment_receipt","value"=>$depositcenter->acknowledgment_receipt]) !!}
	{!! input_field(["label"=>"Comment","name"=>"txtComment","value"=>$depositcenter->comment]) !!}
	{!! input_field(["label"=>"Deleted At","name"=>"txtDeleted_at","value"=>$depositcenter->deleted_at]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnUpdate","value"=>"Update"]) !!}
</form>

@endsection

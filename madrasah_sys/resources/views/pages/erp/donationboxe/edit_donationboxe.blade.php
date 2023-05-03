@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{url('/donationboxes')}}">Manage</a>
<form action="{{route('donationboxes.update',$donationboxe)}}" method="post" enctype="multipart/form-data">
	@csrf
	@method("PUT")
	{!! select_field(["label"=>"Brunch Id","name"=>"cmbBrunchId","table"=>$brunchs,"value"=>$donationboxe->brunch_id]) !!}
	{!! input_field(["label"=>"Brunch Name","name"=>"txtBrunch_name","value"=>$donationboxe->brunch_name]) !!}
	{!! input_field(["label"=>"Category","name"=>"txtCategory","value"=>$donationboxe->category]) !!}
	{!! input_field(["label"=>"Date","name"=>"txtDate","value"=>$donationboxe->date]) !!}
	{!! input_field(["label"=>"Receiver Name","name"=>"txtReceiver_name","value"=>$donationboxe->receiver_name]) !!}
	{!! input_field(["label"=>"Address","name"=>"txtAddress","value"=>$donationboxe->address]) !!}
	{!! input_field(["label"=>"Box No","name"=>"txtBox_no","value"=>$donationboxe->box_no]) !!}
	{!! input_field(["label"=>"Phone","name"=>"txtPhone","value"=>$donationboxe->phone]) !!}
	{!! input_field(["label"=>"Provider Name","name"=>"txtProvider_name","value"=>$donationboxe->provider_name]) !!}
	{!! input_field(["label"=>"Comment","name"=>"txtComment","value"=>$donationboxe->comment]) !!}
	{!! input_field(["label"=>"Deleted At","name"=>"txtDeleted_at","value"=>$donationboxe->deleted_at]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnUpdate","value"=>"Update"]) !!}
</form>

@endsection

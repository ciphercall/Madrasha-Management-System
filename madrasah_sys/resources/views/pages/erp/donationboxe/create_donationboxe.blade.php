@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{url('/donationboxes')}}">Manage</a>
<form action="{{route('donationboxes.store')}}" method="post" enctype="multipart/form-data">
	@csrf
	{!! select_field(["label"=>"Brunch Id","name"=>"cmbBrunchId","table"=>$brunchs]) !!}
	{!! input_field(["label"=>"Brunch Name","name"=>"txtBrunch_name"]) !!}
	{!! input_field(["label"=>"Category","name"=>"txtCategory"]) !!}
	{!! input_field(["label"=>"Date","name"=>"txtDate"]) !!}
	{!! input_field(["label"=>"Receiver Name","name"=>"txtReceiver_name"]) !!}
	{!! input_field(["label"=>"Address","name"=>"txtAddress"]) !!}
	{!! input_field(["label"=>"Box No","name"=>"txtBox_no"]) !!}
	{!! input_field(["label"=>"Phone","name"=>"txtPhone"]) !!}
	{!! input_field(["label"=>"Provider Name","name"=>"txtProvider_name"]) !!}
	{!! input_field(["label"=>"Comment","name"=>"txtComment"]) !!}
	{!! input_field(["label"=>"Deleted At","name"=>"txtDeleted_at"]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnCreate","value"=>"Create"]) !!}
</form>

@endsection

@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{url('/fazleahmadis')}}">Manage</a>
<form action="{{route('fazleahmadis.store')}}" method="post" enctype="multipart/form-data">
	@csrf
	{!! select_field(["label"=>"Member Id","name"=>"cmbMemberId","table"=>$members]) !!}
	{!! input_field(["label"=>"Member Name","name"=>"txtMember_name"]) !!}
	{!! input_field(["label"=>"Phone","name"=>"txtPhone"]) !!}
	{!! select_field(["label"=>"Brunch Id","name"=>"cmbBrunchId","table"=>$brunchs]) !!}
	{!! input_field(["label"=>"Brunch Name","name"=>"txtBrunch_name"]) !!}
	{!! input_field(["label"=>"Member Category","name"=>"txtMember_category"]) !!}
	{!! input_field(["label"=>"Designation","name"=>"txtDesignation"]) !!}
	{!! input_field(["label"=>"Date","name"=>"txtDate"]) !!}
	{!! input_field(["label"=>"Edition No To","name"=>"txtEdition_no_to"]) !!}
	{!! input_field(["label"=>"Edition No From","name"=>"txtEdition_no_from"]) !!}
	{!! input_field(["label"=>"Received Amount","name"=>"txtReceived_amount"]) !!}
	{!! input_field(["label"=>"Money Receipt No","name"=>"txtMoney_receipt_no"]) !!}
	{!! input_field(["label"=>"Edition Delivery","name"=>"txtEdition_delivery"]) !!}
	{!! input_field(["label"=>"Deleted At","name"=>"txtDeleted_at"]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnCreate","value"=>"Create"]) !!}
</form>

@endsection

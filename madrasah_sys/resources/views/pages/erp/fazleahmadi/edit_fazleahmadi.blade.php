@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{url('/fazleahmadis')}}">Manage</a>
<form action="{{route('fazleahmadis.update',$fazleahmadi)}}" method="post" enctype="multipart/form-data">
	@csrf
	@method("PUT")
	{!! select_field(["label"=>"Member Id","name"=>"cmbMemberId","table"=>$members,"value"=>$fazleahmadi->member_id]) !!}
	{!! input_field(["label"=>"Member Name","name"=>"txtMember_name","value"=>$fazleahmadi->member_name]) !!}
	{!! input_field(["label"=>"Phone","name"=>"txtPhone","value"=>$fazleahmadi->phone]) !!}
	{!! select_field(["label"=>"Brunch Id","name"=>"cmbBrunchId","table"=>$brunchs,"value"=>$fazleahmadi->brunch_id]) !!}
	{!! input_field(["label"=>"Brunch Name","name"=>"txtBrunch_name","value"=>$fazleahmadi->brunch_name]) !!}
	{!! input_field(["label"=>"Member Category","name"=>"txtMember_category","value"=>$fazleahmadi->member_category]) !!}
	{!! input_field(["label"=>"Designation","name"=>"txtDesignation","value"=>$fazleahmadi->designation]) !!}
	{!! input_field(["label"=>"Date","name"=>"txtDate","value"=>$fazleahmadi->date]) !!}
	{!! input_field(["label"=>"Edition No To","name"=>"txtEdition_no_to","value"=>$fazleahmadi->edition_no_to]) !!}
	{!! input_field(["label"=>"Edition No From","name"=>"txtEdition_no_from","value"=>$fazleahmadi->edition_no_from]) !!}
	{!! input_field(["label"=>"Received Amount","name"=>"txtReceived_amount","value"=>$fazleahmadi->received_amount]) !!}
	{!! input_field(["label"=>"Money Receipt No","name"=>"txtMoney_receipt_no","value"=>$fazleahmadi->money_receipt_no]) !!}
	{!! input_field(["label"=>"Edition Delivery","name"=>"txtEdition_delivery","value"=>$fazleahmadi->edition_delivery]) !!}
	{!! input_field(["label"=>"Deleted At","name"=>"txtDeleted_at","value"=>$fazleahmadi->deleted_at]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnUpdate","value"=>"Update"]) !!}
</form>

@endsection

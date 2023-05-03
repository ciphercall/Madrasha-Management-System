@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{url('/loans')}}">Manage</a>
<form action="{{route('loans.store')}}" method="post" enctype="multipart/form-data">
	@csrf
	{!! select_field(["label"=>"Brunch Id","name"=>"cmbBrunchId","table"=>$brunchs]) !!}
	{!! input_field(["label"=>"Brunch Name","name"=>"txtBrunch_name"]) !!}
	{!! select_field(["label"=>"Member Id","name"=>"cmbMemberId","table"=>$members]) !!}
	{!! input_field(["label"=>"Member Name","name"=>"txtMember_name"]) !!}
	{!! input_field(["label"=>"Date","name"=>"txtDate"]) !!}
	{!! input_field(["label"=>"Deg","name"=>"txtDeg"]) !!}
	{!! input_field(["label"=>"Loan Amount","name"=>"txtLoan_amount"]) !!}
	{!! input_field(["label"=>"Paid","name"=>"txtPaid"]) !!}
	{!! input_field(["label"=>"Deleted At","name"=>"txtDeleted_at"]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnCreate","value"=>"Create"]) !!}
</form>

@endsection

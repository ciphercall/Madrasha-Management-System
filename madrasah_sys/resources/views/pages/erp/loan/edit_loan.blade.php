@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{url('/loans')}}">Manage</a>
<form action="{{route('loans.update',$loan)}}" method="post" enctype="multipart/form-data">
	@csrf
	@method("PUT")
	{!! select_field(["label"=>"Brunch Id","name"=>"cmbBrunchId","table"=>$brunchs,"value"=>$loan->brunch_id]) !!}
	{!! input_field(["label"=>"Brunch Name","name"=>"txtBrunch_name","value"=>$loan->brunch_name]) !!}
	{!! select_field(["label"=>"Member Id","name"=>"cmbMemberId","table"=>$members,"value"=>$loan->member_id]) !!}
	{!! input_field(["label"=>"Member Name","name"=>"txtMember_name","value"=>$loan->member_name]) !!}
	{!! input_field(["label"=>"Date","name"=>"txtDate","value"=>$loan->date]) !!}
	{!! input_field(["label"=>"Deg","name"=>"txtDeg","value"=>$loan->deg]) !!}
	{!! input_field(["label"=>"Loan Amount","name"=>"txtLoan_amount","value"=>$loan->loan_amount]) !!}
	{!! input_field(["label"=>"Paid","name"=>"txtPaid","value"=>$loan->paid]) !!}
	{!! input_field(["label"=>"Deleted At","name"=>"txtDeleted_at","value"=>$loan->deleted_at]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnUpdate","value"=>"Update"]) !!}
</form>

@endsection

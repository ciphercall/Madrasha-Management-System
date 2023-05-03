@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{route('loans.index')}}">Manage</a>
<table class='table'>
	<tr><th>Id</th><td>{{$loan->id}}</td></tr>
	<tr><th>Brunch Id</th><td>{{$loan->brunch_id}}</td></tr>
	<tr><th>Brunch Name</th><td>{{$loan->brunch_name}}</td></tr>
	<tr><th>Member Id</th><td>{{$loan->member_id}}</td></tr>
	<tr><th>Member Name</th><td>{{$loan->member_name}}</td></tr>
	<tr><th>Date</th><td>{{$loan->date}}</td></tr>
	<tr><th>Deg</th><td>{{$loan->deg}}</td></tr>
	<tr><th>Loan Amount</th><td>{{$loan->loan_amount}}</td></tr>
	<tr><th>Paid</th><td>{{$loan->paid}}</td></tr>
	<tr><th>Created At</th><td>{{$loan->created_at}}</td></tr>
	<tr><th>Updated At</th><td>{{$loan->updated_at}}</td></tr>
	<tr><th>Deleted At</th><td>{{$loan->deleted_at}}</td></tr>

</table>

@endsection

@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{route('expenseaccounts.index')}}">Manage</a>
<table class='table'>
	<tr><th>Id</th><td>{{$expenseaccount->id}}</td></tr>
	<tr><th>Brunch Id</th><td>{{$expenseaccount->brunch_id}}</td></tr>
	<tr><th>Brunch Name</th><td>{{$expenseaccount->brunch_name}}</td></tr>
	<tr><th>Date</th><td>{{$expenseaccount->date}}</td></tr>
	<tr><th>Receipt No</th><td>{{$expenseaccount->receipt_no}}</td></tr>
	<tr><th>Description</th><td>{{$expenseaccount->description}}</td></tr>
	<tr><th>Amount Money</th><td>{{$expenseaccount->amount_money}}</td></tr>
	<tr><th>Comment</th><td>{{$expenseaccount->comment}}</td></tr>
	<tr><th>Created At</th><td>{{$expenseaccount->created_at}}</td></tr>
	<tr><th>Updated At</th><td>{{$expenseaccount->updated_at}}</td></tr>
	<tr><th>Deleted At</th><td>{{$expenseaccount->deleted_at}}</td></tr>

</table>

@endsection

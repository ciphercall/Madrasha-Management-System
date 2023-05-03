@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{route('incomeaccounts.index')}}">Manage</a>
<table class='table'>
	<tr><th>Id</th><td>{{$incomeaccount->id}}</td></tr>
	<tr><th>Brunch Id</th><td>{{$incomeaccount->brunch_id}}</td></tr>
	<tr><th>Brunch Name</th><td>{{$incomeaccount->brunch_name}}</td></tr>
	<tr><th>Date</th><td>{{$incomeaccount->date}}</td></tr>
	<tr><th>Money Receipt No</th><td>{{$incomeaccount->money_receipt_no}}</td></tr>
	<tr><th>Description</th><td>{{$incomeaccount->description}}</td></tr>
	<tr><th>Amount Money</th><td>{{$incomeaccount->amount_money}}</td></tr>
	<tr><th>Comment</th><td>{{$incomeaccount->comment}}</td></tr>
	<tr><th>Created At</th><td>{{$incomeaccount->created_at}}</td></tr>
	<tr><th>Updated At</th><td>{{$incomeaccount->updated_at}}</td></tr>
	<tr><th>Deleted At</th><td>{{$incomeaccount->deleted_at}}</td></tr>

</table>

@endsection

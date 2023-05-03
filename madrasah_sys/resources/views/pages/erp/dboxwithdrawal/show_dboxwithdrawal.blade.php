@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{route('dboxwithdrawals.index')}}">Manage</a>
<table class='table'>
	<tr><th>Id</th><td>{{$dboxwithdrawal->id}}</td></tr>
	<tr><th>Brunch Id</th><td>{{$dboxwithdrawal->brunch_id}}</td></tr>
	<tr><th>Brunch Name</th><td>{{$dboxwithdrawal->brunch_name}}</td></tr>
	<tr><th>Withdrawal Date</th><td>{{$dboxwithdrawal->withdrawal_date}}</td></tr>
	<tr><th>Receiver Name</th><td>{{$dboxwithdrawal->receiver_name}}</td></tr>
	<tr><th>Receipt No</th><td>{{$dboxwithdrawal->receipt_no}}</td></tr>
	<tr><th>Address</th><td>{{$dboxwithdrawal->address}}</td></tr>
	<tr><th>Received Amount</th><td>{{$dboxwithdrawal->received_amount}}</td></tr>
	<tr><th>Box No</th><td>{{$dboxwithdrawal->box_no}}</td></tr>
	<tr><th>Comment</th><td>{{$dboxwithdrawal->comment}}</td></tr>
	<tr><th>Created At</th><td>{{$dboxwithdrawal->created_at}}</td></tr>
	<tr><th>Updated At</th><td>{{$dboxwithdrawal->updated_at}}</td></tr>
	<tr><th>Deleted At</th><td>{{$dboxwithdrawal->deleted_at}}</td></tr>

</table>

@endsection

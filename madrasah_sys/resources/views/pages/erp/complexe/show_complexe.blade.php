@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{route('complexes.index')}}">Manage</a>
<table class='table'>
	<tr><th>Id</th><td>{{$complexe->id}}</td></tr>
	<tr><th>Brunch Id</th><td>{{$complexe->brunch_id}}</td></tr>
	<tr><th>Brunch Name</th><td>{{$complexe->brunch_name}}</td></tr>
	<tr><th>Withdrawal Date</th><td>{{$complexe->withdrawal_date}}</td></tr>
	<tr><th>Receiver Name</th><td>{{$complexe->receiver_name}}</td></tr>
	<tr><th>Receipt No</th><td>{{$complexe->receipt_no}}</td></tr>
	<tr><th>Address</th><td>{{$complexe->address}}</td></tr>
	<tr><th>Received Amount</th><td>{{$complexe->received_amount}}</td></tr>
	<tr><th>Comment</th><td>{{$complexe->comment}}</td></tr>
	<tr><th>Created At</th><td>{{$complexe->created_at}}</td></tr>
	<tr><th>Updated At</th><td>{{$complexe->updated_at}}</td></tr>
	<tr><th>Deleted At</th><td>{{$complexe->deleted_at}}</td></tr>

</table>

@endsection

@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{route('depositcenters.index')}}">Manage</a>
<table class='table'>
	<tr><th>Id</th><td>{{$depositcenter->id}}</td></tr>
	<tr><th>Brunch Id</th><td>{{$depositcenter->brunch_id}}</td></tr>
	<tr><th>Brunch Name</th><td>{{$depositcenter->brunch_name}}</td></tr>
	<tr><th>Collection Date</th><td>{{$depositcenter->collection_date}}</td></tr>
	<tr><th>Member Name</th><td>{{$depositcenter->member_name}}</td></tr>
	<tr><th>Phone</th><td>{{$depositcenter->phone}}</td></tr>
	<tr><th>Received Amount</th><td>{{$depositcenter->received_amount}}</td></tr>
	<tr><th>Purpose Catagory</th><td>{{$depositcenter->purpose_catagory}}</td></tr>
	<tr><th>Receiver Name</th><td>{{$depositcenter->receiver_name}}</td></tr>
	<tr><th>Money Receipt No</th><td>{{$depositcenter->money_receipt_no}}</td></tr>
	<tr><th>Acknowledgment Receipt</th><td>{{$depositcenter->acknowledgment_receipt}}</td></tr>
	<tr><th>Comment</th><td>{{$depositcenter->comment}}</td></tr>
	<tr><th>Created At</th><td>{{$depositcenter->created_at}}</td></tr>
	<tr><th>Updated At</th><td>{{$depositcenter->updated_at}}</td></tr>
	<tr><th>Deleted At</th><td>{{$depositcenter->deleted_at}}</td></tr>

</table>

@endsection

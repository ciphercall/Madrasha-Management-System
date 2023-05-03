@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{route('donationboxes.index')}}">Manage</a>
<table class='table'>
	<tr><th>Id</th><td>{{$donationboxe->id}}</td></tr>
	<tr><th>Brunch Id</th><td>{{$donationboxe->brunch_id}}</td></tr>
	<tr><th>Brunch Name</th><td>{{$donationboxe->brunch_name}}</td></tr>
	<tr><th>Category</th><td>{{$donationboxe->category}}</td></tr>
	<tr><th>Date</th><td>{{$donationboxe->date}}</td></tr>
	<tr><th>Receiver Name</th><td>{{$donationboxe->receiver_name}}</td></tr>
	<tr><th>Address</th><td>{{$donationboxe->address}}</td></tr>
	<tr><th>Box No</th><td>{{$donationboxe->box_no}}</td></tr>
	<tr><th>Phone</th><td>{{$donationboxe->phone}}</td></tr>
	<tr><th>Provider Name</th><td>{{$donationboxe->provider_name}}</td></tr>
	<tr><th>Comment</th><td>{{$donationboxe->comment}}</td></tr>
	<tr><th>Created At</th><td>{{$donationboxe->created_at}}</td></tr>
	<tr><th>Updated At</th><td>{{$donationboxe->updated_at}}</td></tr>
	<tr><th>Deleted At</th><td>{{$donationboxe->deleted_at}}</td></tr>

</table>

@endsection

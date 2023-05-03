@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{route('invitations.index')}}">Manage</a>
<table class='table'>
	<tr><th>Id</th><td>{{$invitation->id}}</td></tr>
	<tr><th>Brunch Id</th><td>{{$invitation->brunch_id}}</td></tr>
	<tr><th>Brunch Name</th><td>{{$invitation->brunch_name}}</td></tr>
	<tr><th>Studid</th><td>{{$invitation->studid}}</td></tr>
	<tr><th>Date</th><td>{{$invitation->date}}</td></tr>
	<tr><th>Name</th><td>{{$invitation->name}}</td></tr>
	<tr><th>Email</th><td>{{$invitation->email}}</td></tr>
	<tr><th>Phone</th><td>{{$invitation->phone}}</td></tr>
	<tr><th>Amount</th><td>{{$invitation->amount}}</td></tr>
	<tr><th>Occasion</th><td>{{$invitation->occasion}}</td></tr>
	<tr><th>Comment</th><td>{{$invitation->comment}}</td></tr>
	<tr><th>Deleted At</th><td>{{$invitation->deleted_at}}</td></tr>
	<tr><th>Created At</th><td>{{$invitation->created_at}}</td></tr>
	<tr><th>Updated At</th><td>{{$invitation->updated_at}}</td></tr>

</table>

@endsection

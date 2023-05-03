@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{route('qurankhatams.index')}}">Manage</a>
<table class='table'>
	<tr><th>Id</th><td>{{$qurankhatam->id}}</td></tr>
	<tr><th>Brunch Id</th><td>{{$qurankhatam->brunch_id}}</td></tr>
	<tr><th>Brunch Name</th><td>{{$qurankhatam->brunch_name}}</td></tr>
	<tr><th>Studid</th><td>{{$qurankhatam->studid}}</td></tr>
	<tr><th>Date</th><td>{{$qurankhatam->date}}</td></tr>
	<tr><th>Name</th><td>{{$qurankhatam->name}}</td></tr>
	<tr><th>Email</th><td>{{$qurankhatam->email}}</td></tr>
	<tr><th>Phone</th><td>{{$qurankhatam->phone}}</td></tr>
	<tr><th>Amount</th><td>{{$qurankhatam->amount}}</td></tr>
	<tr><th>Occasion</th><td>{{$qurankhatam->occasion}}</td></tr>
	<tr><th>Comment</th><td>{{$qurankhatam->comment}}</td></tr>
	<tr><th>Deleted At</th><td>{{$qurankhatam->deleted_at}}</td></tr>
	<tr><th>Created At</th><td>{{$qurankhatam->created_at}}</td></tr>
	<tr><th>Updated At</th><td>{{$qurankhatam->updated_at}}</td></tr>

</table>

@endsection

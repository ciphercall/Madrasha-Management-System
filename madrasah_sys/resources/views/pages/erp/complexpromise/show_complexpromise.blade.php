@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{route('complexpromises.index')}}">Manage</a>
<table class='table'>
	<tr><th>Id</th><td>{{$complexpromise->id}}</td></tr>
	<tr><th>Brunch Id</th><td>{{$complexpromise->brunch_id}}</td></tr>
	<tr><th>Brunch Name</th><td>{{$complexpromise->brunch_name}}</td></tr>
	<tr><th>Date</th><td>{{$complexpromise->date}}</td></tr>
	<tr><th>Cp Name</th><td>{{$complexpromise->cp_name}}</td></tr>
	<tr><th>Deg</th><td>{{$complexpromise->deg}}</td></tr>
	<tr><th>Promise</th><td>{{$complexpromise->promise}}</td></tr>
	<tr><th>Paid</th><td>{{$complexpromise->paid}}</td></tr>
	<tr><th>Comment</th><td>{{$complexpromise->comment}}</td></tr>
	<tr><th>Created At</th><td>{{$complexpromise->created_at}}</td></tr>
	<tr><th>Updated At</th><td>{{$complexpromise->updated_at}}</td></tr>
	<tr><th>Deleted At</th><td>{{$complexpromise->deleted_at}}</td></tr>

</table>

@endsection

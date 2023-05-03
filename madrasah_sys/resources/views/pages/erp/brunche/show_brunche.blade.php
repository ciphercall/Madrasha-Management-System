@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{route('brunches.index')}}">Manage</a>
<table class='table'>
	<tr><th>Id</th><td>{{$brunche->id}}</td></tr>
	<tr><th>Brunch Code</th><td>{{$brunche->brunch_code}}</td></tr>
	<tr><th>Brunch Name</th><td>{{$brunche->brunch_name}}</td></tr>
	<tr><th>Phone</th><td>{{$brunche->phone}}</td></tr>
	<tr><th>Email</th><td>{{$brunche->email}}</td></tr>
	<tr><th>Address</th><td>{{$brunche->address}}</td></tr>
	<tr><th>Brunch Head</th><td>{{$brunche->brunch_head}}</td></tr>
	<tr><th>Designation</th><td>{{$brunche->designation}}</td></tr>
	<tr><th>Bg</th><td>{{$brunche->bg}}</td></tr>
	<tr><th>Deleted At</th><td>{{$brunche->deleted_at}}</td></tr>
	<tr><th>Created At</th><td>{{$brunche->created_at}}</td></tr>
	<tr><th>Updated At</th><td>{{$brunche->updated_at}}</td></tr>

</table>

@endsection

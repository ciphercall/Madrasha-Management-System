@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{route('soboks.index')}}">Manage</a>
<table class='table'>
	<tr><th>Id</th><td>{{$sobok->id}}</td></tr>
	<tr><th>Name</th><td>{{$sobok->name}}</td></tr>
	<tr><th>Deleted At</th><td>{{$sobok->deleted_at}}</td></tr>
	<tr><th>Created At</th><td>{{$sobok->created_at}}</td></tr>
	<tr><th>Updated At</th><td>{{$sobok->updated_at}}</td></tr>

</table>

@endsection

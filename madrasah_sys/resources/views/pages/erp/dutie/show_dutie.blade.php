@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{route('duties.index')}}">Manage</a>
<table class='table'>
	<tr><th>Id</th><td>{{$dutie->id}}</td></tr>
	<tr><th>Name</th><td>{{$dutie->name}}</td></tr>
	<tr><th>Deleted At</th><td>{{$dutie->deleted_at}}</td></tr>
	<tr><th>Created At</th><td>{{$dutie->created_at}}</td></tr>
	<tr><th>Updated At</th><td>{{$dutie->updated_at}}</td></tr>

</table>

@endsection

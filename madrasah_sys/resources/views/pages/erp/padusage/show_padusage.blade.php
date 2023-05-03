@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{route('padusages.index')}}">Manage</a>
<table class='table'>
	<tr><th>Id</th><td>{{$padusage->id}}</td></tr>
	<tr><th>Brunch Id</th><td>{{$padusage->brunch_id}}</td></tr>
	<tr><th>Brunch Name</th><td>{{$padusage->brunch_name}}</td></tr>
	<tr><th>Date</th><td>{{$padusage->date}}</td></tr>
	<tr><th>Padused Des</th><td>{{$padusage->padused_des}}</td></tr>
	<tr><th>Padused Page</th><td>{{$padusage->padused_page}}</td></tr>
	<tr><th>Stock</th><td>{{$padusage->stock}}</td></tr>
	<tr><th>Comment</th><td>{{$padusage->comment}}</td></tr>
	<tr><th>Created At</th><td>{{$padusage->created_at}}</td></tr>
	<tr><th>Updated At</th><td>{{$padusage->updated_at}}</td></tr>
	<tr><th>Deleted At</th><td>{{$padusage->deleted_at}}</td></tr>

</table>

@endsection

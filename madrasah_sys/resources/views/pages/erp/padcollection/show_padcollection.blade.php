@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{route('padcollections.index')}}">Manage</a>
<table class='table'>
	<tr><th>Id</th><td>{{$padcollection->id}}</td></tr>
	<tr><th>Brunch Id</th><td>{{$padcollection->brunch_id}}</td></tr>
	<tr><th>Brunch Name</th><td>{{$padcollection->brunch_name}}</td></tr>
	<tr><th>Date</th><td>{{$padcollection->date}}</td></tr>
	<tr><th>Page No</th><td>{{$padcollection->page_no}}</td></tr>
	<tr><th>Pad Collection</th><td>{{$padcollection->pad_collection}}</td></tr>
	<tr><th>Provider</th><td>{{$padcollection->provider}}</td></tr>
	<tr><th>Comment</th><td>{{$padcollection->comment}}</td></tr>
	<tr><th>Created At</th><td>{{$padcollection->created_at}}</td></tr>
	<tr><th>Updated At</th><td>{{$padcollection->updated_at}}</td></tr>
	<tr><th>Deleted At</th><td>{{$padcollection->deleted_at}}</td></tr>

</table>

@endsection

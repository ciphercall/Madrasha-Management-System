@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{route('jakats.index')}}">Manage</a>
<table class='table'>
	<tr><th>Id</th><td>{{$jakat->id}}</td></tr>
	<tr><th>Brunch Id</th><td>{{$jakat->brunch_id}}</td></tr>
	<tr><th>Brunch Name</th><td>{{$jakat->brunch_name}}</td></tr>
	<tr><th>Donor</th><td>{{$jakat->donor}}</td></tr>
	<tr><th>Category</th><td>{{$jakat->category}}</td></tr>
	<tr><th>Mediam</th><td>{{$jakat->mediam}}</td></tr>
	<tr><th>Amount</th><td>{{$jakat->amount}}</td></tr>
	<tr><th>Created At</th><td>{{$jakat->created_at}}</td></tr>
	<tr><th>Updated At</th><td>{{$jakat->updated_at}}</td></tr>
	<tr><th>Deleted At</th><td>{{$jakat->deleted_at}}</td></tr>

</table>

@endsection

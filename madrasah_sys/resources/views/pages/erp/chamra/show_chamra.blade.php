@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{route('chamras.index')}}">Manage</a>
<table class='table'>
	<tr><th>Id</th><td>{{$chamra->id}}</td></tr>
	<tr><th>Brunch Id</th><td>{{$chamra->brunch_id}}</td></tr>
	<tr><th>Brunche Name</th><td>{{$chamra->brunche_name}}</td></tr>
	<tr><th>Mamber Id</th><td>{{$chamra->mamber_id}}</td></tr>
	<tr><th>Member Name</th><td>{{$chamra->member_name}}</td></tr>
	<tr><th>Date</th><td>{{$chamra->date}}</td></tr>
	<tr><th>Donar Name</th><td>{{$chamra->donar_name}}</td></tr>
	<tr><th>Category</th><td>{{$chamra->category}}</td></tr>
	<tr><th>Animale</th><td>{{$chamra->animale}}</td></tr>
	<tr><th>Medium</th><td>{{$chamra->medium}}</td></tr>
	<tr><th>Qty</th><td>{{$chamra->qty}}</td></tr>
	<tr><th>Created At</th><td>{{$chamra->created_at}}</td></tr>
	<tr><th>Updated At</th><td>{{$chamra->updated_at}}</td></tr>
	<tr><th>Deleted At</th><td>{{$chamra->deleted_at}}</td></tr>

</table>

@endsection

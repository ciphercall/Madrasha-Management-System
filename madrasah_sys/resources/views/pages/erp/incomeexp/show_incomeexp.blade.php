@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{route('incomeexps.index')}}">Manage</a>
<table class='table'>
	<tr><th>Id</th><td>{{$incomeexp->id}}</td></tr>
	<tr><th>Brunch Id</th><td>{{$incomeexp->brunch_id}}</td></tr>
	<tr><th>Brunch Name</th><td>{{$incomeexp->brunch_name}}</td></tr>
	<tr><th>E Date</th><td>{{$incomeexp->e_date}}</td></tr>
	<tr><th>Income</th><td>{{$incomeexp->income}}</td></tr>
	<tr><th>Expanse</th><td>{{$incomeexp->expanse}}</td></tr>
	<tr><th>Comment</th><td>{{$incomeexp->comment}}</td></tr>
	<tr><th>Created At</th><td>{{$incomeexp->created_at}}</td></tr>
	<tr><th>Updated At</th><td>{{$incomeexp->updated_at}}</td></tr>
	<tr><th>Deleted At</th><td>{{$incomeexp->deleted_at}}</td></tr>

</table>

@endsection

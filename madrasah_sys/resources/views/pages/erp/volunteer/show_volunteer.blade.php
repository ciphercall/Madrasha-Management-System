@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{route('volunteers.index')}}">Manage</a>
<table class='table'>
	<tr><th>Id</th><td>{{$volunteer->id}}</td></tr>
	<tr><th>Brunch Id</th><td>{{$volunteer->brunch_id}}</td></tr>
	<tr><th>Brunch Name</th><td>{{$volunteer->brunch_name}}</td></tr>
	<tr><th>Member Id</th><td>{{$volunteer->member_id}}</td></tr>
	<tr><th>Member Name</th><td>{{$volunteer->member_name}}</td></tr>
	<tr><th>Phone</th><td>{{$volunteer->phone}}</td></tr>
	<tr><th>Occasion</th><td>{{$volunteer->occasion}}</td></tr>
	<tr><th>Duty</th><td>{{$volunteer->duty}}</td></tr>
	<tr><th>Present Duty</th><td>{{$volunteer->present_duty}}</td></tr>
	<tr><th>Previous Duty</th><td>{{$volunteer->previous_duty}}</td></tr>
	<tr><th>Duty Date</th><td>{{$volunteer->duty_date}}</td></tr>
	<tr><th>Place</th><td>{{$volunteer->place}}</td></tr>
	<tr><th>Comment</th><td>{{$volunteer->comment}}</td></tr>
	<tr><th>Deleted At</th><td>{{$volunteer->deleted_at}}</td></tr>
	<tr><th>Created At</th><td>{{$volunteer->created_at}}</td></tr>
	<tr><th>Updated At</th><td>{{$volunteer->updated_at}}</td></tr>

</table>

@endsection

@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{route('mahfils.index')}}">Manage</a>
<table class='table'>
	<tr><th>Id</th><td>{{$mahfil->id}}</td></tr>
	<tr><th>Brunch Id</th><td>{{$mahfil->brunch_id}}</td></tr>
	<tr><th>Brunch Name</th><td>{{$mahfil->brunch_name}}</td></tr>
	<tr><th>Start Date</th><td>{{$mahfil->start_date}}</td></tr>
	<tr><th>End Date</th><td>{{$mahfil->end_date}}</td></tr>
	<tr><th>Start Time</th><td>{{$mahfil->start_time}}</td></tr>
	<tr><th>End Time</th><td>{{$mahfil->end_time}}</td></tr>
	<tr><th>Num Speakers</th><td>{{$mahfil->num_speakers}}</td></tr>
	<tr><th>Speakers</th><td>{{$mahfil->speakers}}</td></tr>
	<tr><th>Occasion</th><td>{{$mahfil->occasion}}</td></tr>
	<tr><th>Address</th><td>{{$mahfil->address}}</td></tr>
	<tr><th>Num Audience</th><td>{{$mahfil->num_audience}}</td></tr>
	<tr><th>Created At</th><td>{{$mahfil->created_at}}</td></tr>
	<tr><th>Updated At</th><td>{{$mahfil->updated_at}}</td></tr>
	<tr><th>Deleted At</th><td>{{$mahfil->deleted_at}}</td></tr>

</table>

@endsection

@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{route('fazleahmadis.index')}}">Manage</a>
<table class='table'>
	<tr><th>Id</th><td>{{$fazleahmadi->id}}</td></tr>
	<tr><th>Member Id</th><td>{{$fazleahmadi->member_id}}</td></tr>
	<tr><th>Member Name</th><td>{{$fazleahmadi->member_name}}</td></tr>
	<tr><th>Phone</th><td>{{$fazleahmadi->phone}}</td></tr>
	<tr><th>Brunch Id</th><td>{{$fazleahmadi->brunch_id}}</td></tr>
	<tr><th>Brunch Name</th><td>{{$fazleahmadi->brunch_name}}</td></tr>
	<tr><th>Member Category</th><td>{{$fazleahmadi->member_category}}</td></tr>
	<tr><th>Designation</th><td>{{$fazleahmadi->designation}}</td></tr>
	<tr><th>Date</th><td>{{$fazleahmadi->date}}</td></tr>
	<tr><th>Edition No To</th><td>{{$fazleahmadi->edition_no_to}}</td></tr>
	<tr><th>Edition No From</th><td>{{$fazleahmadi->edition_no_from}}</td></tr>
	<tr><th>Received Amount</th><td>{{$fazleahmadi->received_amount}}</td></tr>
	<tr><th>Money Receipt No</th><td>{{$fazleahmadi->money_receipt_no}}</td></tr>
	<tr><th>Edition Delivery</th><td>{{$fazleahmadi->edition_delivery}}</td></tr>
	<tr><th>Created At</th><td>{{$fazleahmadi->created_at}}</td></tr>
	<tr><th>Updated At</th><td>{{$fazleahmadi->updated_at}}</td></tr>
	<tr><th>Deleted At</th><td>{{$fazleahmadi->deleted_at}}</td></tr>

</table>

@endsection

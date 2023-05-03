@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{route('invitationcenters.index')}}">Manage</a>
<table class='table'>
	<tr><th>Id</th><td>{{$invitationcenter->id}}</td></tr>
	<tr><th>Brunch Id</th><td>{{$invitationcenter->brunch_id}}</td></tr>
	<tr><th>Brunch Name</th><td>{{$invitationcenter->brunch_name}}</td></tr>
	<tr><th>Date</th><td>{{$invitationcenter->date}}</td></tr>
	<tr><th>Tahlil</th><td>{{$invitationcenter->tahlil}}</td></tr>
	<tr><th>Doa Yunus</th><td>{{$invitationcenter->doa_yunus}}</td></tr>
	<tr><th>Darude Saifillah</th><td>{{$invitationcenter->darude_saifillah}}</td></tr>
	<tr><th>Darude Nariya</th><td>{{$invitationcenter->darude_nariya}}</td></tr>
	<tr><th>Quran Katom</th><td>{{$invitationcenter->quran_katom}}</td></tr>
	<tr><th>Occasion</th><td>{{$invitationcenter->occasion}}</td></tr>
	<tr><th>Comment</th><td>{{$invitationcenter->comment}}</td></tr>
	<tr><th>Created At</th><td>{{$invitationcenter->created_at}}</td></tr>
	<tr><th>Updated At</th><td>{{$invitationcenter->updated_at}}</td></tr>
	<tr><th>Deleted At</th><td>{{$invitationcenter->deleted_at}}</td></tr>

</table>

@endsection

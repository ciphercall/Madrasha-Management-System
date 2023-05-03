@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{url('/invitationcenters')}}">Manage</a>
<form action="{{route('invitationcenters.store')}}" method="post" enctype="multipart/form-data">
	@csrf
	{!! select_field(["label"=>"Brunch Id","name"=>"cmbBrunchId","table"=>$brunchs]) !!}
	{!! input_field(["label"=>"Brunch Name","name"=>"txtBrunch_name"]) !!}
	{!! input_field(["label"=>"Date","name"=>"txtDate"]) !!}
	{!! input_field(["label"=>"Tahlil","name"=>"txtTahlil"]) !!}
	{!! input_field(["label"=>"Doa Yunus","name"=>"txtDoa_yunus"]) !!}
	{!! input_field(["label"=>"Darude Saifillah","name"=>"txtDarude_saifillah"]) !!}
	{!! input_field(["label"=>"Darude Nariya","name"=>"txtDarude_nariya"]) !!}
	{!! input_field(["label"=>"Quran Katom","name"=>"txtQuran_katom"]) !!}
	{!! input_field(["label"=>"Occasion","name"=>"txtOccasion"]) !!}
	{!! input_field(["label"=>"Comment","name"=>"txtComment"]) !!}
	{!! input_field(["label"=>"Deleted At","name"=>"txtDeleted_at"]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnCreate","value"=>"Create"]) !!}
</form>

@endsection

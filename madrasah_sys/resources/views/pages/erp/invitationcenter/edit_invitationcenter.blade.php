@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{url('/invitationcenters')}}">Manage</a>
<form action="{{route('invitationcenters.update',$invitationcenter)}}" method="post" enctype="multipart/form-data">
	@csrf
	@method("PUT")
	{!! select_field(["label"=>"Brunch Id","name"=>"cmbBrunchId","table"=>$brunchs,"value"=>$invitationcenter->brunch_id]) !!}
	{!! input_field(["label"=>"Brunch Name","name"=>"txtBrunch_name","value"=>$invitationcenter->brunch_name]) !!}
	{!! input_field(["label"=>"Date","name"=>"txtDate","value"=>$invitationcenter->date]) !!}
	{!! input_field(["label"=>"Tahlil","name"=>"txtTahlil","value"=>$invitationcenter->tahlil]) !!}
	{!! input_field(["label"=>"Doa Yunus","name"=>"txtDoa_yunus","value"=>$invitationcenter->doa_yunus]) !!}
	{!! input_field(["label"=>"Darude Saifillah","name"=>"txtDarude_saifillah","value"=>$invitationcenter->darude_saifillah]) !!}
	{!! input_field(["label"=>"Darude Nariya","name"=>"txtDarude_nariya","value"=>$invitationcenter->darude_nariya]) !!}
	{!! input_field(["label"=>"Quran Katom","name"=>"txtQuran_katom","value"=>$invitationcenter->quran_katom]) !!}
	{!! input_field(["label"=>"Occasion","name"=>"txtOccasion","value"=>$invitationcenter->occasion]) !!}
	{!! input_field(["label"=>"Comment","name"=>"txtComment","value"=>$invitationcenter->comment]) !!}
	{!! input_field(["label"=>"Deleted At","name"=>"txtDeleted_at","value"=>$invitationcenter->deleted_at]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnUpdate","value"=>"Update"]) !!}
</form>

@endsection

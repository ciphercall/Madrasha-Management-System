@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{url('/chamras')}}">Manage</a>
<form action="{{route('chamras.store')}}" method="post" enctype="multipart/form-data">
	@csrf
	{!! select_field(["label"=>"Brunch Id","name"=>"cmbBrunchId","table"=>$brunchs]) !!}
	{!! input_field(["label"=>"Brunche Name","name"=>"txtBrunche_name"]) !!}
	{!! select_field(["label"=>"Mamber Id","name"=>"cmbMamberId","table"=>$mambers]) !!}
	{!! input_field(["label"=>"Member Name","name"=>"txtMember_name"]) !!}
	{!! input_field(["label"=>"Date","name"=>"txtDate"]) !!}
	{!! input_field(["label"=>"Donar Name","name"=>"txtDonar_name"]) !!}
	{!! input_field(["label"=>"Category","name"=>"txtCategory"]) !!}
	{!! input_field(["label"=>"Animale","name"=>"txtAnimale"]) !!}
	{!! input_field(["label"=>"Medium","name"=>"txtMedium"]) !!}
	{!! input_field(["label"=>"Qty","name"=>"txtQty"]) !!}
	{!! input_field(["label"=>"Deleted At","name"=>"txtDeleted_at"]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnCreate","value"=>"Create"]) !!}
</form>

@endsection

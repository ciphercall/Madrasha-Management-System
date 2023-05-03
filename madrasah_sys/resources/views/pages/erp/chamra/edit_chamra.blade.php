@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{url('/chamras')}}">Manage</a>
<form action="{{route('chamras.update',$chamra)}}" method="post" enctype="multipart/form-data">
	@csrf
	@method("PUT")
	{!! select_field(["label"=>"Brunch Id","name"=>"cmbBrunchId","table"=>$brunchs,"value"=>$chamra->brunch_id]) !!}
	{!! input_field(["label"=>"Brunche Name","name"=>"txtBrunche_name","value"=>$chamra->brunche_name]) !!}
	{!! select_field(["label"=>"Mamber Id","name"=>"cmbMamberId","table"=>$mambers,"value"=>$chamra->mamber_id]) !!}
	{!! input_field(["label"=>"Member Name","name"=>"txtMember_name","value"=>$chamra->member_name]) !!}
	{!! input_field(["label"=>"Date","name"=>"txtDate","value"=>$chamra->date]) !!}
	{!! input_field(["label"=>"Donar Name","name"=>"txtDonar_name","value"=>$chamra->donar_name]) !!}
	{!! input_field(["label"=>"Category","name"=>"txtCategory","value"=>$chamra->category]) !!}
	{!! input_field(["label"=>"Animale","name"=>"txtAnimale","value"=>$chamra->animale]) !!}
	{!! input_field(["label"=>"Medium","name"=>"txtMedium","value"=>$chamra->medium]) !!}
	{!! input_field(["label"=>"Qty","name"=>"txtQty","value"=>$chamra->qty]) !!}
	{!! input_field(["label"=>"Deleted At","name"=>"txtDeleted_at","value"=>$chamra->deleted_at]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnUpdate","value"=>"Update"]) !!}
</form>

@endsection

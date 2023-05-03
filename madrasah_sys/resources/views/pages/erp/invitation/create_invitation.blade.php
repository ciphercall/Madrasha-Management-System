@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{url('/invitations')}}">Manage</a>
<form action="{{route('invitations.store')}}" method="post" enctype="multipart/form-data">
	@csrf
	{!! select_field(["label"=>"Brunch Id","name"=>"cmbBrunchId","table"=>$brunchs]) !!}
	{!! input_field(["label"=>"Brunch Name","name"=>"txtBrunch_name"]) !!}
	{!! input_field(["label"=>"Studid","name"=>"txtStudid"]) !!}
	{!! input_field(["label"=>"Date","name"=>"txtDate"]) !!}
	{!! input_field(["label"=>"Name","name"=>"txtName"]) !!}
	{!! input_field(["label"=>"Email","name"=>"txtEmail"]) !!}
	{!! input_field(["label"=>"Phone","name"=>"txtPhone"]) !!}
	{!! input_field(["label"=>"Amount","name"=>"txtAmount"]) !!}
	{!! input_field(["label"=>"Occasion","name"=>"txtOccasion"]) !!}
	{!! input_field(["label"=>"Comment","name"=>"txtComment"]) !!}
	{!! input_field(["label"=>"Deleted At","name"=>"txtDeleted_at"]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnCreate","value"=>"Create"]) !!}
</form>

@endsection

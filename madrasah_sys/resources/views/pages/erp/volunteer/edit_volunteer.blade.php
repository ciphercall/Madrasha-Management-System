@extends('layout.erp.home')
@section('page')

<a class='btn btn-success' href="{{url('/volunteers')}}">Manage</a>
<form action="{{route('volunteers.update',$volunteer)}}" method="post" enctype="multipart/form-data">
	@csrf
	@method("PUT")
	{!! select_field(["label"=>"Brunch Id","name"=>"cmbBrunchId","table"=>$brunchs,"value"=>$volunteer->brunch_id]) !!}
	{!! input_field(["label"=>"Brunch Name","name"=>"txtBrunch_name","value"=>$volunteer->brunch_name]) !!}
	{!! select_field(["label"=>"Member Id","name"=>"cmbMemberId","table"=>$members,"value"=>$volunteer->member_id]) !!}
	{!! input_field(["label"=>"Member Name","name"=>"txtMember_name","value"=>$volunteer->member_name]) !!}
	{!! input_field(["label"=>"Phone","name"=>"txtPhone","value"=>$volunteer->phone]) !!}
	{!! input_field(["label"=>"Occasion","name"=>"txtOccasion","value"=>$volunteer->occasion]) !!}
	{!! input_field(["label"=>"Duty","name"=>"txtDuty","value"=>$volunteer->duty]) !!}
	{!! input_field(["label"=>"Present Duty","name"=>"txtPresent_duty","value"=>$volunteer->present_duty]) !!}
	{!! input_field(["label"=>"Previous Duty","name"=>"txtPrevious_duty","value"=>$volunteer->previous_duty]) !!}
	{!! input_field(["label"=>"Duty Date","name"=>"txtDuty_date","value"=>$volunteer->duty_date]) !!}
	{!! input_field(["label"=>"Place","name"=>"txtPlace","value"=>$volunteer->place]) !!}
	{!! input_field(["label"=>"Comment","name"=>"txtComment","value"=>$volunteer->comment]) !!}
	{!! input_field(["label"=>"Deleted At","name"=>"txtDeleted_at","value"=>$volunteer->deleted_at]) !!}

	{!! input_button(["type"=>"submit","name"=>"btnUpdate","value"=>"Update"]) !!}
</form>

@endsection

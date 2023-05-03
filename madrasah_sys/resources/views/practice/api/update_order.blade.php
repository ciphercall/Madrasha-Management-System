@extends('layout.erp.home')
@section('page')
									@csrf
  @endsection

<?php
if(isset($_POST["btnEdit"])){
	$order_id=$_POST["txtId"];
	$obj=Order::get_order($order_id);
}
if(isset($_POST["btnUpdate"])){
	$order_id=$_POST["txtId"];
	$customer_id=$_POST["cmbCustomer"];
$order_date=$_POST["txtOrder_date"];
$discount=$_POST["txtDiscount"];
$order_total=$_POST["txtOrder_total"];
$paid_amount=$_POST["txtPaid_amount"];
$delivery_date=$_POST["txtDelivery_date"];

	$obj=new Order($order_id,$customer_id,$order_date,$discount,$order_total,$paid_amount,$delivery_date);
	$obj->update();
}
?>
<form class='form-horizontal' action='edit-order' method='post'><div class='card-header'>
				<a href='manage-order' class='btn btn-success'>Manage Order</a>
			</div>
				<div class='card-body'>
<?php
$html="";
$html.=input_field(["type"=>"hidden","name"=>"txtId","value"=>$obj->id]);
$html.=select_field(["label"=>"Customer","name"=>"cmbCustomer","table"=>"customers","value"=>$obj->customer_id]);
$html.=input_field(["label"=>"Order date","name"=>"txtOrder_date","value"=>$obj->order_date]);
$html.=input_field(["label"=>"Discount","name"=>"txtDiscount","value"=>$obj->discount]);
$html.=input_field(["label"=>"Order total","name"=>"txtOrder_total","value"=>$obj->order_total]);
$html.=input_field(["label"=>"Paid amount","name"=>"txtPaid_amount","value"=>$obj->paid_amount]);
$html.=input_field(["label"=>"Delivery date","name"=>"txtDelivery_date","value"=>$obj->delivery_date]);

		echo $html;
?>
			</div>
				<div class='card-footer'>
<?php
	$html=input_button(["type"=>"submit","name"=>"btnUpdate","value"=>"Update"]);
		echo $html;
?>
			</div>
</form>
</section>
    <!-- /.content -->
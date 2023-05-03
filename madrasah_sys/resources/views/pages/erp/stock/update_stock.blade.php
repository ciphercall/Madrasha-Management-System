<?php
if(isset($_POST["btnEdit"])){
	$stock_id=$_POST["txtId"];
	$obj=Stock::get_stock($stock_id);
}
if(isset($_POST["btnUpdate"])){
	$stock_id=$_POST["txtId"];
	$product_id=$_POST["cmbProduct"];
$qty=$_POST["txtQty"];
$transaction_type_id=$_POST["cmbTransaction_type"];

	$obj=new Stock($stock_id,$product_id,$qty,$transaction_type_id);
	$obj->update();
}
?>
<form class='form-horizontal' action='edit-stock' method='post'><div class='card-header'>
				<a href='manage-stock' class='btn btn-success'>Manage Stock</a>
			</div>
				<div class='card-body'>
<?php
$html="";
$html.=input_field(["type"=>"hidden","name"=>"txtId","value"=>$obj->id]);
$html.=select_field(["label"=>"Product","name"=>"cmbProduct","table"=>"products","value"=>$obj->product_id]);
$html.=input_field(["label"=>"Qty","name"=>"txtQty","value"=>$obj->qty]);
$html.=select_field(["label"=>"Transaction","name"=>"cmbTransaction_type","table"=>"transaction_type","value"=>$obj->transaction_type_id]);

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
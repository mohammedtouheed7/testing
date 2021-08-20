<?php
include('../function.php');
error_reporting(0);
$form_name = $_POST['form_name'];

if($form_name == 'add_consignment'){
    $n =  $_POST['n'];
	$query = "insert into t(n)values
		('".$n."')";
		$result = mysqli_query($con,$query);
	if($result)
		echo 1;
	else
		echo 0;

}

if($form_name == 'edit_consignment'){
    $edit_id = $_POST['edit_id'];
	$n =  $_POST['n'];
	$query = "update t set n='".$n."' where id='".$edit_id."'";
	$result = mysqli_query($con,$query);
	if($result)
		echo 1;
	else
		echo 0;
}

if($form_name == 'del_consignment'){
	$tbl_id = $_POST['tbl_id'];
	$query = "DELETE from t where id = '".$tbl_id."'";
	$result = mysqli_query($con,$query);
	if($result){
		echo 1;
	}  else{
		echo 0;
	}
}
?>

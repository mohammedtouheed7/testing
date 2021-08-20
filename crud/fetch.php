<?php
include('../function.php');
// error_reporting(0);
$cmd = $_REQUEST['cmd'];

if($cmd == "get_user"){
    $tbl_id = $_REQUEST['tbl_id'];
    $sql = mysqli_query($con,"SELECT *FROM t where id = '$tbl_id'");
    $row = mysqli_fetch_array($sql);
    echo json_encode($row);
}

?>
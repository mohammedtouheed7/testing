<?php
$con = mysqli_connect('localhost','root','','bookconsignment');

$query3 = "SELECT * FROM `sequence`";
$result3 = mysqli_query($con,$query3);
$count = mysqli_num_rows($result3);
if($count == 0)
{
$seq = 1;
$ref = "GERP";
$a = sprintf("%04d", $seq); //0001
$emp_id = $ref.'-'.$a; //111-0001
$query= "INSERT INTO `sequence` (name) VALUES ('$emp_id')";
$result=mysqli_query($con,$query)or die(mysqli_error($con));
}
else
{
    $query2 = "SELECT * FROM `sequence` ORDER BY id DESC LIMIT 1";
    $result2 = mysqli_query($con,$query2);
    $row = mysqli_fetch_array($result2);
    $last_id = $row['id'];
    $rest = substr("$last_id", -4);  
    $insert_id = "$rest" + 1;
    echo $ars = sprintf("%04d", $insert_id);
    $ref = "GERP";
    $emp_id = $ref.'-'.$ars;
    $query= "INSERT INTO `sequence` (name) VALUES ('$emp_id')";
    $result=mysqli_query($con,$query)or die(mysqli_error($con));
}




?>
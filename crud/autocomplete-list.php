<?php
include('../function.php');
error_reporting(0);

$name = $_GET['term'];
$autocomplete = $_REQUEST['autocomplete'];

if($autocomplete == "get_username"){
  
    $query = "SELECT * FROM t where n LIKE '".$name."%' order by n asc";
    $result = mysqli_query($con,$query);
    while($row = mysqli_fetch_array($result)){
        $result_value['value'] = $row['n']; 
        $result_value['id'] = $row['id']; 
        $search[] = $result_value;
    }
    echo json_encode($search);
}

?>

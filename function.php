<?php

//connect localhost
$con = mysqli_connect("localhost","root","","bcssd");

//get all data
function getData($table_name, $limit){
    global $con;
    $sql = "SELECT * From $table_name LIMIT 0, $limit";
    $result = mysqli_query($con,$sql);
    $arr = array();
    $result_arr = array();
    while($arr = mysqli_fetch_array($result)){
        $result_arr[] = $arr; 
    }
    return $result_arr;
}

//insert data

function addRowInsertData($table_name,$request_data){
    global $con;
    //insert data fields
    $fields = array_keys($request_data);

    //build query

    $sql = "INSERT INTO ".$table_name."(`".implode(' `,` ',$fields)."` )VALUES('".implode("','",$request_data)."')";

    //run query

    return mysqli_query($con,$sql);

}

//delete data

function RowDeleteData($table_name,$where_set=''){
    global $con;
    //check for optional where clause
    $whereQry = '';
    if(!empty($where_set)){

        if(substr(strtoupper(trim($where_set),0,5)) !='WHERE'){

            //keyword not found then
            $whereQry = " WHERE ".$where_set;
        }else{

            $whereQry = " ".trim($where_set);
        }
    }

    //build sql query

    $sql = "DELETE from ".$table_name.$whereQry;

    return mysqli_query($con,$sql);
}

function RowUpdateData($table_name,$request_data,$where_set=''){

    global $con;

    $whereQry = '';

    if(!empty($where_set)){

        if(substr(strtoupper(trim($where_set)),0,5)!='WHERE'){

            //Keyword not found
            $whereQry = " WHERE ".$where_set;
        }else{
            $whereQry = " ".trim($where_set);

        }
    }

    //sql query
    $sql = "UPDATE ".$table_name." SET ";

    //loop and build column

    $sets = array();

    foreach($request_data as $column => $value){
        
        $sets[] = "`".$column."` ='".$value."'";
        
    }
        $sql .= implode(', ',$sets);
        
        //append the where statements

        $sql .= $whereQry;

        //run the statement

        return mysqli_query($con,$sql);

}
function getClient($con,$id)
{
  $sql = "SELECT * from t WHERE id = $id";
  $result = mysqli_query($con,$sql);
  $row=mysqli_fetch_assoc($result);
  return $row['n'];
}

// $form_name = $_POST['form_name'];
// if($form_name == 'edit-user-list'){
//     //extract($_POST);
//     var_dump($_POST);
// }
?>



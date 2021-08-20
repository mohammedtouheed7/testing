<?php
//  include('function.php');
//  $table_name = 't';
 $con = mysqli_connect('localhost','root','','bcssd');

// if(isset($_POST['save'])){
//     unset($_POST['save']);

    $name = $_POST['n'];
    for($i=0;$i<count($_POST['n']);$i++){
        $sql ="INSERT INTO t (n) values('".$name[$i]."')";
        $query_run =mysqli_query($con,$sql);
    }
    // foreach($name as $index => $names){
    //     $s_name = $names; 
    //     // var_dump($s_name);
    //     // exit;
    //     $request_data = $s_name;
        
    // }
    if($query_run)
    echo "inserted";
    else
    echo "Error";
//}



        ?>
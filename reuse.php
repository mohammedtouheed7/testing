<?php
include('function.php');
//get all data
$data = getData('t',5);

foreach($data as $item){?>

    <ul>
     <li><?php echo $item['n'];?></li>
     </ul>
<?php     
}

//insert data

// $data = array("1","2","3","4","5","6","7");
// // var_dump($data);
// // exit;
// $request_data = array(
    
//     'n' => $data[6]
// ) ;

// //insert data

// $insert =addRowInsertData('t',$request_data);
// if($insert){
//     echo "inserted";
// }

//delete data
// $n = 1;
// $delete =RowDeleteData('t', "WHERE n = '$n'");
// if($delete)
// echo "Deleted";


// $id = 9;
// $data = "9";
// $request_data = array(
//     'n' => $data
// );
// $update = RowUpdateData('t', $request_data, "WHERE id = $id");
// // var_dump($update);
// if($update)
// echo "Updated";
$secondsWait = 20;
header("Refresh:$secondsWait");
echo date('Y-m-d H:i:s');
date_default_timezone_set('Asia/Kolkata');
$time = time();
$start_time = date("H:i:s",$time);
echo $start_time;

$s = new DateTime($start_time);
$e = new DateTime("2021-06-15 15:37:00");
$e->add(new DateInterval('PT2M'));
var_dump($e);
if($s == $e) {

echo "interval";
}




?>
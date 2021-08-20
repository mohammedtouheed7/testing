<?php
include('connection.php');
if(isset($_POST['view'] )){

if($_POST["view"] != ''){

    $update_status = mysqli_query($con,"UPDATE `notification` set comment_status = 1 where comment_status = 0");
}
$get_data = mysqli_query($con,"SELECT *FROM `notification` ORDER BY comment_id DESC LIMIT 5");
$output = '';
if(mysqli_num_rows($get_data)>0){

    while($row = mysqli_fetch_assoc($get_data))
    {
        $output .= '
        <li>
        <a href="#">
        <strong>'.$row['comment_subject'].'</strong><br/>
        <small><em>'.$row['comment_text'].'</em></small>
        </a>
        </li>
        ';
    }

}else{
    $output .= '<li><a href="#" class="text-bold text-italic">No Noti Found</a></li>';
}

$status = mysqli_query($con,"SELECT *FROM `notification` where comment_status = 0");
$count = mysqli_num_rows($status);

$data =array(
    'notification' => $output,
    'unseen_notification' => $count
);
echo json_encode($data);

}
?>
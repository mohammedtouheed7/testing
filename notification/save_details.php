<?php
if(isset($_POST["subject"])){
    include('connection.php');

    $subject = $_POST['subject'];
    $comment = $_POST['comment'];

    $query = mysqli_query($con,"INSERT INTO `notification`(`comment_subject`, `comment_text`, `comment_status`) VALUES ('$subject','$comment','0')");
    if($query){
        echo 1;
    }else{
        echo 0;
    }
}
?>
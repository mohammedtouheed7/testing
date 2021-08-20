<?php
	require_once 'conn.php';
 
	if($_POST['blog_id'] == ""){
		$title = $_POST['title'];
		$content = $_POST['content'];
 
		//$conn->query("INSERT INTO `blog` VALUE('', '$title', '$content', 'Draft')");
		$query=mysqli_query($conn,"INSERT INTO `blog` VALUE('', '$title', '$content', 'Draft')");
		$last_id = mysqli_insert_id($conn);
		echo $last_id;
	}else{
		$title = $_POST['title'];
		$content = $_POST['content'];
		$blog_id = $_POST['blog_id'];
		//$conn->query("UPDATE `blog` SET `blog_title` = '$title', `blog_content` = '$content' WHERE `blog_id` = '$blog_id' && `status` = 'Draft'");
		$update = mysqli_query($conn,"UPDATE `blog` SET `blog_title` = '$title', `blog_content` = '$content' WHERE `blog_id` = '$blog_id' && `status` = 'Draft'");
	}
?>
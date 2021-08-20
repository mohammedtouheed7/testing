<?php
	require_once 'conn.php';
 
	if($_POST['blog_id'] == ""){
		$title = $_POST['title'];
		$content = $_POST['content'];
 
		//$conn->query("INSERT INTO `blog` VALUE('', '$title', '$content', 'Post')");
		$query =mysqli_query($conn,"INSERT INTO `blog` VALUE('', '$title', '$content', 'Post')");
		$last_id = mysqli_insert_id($conn);
		echo $last_id;
		
		//echo $conn->insert_id;
	}else{
		$title = $_POST['title'];
		$content = $_POST['content'];
		$blog_id = $_POST['blog_id'];
		//$conn->query("UPDATE `blog` SET `blog_title` = '$title', `blog_content` = '$content', `status` = 'Post' WHERE `blog_id` = '$blog_id'");
		$update = mysqli_query($conn,"UPDATE `blog` SET `blog_title` = '$title', `blog_content` = '$content', `status` = 'Post' WHERE `blog_id` = '$blog_id'");
		
	}
?>
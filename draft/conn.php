<?php
	$conn = new mysqli('localhost', 'root', '', 'bookconsignment');
 
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>
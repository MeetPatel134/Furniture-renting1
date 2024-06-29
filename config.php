<?php
	$conn = new mysqli("localhost","root","","cart1_system");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>
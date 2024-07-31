<?php
	$conn=mysqli_connect("localhost","root","","corephpadmin");
	if (!$conn) {
	  die("Connection failed: " . mysqli_connect_error());
	}
?>
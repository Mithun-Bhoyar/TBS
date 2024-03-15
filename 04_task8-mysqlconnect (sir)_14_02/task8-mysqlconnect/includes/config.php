<?php
	
	// Connection with database Server
	$conn = mysqli_connect("localhost","root","1100") or die("Unable to connect server please contact admin");
	
	// Selection of Database in server
	mysqli_select_db($conn,"ci_guestbook") or die("Unable to Select Database");
	
	// Setup for timezone 
	
	date_default_timezone_set("asia/kolkata");
?>
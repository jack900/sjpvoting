<?php
	$conn = new mysqli('localhost', 'root', '', 'votersystem');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>
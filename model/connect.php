<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "MVC";

	$db = new mysqli($servername, $username, $password, $database);

	$sql = "SELECT * from User";
	$result = $db->query($sql)->fetch_all(MYSQLI_ASSOC);
?>
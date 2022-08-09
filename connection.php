<?php

$conn = "";

try {
	$servername = "testdb.c4hlxce55sbs.ap-south-1.rds.amazonaws.com";
	$dbname = "userdata";
	$username = "root";
	$password = "arihant88";

	$conn = new PDO(
		"mysql:host=$servername; dbname=userdata",
		$username, $password
	);
	
$conn->setAttribute(PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?>


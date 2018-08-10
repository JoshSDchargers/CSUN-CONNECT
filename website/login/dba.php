<?php
$servername = "localhost";
$username = "root";
$password = "Connect_root123!";
$database = "users";

try{
	$conn=new PDO("mysql:host=$servername;dbname=$database",$username,$password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e)
	{
	echo "Error: " . $e->getMessage();
	}
?>

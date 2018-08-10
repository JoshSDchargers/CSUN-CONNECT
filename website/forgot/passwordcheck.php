<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Forgot Password</title>
		<link rel="stylesheet" type="text/css" href="../main.css">
		<link rel="stylesheet" href="../bootstrap.css">
	</head>
	
	<body style="background-color: #FAF0E6;">

<style>
body {  background-image: url(csun.jpg); 
     background-repeat: no-repeat;
     background-attachment: fixed;
} 
</style>
		<ul class="for_ul" style="margin-bottom: 0;">
			<li><img class="forimage" src="../csun connect logo half.jpg"></li>
			<li><a href="../contact.html">Contact</a></li>
			<li><a href="../about.html">About</a></li>
			<li><a href="../home.php">Home</a></li>
		</ul>



<?php
$email = $_POST['forgot'];
$servername = "localhost";
$username = "root";
$password = "Connect_root123!";
$database= "users";
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



	$sql = "SELECT * FROM user";
	$result = mysqli_query($conn, $sql);



$email = $_POST['email'];
$answer1 = $_POST['anw1'];
$answer2 = $_POST['anw2'];


    while($row = mysqli_fetch_array($result)) {



//echo $email;

		if ( $row['email'] == $email){ 
			if ( $answer1 == $row['anw1'] && $answer2 == $row['anw2']){
				echo "<br>";
				echo "<br>";
				echo "<br>";
				echo "<br>";
				echo "<center>";
				echo "Your Username is: ";
				echo $row['uid'];
				echo "<br>";
				echo "Your Password is: ";
				echo $row['pwd'];
				echo "</center>";
					}//if
			
}//if
}//while

?>

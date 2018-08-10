<?php
$number = $_POST['postrating'];
$postid = $_POST['postid'];
$comment =htmlspecialchars($_POST['oldcomment']);
$header =htmlspecialchars($_POST['header']);



$localhost="localhost";
$username="root";
$password="Connect_root123!";
$database="post";


$con=mysqli_connect("$localhost","$username","$password","$database");




//-----------------------------------------------------------------------------------------

$sql = "INSERT INTO rating (header, total, totalrating, comment) VALUES ('$header', '$number', '1', '$comment')";

	if ($con->query($sql) === TRUE) {
   		 echo "New record created successfully";
		} else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
		}


header('Location: website/categories/category/Housing.php#'.$postid);



?>

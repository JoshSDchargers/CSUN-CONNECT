<?php


$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
$email = $_POST['email'];
$date = date_create();
$hello = $date->format('m-d-y');
echo $hello;


include 'dba.php';

//$servername = "localhost";
//$username = "root";
//$password = "Connect_root123!";
//$database = "users";

//try{
//	$conn=new PDO("mysql:host=$servername;dbname=$database",$username,$password);
//	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//}
//catch(PDOException $e)
//	{
//	echo "Error: " . $e->getMessage();
//	}

$stmt=$conn->prepare("INSERT INTO user(first, last, uid, pwd, email, date) VALUES (:first, :last, :uid, :pwd, :email, :date)");

$array=array(
	'first'=>$first,
	'last'=>$last,
	'uid'=>$uid,
	'pwd'=>$pwd,
	'email'=>$email,
	'date'=>$hello
);

$stmt->execute($array);


//$sql = "INSERT INTO user (first, last, uid, pwd, email, date) 
//VALUES ('$first', '$last', '$uid', '$pwd', '$email', '$hello')";
//$result = mysqli_query($conn, $sql);
header("Location: ../index.php");
?>

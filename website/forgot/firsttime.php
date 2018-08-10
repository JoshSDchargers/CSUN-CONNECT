<?php
$servername = "localhost";
$username = "root";
$password = "Connect_root123!";
$database= "users";
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$questionone = $_POST['questionone'];
$answer1 = $_POST['answer1'];
$questiontwo = $_POST['questiontwo'];
$answer2 = $_POST['answer2'];
$firsttime= "1";

echo $questionone;
echo $answer1;
echo $questiontwo;
echo $answer2;



session_start();
echo $_SESSION['user'];
$name = $_SESSION['user'];
echo $name;


$sql = "UPDATE user SET q1 = '$questionone', anw1 = '$answer1', q2='$questiontwo', anw2='$answer2', firsttime='$firsttime' WHERE uid = '$name'";

//$sql = "INSERT INTO user (q1, anw1, q2, anw2) VALUES ('$questionone', '$answer1', '$questiontwo', '$answer2')";
$result = mysqli_query($conn, $sql);
$conn->close();
header('Location: /website/home.php ');

?>

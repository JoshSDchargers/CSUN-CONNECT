<?php


$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}




$postid = rand(5, 1500000);

$servername = "localhost";
$username = "root";
$password = "Connect_root123!";
$database= "post";
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$cat = $_POST['cat'];
$uid = $_POST['uid'];
$date = date_create();
$hello = $date->format('Y-m-d H:i:s');
$header =htmlspecialchars($_POST['header']);
$comment =htmlspecialchars($_POST['comment']);


echo "store";
echo $target_file;

if ($target_file == "img/"){

$sql = "INSERT INTO login_comment (header, comment, category, date, uid, dir, postid) VALUES ('$header', '$comment', '$cat', '$hello', '$uid', '0', $postid )";
$result = mysqli_query($conn, $sql);
$conn->close();
header('Location: /website/home.php ');



} else {

$sql = "INSERT INTO login_comment (header, comment, category, date, uid, dir, postid) VALUES ('$header', '$comment', '$cat', '$hello', '$uid', '$target_file', $postid)";
$result = mysqli_query($conn, $sql);
$conn->close();
header('Location: /website/home.php ');

}
?> 

<?php
$users = $_POST['uid'];
$number = $_POST['green'];
echo $users;
//echo $number;

$localhost="localhost";
$username="root";
$password="Connect_root123!";
$database="rating";






$con=mysqli_connect("$localhost","$username","$password","$database");
    $result = mysqli_query($con,"SELECT * FROM rates");



    while($row = mysqli_fetch_array($result)) {
		

if ($row['uid'] == $users){
		$working = "WORKING";
		echo $row['uid'];
               	$total = $row['total'];
		$totaluser = $row['totaluser'];
			break;


}//if

}//while

if ( $working == NULL){
		$con=mysqli_connect("$localhost","$username","$password","$database");
    			if (mysqli_connect_errno()){
      				echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

$sql = "INSERT INTO rates (uid, total, totaluser) VALUES ('$users', '$number', '1')";  


	if (mysqli_query($con, $sql)) {
    			echo "New record created successfully";
} else {
   		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}

				mysqli_close($con);
				header("Location: ../profile.php? test=$users");
 
				exit(0);
}//IFNULL

//---------------------------------------------------------------------------------------

$con->close();

echo "\n\n\n\n";


$total = $total + $number;
$totaluser = $totaluser + 1;


echo $total;
echo $totaluser;

//-------------------------------------------------------------------------------------------


$conn=mysqli_connect("$localhost","$username","$password","$database");
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
} 
$sql = "UPDATE rates SET total='$total', totaluser='$totaluser' WHERE uid='$users'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
		} else {
echo "Error updating record: " . $conn->error;
}

$conn->close();
echo $users;
   

header("Location: ../profile.php? test=$users");




//---------------------------------------------------------------------------------------

?>

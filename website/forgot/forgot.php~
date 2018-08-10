<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Forgot Password</title>
		<link rel="stylesheet" type="text/css" href="../css/main.css">
	
	</head>
	
	<body style="background-color: #FAF0E6;">

<style>
body {  background-image: url(csun.jpg); 
     background-repeat: no-repeat;
     background-attachment: fixed;
} 
</style>
		<ul class="for_ul" style="margin-bottom: 0;">
			<li><img class="forimage" src="../img/logo.png"></li>
			<li><a href="../contact.html">Contact</a></li>
			<li><a href="../about.html">About</a></li>
			<li><a href="../index.php">Home</a></li>
		</ul>

<div class="table-title">
<table class="table-fill>
<thead>
<tr>
<th class="red_th" colspan="2">Whoops!</th>
</tr>
</thead>
<tbody class="table-hover text_align">
<tr class="table-fill2">
<td class="text-left" colspan="2">
<br><br><br><br><br><br><br><br>
<p> It appears that you have entered the wrong information</p>
<a href="javascript:history.back()">Click to go back and try again</a>
</td>
</tr>
<tfoot>
<tr>
<th class="red_tfoot2" colspan="2">
</th>
</tr>
</tfoot>
</tbody>
</table>
<?php



//------------------------------
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


    while($row = mysqli_fetch_array($result)) {

		if ($row['email'] == $email){ 

?>
<center>
          <h3>Please Answer Secuirty Quiestions</h3>
		     <br>
		<form action="passwordcheck.php" method='post'>
			<h4><?php echo $row['q1']; ?></h4>
			<br>
			<input type='text' name='anw1' placeholder='Enter answer'>
			<br>
		        <br>
			<input type='hidden' name='email' value='<?php echo "$email";?>'/> 
			<h4><?php echo $row['q2']; ?></h4>
			<br>
			<input type='text' name='anw2' placeholder='Enter answer'>
			<br>
			<input type='submit' value='submit' onclick="answers()">
			</form>
</center>
<?php

}//if loop
}//while loop

?>

</body>
</html>



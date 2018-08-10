<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<title>CSUN Connect</title>
		<link rel="stylesheet" type="text/css" href="./main.css">
		<link rel="stylesheet" href="./bootstrap.css">
	</head>
	
	<body style="background-color: #FAF0E6;">

<style>
body {  background-image: url(csun.jpg); 
     background-repeat: no-repeat;
     background-attachment: fixed;
} 
</style>
		<ul class="for_ul" style="margin-bottom: 0;">
			<li><img class="forimage" src="./csun connect logo half.jpg"></li>
			<li><a href="contact.html">Contact</a></li>
			<li><a href="about.html">About</a></li>
			<form action="login/cat/reg.html">
				<li style="float:right; margin:10px 50px 0 0;"><button class="h example pinterest" type="submit">Sign Up</li>
			</form>
			<form action="login/log.php" method="POST">
				<li style="float:right; margin:10px 25px 0 0;"><button class="h example pinterest" type="submit">Login</li>
				<li style="float:right; margin:10px 0 0 0; width:170px;"><font color="white">Password </font><input class="f" type="password" name="pwd" placeholder="Password"></li>
				<li style="float:right; margin:10px 0 0 0;"><font color="white">Username </font><input class="f" type="text" name="uid" placeholder="Username"></li>
			</form>
		</ul>
		
		<div class="content-outer">
			<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
			<div class="table-title">
				<h3><strong>Current Posts</strong></h3>
			</div>


<?php
$localhost="localhost";
$username="root";
$password="lakers3224";
$database="post";


  $con=mysqli_connect("localhost","root","Connect_root123!","post");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $result = mysqli_query($con,"SELECT * FROM login_comment ORDER BY date DESC");

    while($row = mysqli_fetch_array($result)) {
echo "<table class='table-fill'>";
echo "<thead>";
echo"<tr>";
echo"<th class='red_th' colspan='2'><center>";
echo $row['header'];  
echo "</center></th>";
echo "</tr>";
echo"</thead>";
echo "<tbody class='table-hover text_align'>";
echo "<tr class='table-fill2'>";
echo "<td class='text-left' colspan= '2'><p>Description: ";
echo $row['comment'];
echo "</p></td>";
echo"</tr>";
echo"<tr class='table-fill3'>";
echo "<td class='text-left td_cat'><p>Category:"; 
echo $row['category'];
echo "</p></td>";
echo "<td class='text-left td_cat'><p>Username: XXXXXXXXXXXXX </p></td></tr>";
echo "<tfoot>";
echo "<tr>";
echo "<th class='red_tfoot' colspan='2'>";
echo "Date:  ";
echo $row['date'];
echo "</th></tr>";
echo "</tfoot>";
echo"</tbody>";
echo "</table>";

echo "<br><br>";
echo "</div>";
echo "</body>";
}

    mysqli_close($con);
?>
</html>

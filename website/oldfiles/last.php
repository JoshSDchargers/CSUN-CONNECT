<!DOCTYPE html>

<?php echo date("I F d, Y"); ?>
	<head>
		<meta charset="utf-8">
		<title>CSUN Connect</title>
		<link rel="stylesheet" type="text/css" href="./main.css">
		<link rel="stylesheet" href="./bootstrap.css">
	</head>
	
	<body  style="background-color: #FAF0E6;">
		<ul style="margin-bottom: 0;">
			<li><img class="forimage" src="./csun connect logo half.jpg"></li>
			<li><a class="active" href="#">Posts</a></li>
			<li><a href="#">Contact</a></li>
			<li><a href="#">About</a></li>
			<form action="login/signup.php">
			<li style="float:right; margin:10px 50px 0 0;"><button class="h example pinterest" type="submit">Sign Up</li>
</form>
			<form action="login/log.php" method="POST">
			<li style="float:right; margin:10px 25px 0 0;"><button class="h example pinterest" type="submit">Login</li>
			<li style="float:right; margin:10px 0 0 0; width:170px;"><font color="white">Password </font><input class="f" type="text" name="pwd" placeholder="Password"></li>
			<li style="float:right; margin:10px 0 0 0;"><font color="white">Username </font><input class="f" type="text" name="uid" placeholder="Username"></li>
			</form>
		</ul>
		
		<div class="content-outer">
		
	<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
</head>

<body>


<div class="table-title">
<h3><strong>Current Posts</strong></h3>
</div>

<?php
$localhost="localhost";
$username="root";
$password="lakers3224";
$database="post";


  $con=mysqli_connect("localhost","root","lakers3224","post");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $result = mysqli_query($con,"SELECT * FROM login_comment");

    while($row = mysqli_fetch_array($result))
      {
      echo "<table class='table-fill'>";
      echo "<th colspan='2'><center>";
    	 echo $row['header'];  
	echo "</center></th>";
//--------------------------------
echo "<th>";
echo "<tbody class='table-hover'>";
echo "<td class='text-left'><p>";
echo $row['comment'];
echo "</p></td>";
echo "</tr>";
	

//-------------------
echo "<th>";
echo "<tbody class='table-hover'>";
echo "<td class='text-left'><p>";
echo "username"; 
echo "</p></td>";
echo "</tr>";
//-------------------
echo "<th>";
echo "<tbody class='table-hover'>";
echo "<td class='text-left'><p>";
echo "email"; 
echo "</p></td>";
echo "</tr>";
//-------------------
echo "<br><br>";


      }

    mysqli_close($con);
    ?>

	</body>

</html>

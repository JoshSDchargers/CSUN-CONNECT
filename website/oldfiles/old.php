<!DOCTYPE html>
    
	<head>
		<meta charset="utf-8">
		<title>CSUN Connect Home</title>
		<link rel="stylesheet" type="text/css" href="./main.css">
		<link rel="stylesheet" href="./bootstrap.css">
	</head>
	<body style="background-color: #FAF0E6;">
		<!--<div class="dropdown">-->
		<ul style="margin-bottom: 0;">
			<li><img class="forimage" src="./csun connect logo half.jpg"></li>

			<!--<div class="dropdown" style="float:right; margin: 10px 60px 0 0;">
				<button class="h example pinterest dropbtn" onclick="myFunction()">Menu</li>
				<!--<div id="myDropdown" class="dropdown-content">
					<a href="#home">Home</a>
					<a href="#about">About</a>
					<a href="#contact">Contact</a>
				</div>
			</div>-->
<?php
session_start();
echo "<li style='float:right; margin:25px 20px 0 0;'><font color='white'>Welcome, ";
echo $_SESSION['user'];
echo "</font></li>";
?>
		</ul>
	<br><br><br>
	<div id="sidebar">
				
	  	<table class= "sidebar">
		    <a href="project/create.php">Create post</a><br>
		    <a href="">Catagories</a><br>
		    <a href="">Log out</a><br>
		    <a href="">Your Profile</a><br>
		</table>
</body>

	

<br><br>
<div>
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
</div>		
		
	</body>
	</div>
</html>

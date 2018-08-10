<!DOCTYPE HTML>
<html>
<head>
<title>Profile</title>
<link href="profile/css/main2.css" rel="stylesheet" type="text/css" media="all" />

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
			<script src="js/jquery-1.11.1.min.js"></script>
			<!---- start-smoth-scrolling---->
			<script type="text/javascript" src="js/move-top.js"></script>
			<script type="text/javascript" src="js/easing.js"></script>
			 <script type="text/javascript">
					jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
							});
						});
				</script>
<!---End-smoth-scrolling---->
 
	</head>
			<body>
				<ul class="for_ul" style="margin-bottom: 0;">
					<li><img class="forimage" src="img/logo.png"></li>
					<li><a href="contact_page.php">Contact</a></li>
					<li><a href="about_page.php">About</a></li>
					<li><a href="home.php">Home</a></li>
					<li style="float:right; margin:25px 20px 0 0;"><font color="white">Welcome, 
<?php 
session_start();
echo $_SESSION['user']; 
?>

</font></li>
				</ul>
	
			



			<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
				<div class="table-title2">
					<h3><strong>My Profile</strong></h3>
				</div>
		
		<!--start-header-section-->
							
				</div>
			</div>
		<!--end header-section-->
			<!--start-study-section-->

<?php
$localhost="localhost";
$username="root";
$password="Connect_root123!";
$database="users";



  $con=mysqli_connect("localhost","root","Connect_root123!","users");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $result = mysqli_query($con,"SELECT * FROM user");

    while($row = mysqli_fetch_array($result)) {

                $test = $_GET['test'];    
echo $test;
echo $test;

if ($row['uid'] == $test){
	$firstname = $row['first']; 
	$lastname = $row['last'];
	$username = $row['uid'];
	$email = $row['email'];
	$date = $row['date'];
	}
   }
?>			<div class="study-section">
				<div class="container">
					<div class="study-grids">
						
					<table class="table-fill">
					<thead>
						<tr>
							<th class="red_th" colspan="2"><center>Account information</center></th>
						</tr>
					</thead>
					<tbody class="table-hover text_align">
						<tr class="table-fill3">
							<td class="text-left" colspan= "2"><p>Full Name:  <?php 
echo $firstname;
echo " ";
echo $lastname;
 ?></p></td>
						</tr>
						<tr class="table-fill3">
							<td class="text-left" colspan="2"><p>Email:
<?php
echo $email
?></p></td>
						</tr>
				<tr class="table-fill3">

							<td class="text-left" colspan="1"><p>Username:
<?php
echo $username;
$other = $username;
?></p></td>
							<td class="text-left" colspan="1"><p>Date Joined:
<?php
echo $date
?></p></td>
						</tr>

							<td class="text-left" colspan="1"><p>Rating:

<?php
//ratingcode
$localhost="localhost";
$username="root";
$password="Connect_root123!";
$database="rating";

    $con=mysqli_connect("$localhost","$username","$password","$database");
    $result = mysqli_query($con,"SELECT * FROM rates");
    

	while($row = mysqli_fetch_array($result)) {
		if ($row['uid'] == $test){
              		 	$total = $row['total'];
				$totaluser = $row['totaluser'];
			         break;


}//if
}//while

$display = $total / $totaluser;
$display = $display * 100;


echo ceil($display);
echo " %"


?>
</p></td>
<td class="text-left" colspan="1">

	<form method="post" action="userrating/rating.php">
<center>
<label>
  <input type="radio" name="green" value="1" />
  <img src="userrating/up.png">
</label>

<label>
  <input type="radio" name="green" value="0" />
  <img src="userrating/down.png">
</label>
   			 <button class="buttons" type="submit">Rate Now!!!</button>
    			 <input type="hidden" name="uid" value=<?php echo $other; ?>>
</center>

</form>

</td>
						</tr>
<style>
label > input{ /* HIDE RADIO */
  visibility: hidden; /* Makes input not-clickable */
  position: absolute; /* Remove input from document flow */

}
label > input + img{ /* IMAGE STYLES */
  cursor:pointer;
  border:2px solid transparent;
  width:37%;
  height:37%;
  margin-top: 2px;
}
label > input:checked + img{ /* (RADIO CHECKED) IMAGE STYLES */
  border:2px solid #f00;
}

</style>					
						<tfoot>
							<tr>
								<th class="red_tfoot2" colspan="2"></th>
							</tr>
						</tfoot>
					</tbody>
				</table>
						
					<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<!--end study-section-->
		
			<!--start-footer-section-->
			<div class="footer-section">
						<div class="container">
							<div class="footer-top">
						
									</div>
							<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
					
			
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
				</div>
			</div>
	<!--end-footer-section-->
<center>
	<h2>Leave a Comment !!!</h2>
<div id="comment_form">

           <form action="userrating/usercomments.php" method="post">
		<textarea rows="10" name="comment" id="comment" placeholder="Comment"></textarea>
		<input type="hidden" name="loginuid" value="<?php echo $other ?>">
		<input type="hidden" name="commentuid" value="<?php echo $_SESSION['user']?>">
		<input type="submit" name="submit" value="Add Comment">
	   </form>
	
</div>
</center>
<br><br>
<center><h1> User Comments </h1></center>
<br>

<center>
<div class="tablewrapper">
	<table class="fulltable">


	<?php

$localhost="localhost";
$username="root";
$password="Connect_root123!";
$database="rating";

    $con=mysqli_connect("$localhost","$username","$password","$database");
    $result = mysqli_query($con,"SELECT * FROM comment");



 while($row = mysqli_fetch_array($result)) {
		if ($row['uid'] == $other){
  			 echo "<tr>";
     				echo "<td>";
 			 echo $row['rid'];
                         echo " "; 
 			echo $row['date']; 
				echo "</td>";
     				echo "<td>";
 				 echo $row['comment'];
				echo "</td>";
  			 echo "</tr>";

}
}


?>
</table>


</div>
</center>


<style>
.tablewrapper {position:center; width:80%; height:170px; overflow:scroll;}
table {width:100%; position:center;}
.fulltable {background:#ccc; position: center;}
</style>




<style>
.over{
    width: 80%;
    height: 200px;
    overflow: scroll;   
}
.text
{
border-style:solid;
border-color:#287EC7;
border-width: 5px;
    width: 85%;
}
 
body {
	font-family: 'Lucida Grande', 'Helvetica Neue', sans-serif;
	font-size: 13px;
}

#comment_form input, #comment_form textarea {
	border: 4px solid rgba(0,0,0,0.1);
	padding: 8px 10px;
	
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	
	outline: 0;
}

#comment_form textarea {
	width: 550px;
        height: 100px; 
}

#comment_form input[type="submit"] {
	cursor: pointer;
	background: -webkit-linear-gradient(top, #efefef, #ddd);
	background: -moz-linear-gradient(top, #efefef, #ddd);
	background: -ms-linear-gradient(top, #efefef, #ddd);
	background: -o-linear-gradient(top, #efefef, #ddd);
	background: linear-gradient(top, #efefef, #ddd);
	color: #333;
	text-shadow: 0px 1px 1px rgba(255,255,255,1);
	border: 1px solid #ccc;
}

#comment_form input[type="submit"]:hover {
	background: -webkit-linear-gradient(top, #eee, #ccc);
	background: -moz-linear-gradient(top, #eee, #ccc);
	background: -ms-linear-gradient(top, #eee, #ccc);
	background: -o-linear-gradient(top, #eee, #ccc);
	background: linear-gradient(top, #eee, #ccc);
	border: 1px solid #bbb;
}



#comment_form div {
	margin-bottom: 8px;
}


</style>

</body>
</html> 

<!DOCTYPE html>
<head>
		<meta charset="utf-8">
		<title>CSUN Connect Home</title>
		<link rel="stylesheet" type="text/css" href="./main.css">
		<link rel="stylesheet" href="./bootstrap.css">
	</head>
	
	<body style="background-color: #FAF0E6;">
		<ul class="for_ul" style="margin-bottom: 0;">
			<li><img class="forimage" src="./csun connect logo half.jpg"></li>
			<li><a href="#">Contact</a></li>
			<li><a href="#">About</a></li>
                        <li><a href="home.php">Home</a></li>
			<?php
session_start();
echo "<li style='float:right; margin:25px 20px 0 0;'><font color='white'>Welcome, ";
echo $_SESSION['user'];
echo "</font></li>";
?>
		</ul>
		
		<div class="content-outer">
			<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
			<div class="table-title">
				<h3><strong>Current Posts</strong></h3>
			</div>
<?php
$localhost="localhost";
$username="root";
$password="Connect_root123!";
$database="post";


  $con=mysqli_connect("localhost","root","Connect_root123!" ,"post");
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
echo "<td class='text-left td_cat'><p>Email:";
echo $row['email'];
echo "</p></td></tr>";
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


<table class="left_table">
					<thead>
						<tr>
							<th class="red_th" colspan="2"><center>Side Table</center></th>
						</tr>
					</thead>
					<tbody class="table-hover text_align">
						<tr class="left_table-fill">
							<td class="text-left" colspan= "2">		    
<a href="project/create.php">Create post</a><br></td>
						</tr>
						<tr class="left_table-fill">
							<td class="text-left left_td_cat"> <a href="login/cat/cat.html">Catargories</a></td>
						</tr>
						<tr class="left_table-fill">
							<td class="text-left" colspan= "2"><a href="logout.php">Logout</a></td>
						</tr>
						<tr class="left_table-fill">
							<td class="text-left left_td_cat"><a href="project/profile.php">Your Profile</a></td>

						</tr>
						<tfoot>
							<tr>
								<th class="left_red_tfoot" colspan="2"></th>
							</tr>
						</tfoot>
					</tbody>
				</table>
				
			</div>
	</body>
		<script>
			/* When the user clicks on the button,
			toggle between hiding and showing the dropdown content */
			function myFunction() {
				document.getElementById("myDropdown").classList.toggle("show");
			}

			// Close the dropdown if the user clicks outside of it
			window.onclick = function(event) {
			  if (!event.target.matches('.dropbtn')) {

				var dropdowns = document.getElementsByClassName("dropdown-content");
				var i;
				for (i = 0; i < dropdowns.length; i++) {
				  var openDropdown = dropdowns[i];
				  if (openDropdown.classList.contains('show')) {
					openDropdown.classList.remove('show');
				  }
				}
			  }
			}
		</script>

</html>

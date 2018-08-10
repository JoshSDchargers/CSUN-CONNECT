<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>CSUN Connect</title>
		<link rel="stylesheet" type="text/css" href="main.css">
				<script src="./pace/pace.js" type="text/javascript"></script>
		<link href="./pace/themes/theme.css" rel="stylesheet" />
		<link rel="icon" href="./img/favicon.ico" type="image/x-icon">
	</head>
	
	<body>
		<ul class="for_ul" style="margin-bottom: 0;">
			<li><img class="forimage" src="./img/logo.png"></li>
			<li><a class="active" href="contact_page.php">Contact</a></li>
			<li><a href="about_page.php">About</a></li>
			<li><a href="home.php">Home</a></li>
			
			
			<?php
session_start();
echo "<li style='float:right; margin:25px 20px 0 0;'><font color='white'>Welcome, ";
echo $_SESSION['user'];
if ( $_SESSION['user'] == NULL){

header('Location: index.php');


}
echo "</font></li>";
?>
		</ul>
			
		
		<div class="content-outer">
			<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
			<div class="table-title">
				<h3><strong></strong></h3>
			</div>
				<table class="table-fill">
					<thead>
						<tr>
							<th class="red_th" colspan="2">Contact Information</th>
						</tr>
					</thead>
					<tbody class="table-hover text_align">
						<tr class="table-fill2">
							<td class="text-left" colspan= "2">
							
							<center>
	<p>CSUN Connect is located in Jacaranda Hall Room 2277.</p>
	<p>	18111 Nordhoff St </p>
	<p>	Northridge, CA 91330 </p>
	<p><a href="mailto:hello@csunconnect.com?Subject=Hello!">Hello@CSUNConnect.com</a></p>
                                <img src="img/map.png" style="border-radius:50%;" />
                                </center>
							
							</td>
						</tr>
                    </tbody>
            </table>
            

								

				<br><br>
            <table class="table-fill">
					<thead>
						<tr>
							<th class="red_th" colspan="2">Contact Information</th>
						</tr>
					</thead>
					<tbody class="table-hover text_align">
						<tr class="table-fill2">
							<td class="text-left" colspan= "2">
							
							<center>
                                <form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
	<div class="row">
		<label for="name">Your name:</label><br />
		<input id="name" class="input" name="name" type="text" value="" size="30" /><br />
	</div>
	<div class="row">
		<label for="email">Your email:</label><br />
		<input id="email" class="input" name="email" type="text" value="" size="30" /><br />
	</div>
	<div class="row">
		<label for="message">Your message:</label><br />
		<textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
	</div>

</form>					
	<tfoot>
							<tr>
								<th class="red_th" colspan="2">
                                    
								   <center><button style=color:red;>Submit</button>
                                     </center>    
								</th>
							</tr>
						</tfoot>
                                </center>
							
							</td>
						</tr>
                    </tbody>
            </table>
				
        </div>
		<ul class="cb-slideshow">
            <li><span>1</span><div><h3></h3></div></li>
            <li><span>2</span><div><h3></h3></div></li>
            <li><span>3</span><div><h3></h3></div></li>
            <li><span>4</span><div><h3></h3></div></li>
            <li><span>5</span><div><h3></h3></div></li>
            <li><span>6</span><div><h3></h3></div></li>
        </ul> 
	</body>
</html>

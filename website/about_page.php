<!DOCTYPE html>
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
			<li><a href="contact_page.php">Contact</a></li>
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
				<h3><strong><center></center></strong></h3>
			</div>
				<table class="table-fill">
					<thead>
						<tr>
							<th class="red_th" colspan="2">About Us</th>
						</tr>
					</thead>
					<tbody class="table-hover text_align">
						<tr class="table-fill2">
							<td class="text-left" colspan= "2">
							<center>
                <p>CSUN Connect is a website that allows the selling or buying services and items. </p>
		<p>
		We offer a comprehensive catalog of classifieds that will display the items or services that their fellow peers are offering or searching for. 
		</p>
		<p>
		CSUN Connect caters completely towards CSUN students in order to keep transactions local and trustworthy.</p>
		<p>
		 Students will create accounts using the unique email they’re provided by CSUN, without it, account creation will be unsuccessful. </p>
		 <p>
		  Since these classifieds are posted by students, they are continuously updated by the students themselves, ensuring that new offers are always ready.
             
		</p>
              <br>
                                <br>
                                
		CSUN Connect is proudly operated by:
		<br>
		<br>
               
             
        <img src="img/pranab.jpg" height = "300px" width="300px" style="border-radius:50%;"/>
		<p><strong>Pranab Sharma</strong> <br> Program Lead</p>
        <img src="img/josh.jpg" height = "300px" width="300px" style="border-radius:50%;"/>                        
		<p><strong>Joshua Aguirre</strong> <br> Backend Developer</p>
        <img src="img/mig.jpg" height = "300px" width="300px" style="border-radius:50%;"/>                        
        <p><strong>Miguel Tovar</strong> <br> Backend Developer</p>
        <img src="img/jose.gif" height = "300px" width="300px" style="border-radius:50%;"/>                        
        <p><strong>Jose Arellano</strong> <br> System Manager</p>
        <img src="img/yvonne.jpg" height = "300px" width="300px" style="border-radius:50%;"/>
		<p><strong>Yvonne Nguyen</strong> <br> Frontend Developer</p>
        <img src="img/jake.gif" height = "300px" width="300px" style="border-radius:50%;"/>
        <p><strong>Jacob Idolor</strong> <br> Frontend Developer</p>
                                   
							</center>
							
							
							
							
							
							
							
							
							
							
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

				<br><br>
				
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

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>CREATE POST</title>
	<head>
		<meta charset="utf-8">
		<title>CSUN Connect</title>
		<link rel="stylesheet" type="text/css" href="../main.css">
				<link href="./pace/themes/theme.css" rel="stylesheet" />
		<link rel="icon" href="./img/favicon.ico" type="image/x-icon">
		<link rel="icon" href="../img/favicon.ico" type="image/x-icon">
	</head>
	
	<body style="background-color: #FAF0E6;" >
		<ul class="for_ul" style="margin-bottom: 0;">
			<li><img class="forimage" src="../img/logo.png"></li>
			<li><a href="../contact_page.php">Contact</a></li>
			<li><a href="../about_page.php">About</a></li>
			<li><a href="../home.php">Home</a></li>
	
			
			
			<?php
session_start();
echo "<li style='float:right; margin:25px 20px 0 0;'><font color='white'>Welcome, ";
echo $_SESSION['user'];
if ( $_SESSION['user'] == NULL){

header('Location: ../../../index.php');


}
echo "</font></li>";
?>
		</ul>
		
<br><br><br><br><br><br>
	</head>	
<body class="backg";>


<div class="content-outer">
			<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
			<div class="table-title">
				<h3><strong></strong></h3>
			</div>
				<table class="table-fill">
					<thead>
						<tr>
							<th class="red_th" colspan="2">Create a post</th>
						</tr>
					</thead>
					<tbody class="table-hover text_align">
						<tr class="table-fill2">
							<td class="text-left" colspan= "2">
							<br><center>
							<h3>Create a title</h3>
							<form action="dbacomment.php" method="post" enctype = "multipart/form-data">
<center><input name="header" placeholder="Title of Post" type="text" class="css-input" required >
<input type="hidden" name="uid" value="<?php echo $_SESSION['user']; ?>" ></center>
    <h3>Upload an Image</h3>
<input type="file" name="fileToUpload" id="fffuu">
<h3>Choose a catagory</h3>
<select name="cat" class="select_join">
  <option value="Activities">Activities</option>
  <option value="Art">Art</option>
  <option value="Car">Cars</option>
  <option value="Classes">Classes</option>
  <option value="Childcare">Childcare</option>
  <option value="Community">Community</option>
  <option value="Discussion">Discussion forums</option>
  <option value="Events">Events</option>
  <option value="Fashion">Fashion</option>
  <option value="Forsale">For sale</option>
  <option value="Free">Free</option>
  <option value="Gaming">Gaming</option>
  <option value="General">General</option>
  <option value="Groups">Groups</option>
  <option value="Housing">Housing</option>
  <option value="Jobs">Jobs</option>
  <option value="Lost+found">Lost+found</option>
  <option value="Other">Other</option>
  <option value="Pets">Pets</option>
  <option value="Phone">Phones</option>
  <option value="Politics">Politics</option>
  <option value="Rants">Rants</option>
  <option value="School">School</option>
  <option value="Services">Services</option>
  <option value="Technology">Technology</option>
  <option value="Volunteers">Volunteers</option>
</select><br><br>
 <h3>Enter a discription</h3>
  <textarea name="comment" id="comment" placeholder="Enter your discription here" required maxlength="350"></textarea><br>
<input type="submit" value="Submit" class="btn btn--right">
</form>


<style>
 .css-input, textarea { width: 100%;
  padding: 20px 10px;
  border: none;
  font-size: 1em;
  color: black;
  border-bottom: 1px dotted rgba(250, 250, 250, 0.4);
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -moz-transition: background-color 0.5s ease-in-out;
  -o-transition: background-color 0.5s ease-in-out;
  -webkit-transition: background-color 0.5s ease-in-out;
  transition: background-color 0.5s ease-in-out; } 
.css-input, textarea:-moz-placeholder {
  color: #81aac9;
}
.css-input, textarea:-ms-input-placeholder {
  color: #81aac9;
}
.css-input, textarea:-webkit-input-placeholder {
  color: #81aac9;
}
.css-input:focus {
  background-color: #4478a0;
}

    
.backg{    background-color: #4478a0;}

.select_join {
  width: 370px;
  height: 38px;
  overflow: hidden;
  border: #FEFEFE 1px solid;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  -webkit-box-shadow: inset 0px 0px 10px 1px #FEFEFE;
  box-shadow: inset 0px 0px 10px 1px #FEFEFE;
}
.select_join select {
  background: transparent;
  width: 170px;
  font-size:7pt;
  color:grey;
  border: 0;
  border-radius: 0;
  height: 28px;
  -webkit-appearance: none;
}
.select_join select:focus {
  outline: none;
}

textarea {
    height: 150px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    background-color: white;
    font-size: 16px;
    resize: none;
}
    textarea:focus {

  background-color: #4478a0;

    }
</style>
<form>

</form>
					</td>
						</tr>
                    </tbody>
            </table>
            

								

      
				
        </div>





































<!--<h1><center>Create post</center></h1>
<form action="dbacomment.php" method="post" enctype = "multipart/form-data">
<center><input name="header" placeholder="header" type="text" class="css-input">
<input type="hidden" name="uid" value="<-?php echo $_SESSION['user']; ?>" >
<p>Upload img</p>
<input type="file" name="fileToUpload" id="fffuu">
<center><h4> Categories </h4><center>
<select name="cat" class="select_join">
  <option value="Activities">Activities</option>
  <option value="Art">Art</option>
  <option value="Car">Cars</option>
  <option value="Classes">Classes</option>
  <option value="Childcare">Childcare</option>
  <option value="Community">Community</option>
  <option value="Discussion">Discussion forums</option>
  <option value="Events">Events</option>
  <option value="Fashion">Fashion</option>
  <option value="Forsale">For sale</option>
  <option value="Free">Free</option>
  <option value="Gaming">Gaming</option>
  <option value="General">General</option>
  <option value="Groups">Groups</option>
  <option value="Housing">Housing</option>
  <option value="Jobs">Jobs</option>
  <option value="Lost+found">Lost+found</option>
  <option value="Other">Other</option>
  <option value="Pets">Pets</option>
  <option value="Phone">Phones</option>
  <option value="Politics">Politics</option>
  <option value="Rants">Rants</option>
  <option value="School">School</option>
  <option value="Services">Services</option>
  <option value="Technology">Technology</option>
  <option value="Volunteers">Volunteers</option>
</select><br><br>
  <textarea name="comment" id="comment">Some text...</textarea><br>
<input type="submit" value="Submit">
</form>


<style>
 .css-input { border-color:#cccccc; padding:15px; font-size:14px; border-width:20px; border-radius:0px; border-style:hidden;  } 
		 .css-input:focus { outline:none; } 
.backg{    background-color: #FAF0E6;}

.select_join {
  width: 370px;
  height: 38px;
  overflow: hidden;
  background: url('http://s24.postimg.org/lyhytocf5/dropdown.png') no-repeat right #FEFEFE;
  border: #FEFEFE 1px solid;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  -webkit-box-shadow: inset 0px 0px 10px 1px #FEFEFE;
  box-shadow: inset 0px 0px 10px 1px #FEFEFE;
}
.select_join select {
  background: transparent;
  width: 170px;
  font-size:7pt;
  color:grey;
  border: 0;
  border-radius: 0;
  height: 28px;
  -webkit-appearance: none;
}
.select_join select:focus {
  outline: none;
}

textarea {
    width: 40%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #white;
    font-size: 16px;
    resize: none;
}
</style>
<form>

</form>
-->


</body>
</html>

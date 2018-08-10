
<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<title>CSUN Connect</title>
		<link rel="stylesheet" type="text/css" href="../main.css">
		<link rel="stylesheet" href="./bootstrap.css">
	</head>
	
	<body style="background-color: #FAF0E6;">

<style>
body {  background-image: url(../csun.jpg); 
     background-repeat: no-repeat;
     background-attachment: fixed;
} 
</style>
		<ul class="for_ul" style="margin-bottom: 0;">
			<li><img class="forimage" src="../csun connect logo half.jpg"></li>
			<li><a href="contact.html">Contact</a></li>
			<li><a href="about.html">About</a></li>
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
<br><br><br><br>
<script type="text/javascript" src="http://irc.unitedchat.net/flash/swfobject.js"></script>
<center><div id="flashcontent">
This chat application requires <a href="http://www.adobe.com/go/getflash/">Flash Player.</a>
</div></center>
<script type="text/javascript">
	var so = new SWFObject("http://irc.unitedchat.net/flash/VLoader.swf", "ChatNow", "780", "550", "7", "#FFFFFF");
	so.addParam("base", "http://irc.unitedchat.net/flash/");
	so.addVariable("versionsurl", "chatnow-versions.xml");
	so.addVariable("initswf", "/flash/ChatNow.swf");
	so.addVariable("themedirectory", "themes/");
	so.addVariable("themename", "Theme-Minimal.swf");
	so.addVariable("room", "#csunconnect");
	so.addVariable("user", "");
	so.addVariable("fullname", "");
	so.addVariable("connect", "true");
	so.addVariable("allowusercommands", "true");
	so.addVariable("showsystemmessages", "false");
	so.addVariable("showjoinmessages", "true");
	so.addVariable("showpartmessages", "true");
	so.addVariable("showradio", "false");
	so.write("flashcontent");
</script>

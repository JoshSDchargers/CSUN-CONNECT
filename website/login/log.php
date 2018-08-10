
<?php
	session_start();
	include 'dba.php';


		$uid = $_POST['uid'];
		$pwd = $_POST['pwd'];

	$stmt = $conn->prepare('SELECT * FROM user WHERE uid=:username AND pwd=:pass');
	
	$array=array(
	'username'=>$uid,
	'pass'=>$pwd
	);

	$stmt->execute($array);

	$count=$stmt->rowCount();
	$row=$stmt->fetch();

	if($count==1){
	
		echo "you're in";
		if( $row['firsttime'] == "0"){
 			echo "working";
			$_SESSION['user'] = "$uid";
			header('Location: http://192.168.200.55/website/firstimelogin.html');	
		}

		if( $row['firsttime'] == "1"){
			header('Location: http://192.168.200.55/website/home.php');
			$_SESSION['user'] = "$uid";
		}	



	}
	else{
		header('Location: http://192.168.200.55/website/forgot.php');
	}


?>
							


<?php
	session_start();
?>
<?php
	$con = mysqli_connect('127.0.0.1:3306', 'root','','hackaton');
		$query = mysqli_query($con, "UPDATE users SET login='{$_POST['login']}', pol='{$_POST['pol']}', birthday='{$_POST['birthday']}'");
	header("Location: profile.php");
?>

<?php
	$con = mysqli_connect('127.0.0.1:3306', 'root', '', 'hackaton'); 
	$text = "INSERT INTO users (id, login, email, password, pol, birthday)  VALUES ('{$_POST['id']}', '{$_POST['login']}', '{$_POST['email']}', '{$_POST['password']}', '{$_POST['pol']}', '{$_POST['birthday']}')";
	$zapros_dlya_vvoda = mysqli_query($con, $text);
	header("Location: log.php");
?>
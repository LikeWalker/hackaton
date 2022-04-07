<?php
	$con = mysqli_connect('127.0.0.1:3306', 'root', '', 'hackaton'); 
	$text = "INSERT INTO profile (id, name, pol, age, img)  VALUES ('{$_POST['id']}', '{$_POST['name']}', '{$_POST['pol']}','{$_POST['age']}', '{$_POST['img']}')";
	$zapros_dlya_vvoda = mysqli_query($con, $text);
	header("Location: pets.php");
?>
<?php
	$con = mysqli_connect('127.0.0.1:3306', 'root', '', 'test_hack'); 
	$text = "INSERT INTO question (name, category, question)  VALUES ('{$_POST['name']}', '{$_POST['category']}', '{$_POST['question']}')";
	$zapros_dlya_vvoda = mysqli_query($con, $text);
	header("Location: question.php");
?>
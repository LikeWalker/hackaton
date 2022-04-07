<?php
	$connect = mysqli_connect("127.0.0.1:3306","root","","hackaton");
	$text_zaprosa_vstavit = "DELETE FROM pets WHERE id = '{$_POST["delete"]}'";
	$zapros_dlya_vvoda = mysqli_query($connect, $text_zaprosa_vstavit); //для ввода в таблицу
	header('Location: pets.php');
?>
<?php
	/* Подключение файлов */
	require_once("function/img_function.php");
	/* Создание объекта класса */
	$image = new Image();
	if(isset($_POST["load"])){						//Если кнопка нажата
		$image -> saveImage($_FILES["image"]);
	}
?>
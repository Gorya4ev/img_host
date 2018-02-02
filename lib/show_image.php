<?php
	/* Подключение файлов */
	require_once("function/dbimg_function.php");
	require_once("function/check_session.php");
	require_once("function/img_function.php");
	/* Создание объекта класса */
	$view = new ImageView();
	$session = new Session();
	$session -> Check_log();
	$image = new Image();
	$results = $image -> loadImage();
	if($results){													// Если result = true то запись переменных и передача данных
		$path = $results["path"];
		$link = $results["link"];
		$view -> getBd($link,$_SESSION["name"]);
	} 
?>
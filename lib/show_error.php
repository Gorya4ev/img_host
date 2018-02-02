<?php
	/* Подключение файлов */
	require_once("../function/check_session.php");
	require_once("function/img_function.php");
	/* Создание объекта класса */
	$session = new Session();
	$session -> Check_log();
	$image = new Image();
	$code = $_GET["code"];
	$text = $image -> getTextError($code);			// Передача гет запроса кода ошибки
?>
<?php
	/* Подключение файлов */
	require_once("../function/check_session.php");
	require_once("../function/admin.php");
	/* Создание объекта класса */
	$session = new Session();
	$session -> Check_log();
	$admin = new Admin();
	$admin -> register($_POST['login'], trim(htmlspecialchars($_POST['passwd'] . "img178a")), $_POST['rank']);		// Передача логина и пароля
?>
<?php
	/* Подключение файлов */
	require_once("../function/auth_function.php");
	/* Создание объекта класса */
	$auth = new Auth();
	$auth -> auth(trim(htmlspecialchars($_POST['login'])), trim(htmlspecialchars($_POST['passwd']."img178a")));		// Передача логина и пароля для авторизации
?>
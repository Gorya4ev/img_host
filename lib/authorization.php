<?php
	/* ����������� ������ */
	require_once("../function/auth_function.php");
	/* �������� ������� ������ */
	$auth = new Auth();
	$auth -> auth(trim(htmlspecialchars($_POST['login'])), trim(htmlspecialchars($_POST['passwd']."img178a")));		// �������� ������ � ������ ��� �����������
?>
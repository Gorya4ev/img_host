<?php
	/* ����������� ������ */
	require_once("../function/check_session.php");
	require_once("function/img_function.php");
	/* �������� ������� ������ */
	$session = new Session();
	$session -> Check_log();
	$image = new Image();
	$code = $_GET["code"];
	$text = $image -> getTextError($code);			// �������� ��� ������� ���� ������
?>
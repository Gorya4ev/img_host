<?php
	/* ����������� ������ */
	require_once("function/dbimg_function.php");
	require_once("function/check_session.php");
	require_once("function/img_function.php");
	/* �������� ������� ������ */
	$view = new ImageView();
	$session = new Session();
	$session -> Check_log();
	$image = new Image();
	$results = $image -> loadImage();
	if($results){													// ���� result = true �� ������ ���������� � �������� ������
		$path = $results["path"];
		$link = $results["link"];
		$view -> getBd($link,$_SESSION["name"]);
	} 
?>
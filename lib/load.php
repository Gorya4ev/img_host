<?php
	/* ����������� ������ */
	require_once("function/img_function.php");
	/* �������� ������� ������ */
	$image = new Image();
	if(isset($_POST["load"])){						//���� ������ ������
		$image -> saveImage($_FILES["image"]);
	}
?>
<?php
	/* Подключение файлов */
	require_once("function/check_session.php");
	require_once("lib/show_error.php");
	/* Создание объекта класса */
	$session = new Session();
	$session -> Check_log();
	$session -> Exit_sess($_POST['exit']);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Личный хостинг картинок</title>
		<link rel="stylesheet" href="style/bootstrap.min.css">
		<link rel="stylesheet" href="style/style.css">
	</head>
	<body>
		<div class="container-fluid">
			<div class="container">
				<div class="row">
				<div class="col-xs-12 col-sm-3">
					<form action="index.php" method="POST">
						<button class="btn btn-success" type="submit" name="enter">Главная</button>
					</form>
				</div>
				<div class="col-xs-12 col-sm-6">
					<h1>Ошибка при загрузке</h1>
					<p>Код ошибки: <b><?php echo $code; ?></b></p>
					<p>Текст ошибки: <b><?php echo $text; ?></b></p>
				</div>
				<div class="col-xs-12 col-sm-3">
					<p>Ваше имя: <?php echo $_SESSION['name']; ?></p>
					<?php $session -> Exit_button(); ?>
				</div>
				</div>
			</div>
		</div>
	<script src="js/bootstrap.min.js"></script>
	</body>
</html>
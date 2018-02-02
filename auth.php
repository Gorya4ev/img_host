<?php
	/* Подключение файлов */
	require_once("function/check_session.php");
	/* Создание объекта класса */
	$session = new Session();
	$session -> redirect();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Авторизация</title>
		<link rel="stylesheet" href="style/bootstrap.min.css">
		<link rel="stylesheet" href="style/style.css">
	</head>
	<body>
		<div class="container-fluid top-margin">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-4"></div>
					<div class="col-xs-12 col-sm-4">
						<form action="lib/authorization.php" method="POST">
							<div class="form-group">
								<label for="log" class="entry-lab">Логин</label>
								<input class="form-control" type="text" name="login" id="log" placeholder="Введите логин">
							</div>
							<div class="form-group">
								<label for="passw" class="entry-lab">Пароль</label>
								<input class="form-control" type="password" name="passwd" id="passw" placeholder="Введите пароль">
							</div>
							<div class="form-group text-center">
								<button class="btn btn-success" type="submit" name="enter">Авторизоваться</button>
							</div>
						</form>
					</div>
					<div class="col-xs-12 col-sm-4"></div>
				</div>
			</div>
		</div>
	<script src="js/bootstrap.min.js"></script>
	</body>
</html>
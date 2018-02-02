<?php	
	/* Подключение файлов */
	require_once("function/dbimg_function.php");
	require_once("function/check_session.php");
	require_once("function/admin.php");
	require_once("lib/load.php");
	/* Создание объекта класса */
	$view = new ImageView();
	$admin = new Admin();
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
					<?php echo $admin -> formReg($_SESSION['name']); ?>
				</div>
				<div class="col-xs-12 col-sm-7">
					<form action="" method="POST" enctype="multipart/form-data">
						<label class="">Выбор изображения:</label>
						<input type="file" name="image">
						<input type="submit" name="load" class="form-control btn btn-success">
					</form>
					<table class="table">
						<thead>
							<tr>
								<th>Изображение</th>
								<th>Логин</th>
								<th>Ссылка</th>
							</tr>
						</thead>
						<tbody>
						<?php $view -> viewImg(); ?>
						</tbody>
					</table>
				</div>
					<div class="col-xs-12 col-sm-2">
						<p>Ваше имя: <?php echo $_SESSION['name']; ?></p>
						<p>Вы: <?php echo $admin -> getRank($_SESSION['name']); ?></p>
						<?php $session -> Exit_button(); ?>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
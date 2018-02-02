<?php
	session_start();
	class Session{
		public function Check_log(){						// Проверка наличия сессии
			if(!$_SESSION['name']){
				header("location: /auth.php");
			}
		}
		public function Exit_button(){						// Если сессия существует, выводим кнопку выхода
			if($_SESSION['name']){
				echo "<form method='POST'><button class='btn btn-success' type='submit' name='exit'>Выход</button><form>";
			}
		}
		public function Exit_sess($button){					// Если кнопка выхода нажата удаляем сессию
			if(isset($button)){
				unset($_SESSION['name']);
				session_destroy();
				header("location: /auth.php");
			}
		}
		public function redirect(){							// Если сессия есть - редирект на главную страницу
			if($_SESSION['name']){
				header("location: /index.php");
			}
		}
	}
?>
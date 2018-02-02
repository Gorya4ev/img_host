<?php
	session_start();
	class Auth {
		private $connect;
		private $result;
		private $user_data;
		private $info;
		
		public function __construct() {												//Конструкт с подключением
			$this -> connect = new mysqli('localhost', 'root', '', 'users');		// Подключение к БД
		}
		
		private function check($login, $passwd){			// функция проверки логина и пароля
			if(empty($login) || empty($passwd)){			// Если логин или пароль не введен
				header("refresh: 3; url=../auth.php");
				echo "<center>Пустое поле логина или пароля!</center>";
			}elseif(!empty($login) && !empty($passwd)){			// Если логин и пароль введены оба
				if(!isset($_SESSION['name'])){											// Если сессия не существует
				$this -> result = $this -> connect -> query("SELECT * FROM user WHERE login='$login'");				// Ищем таблицу
				$this -> user_data = $this -> result -> fetch_array(MYSQLI_ASSOC);									// Ассоциативный массив
					if($this -> user_data['login'] == $login && $this -> user_data['password'] == md5($passwd)) {			// Если логин и пароль совпадают с данными из базы
						return true;
					} else {																						// Если логин и пароль не совпадают
						header("refresh: 3; url=../auth.php");
						echo "<center>Неверен логин или пароль</center>";
					}
				}
			}else{														//Другая ошибка
				header("refresh: 3; url=../auth.php");
				echo "<center>Неизвестная ошибка</center>";
			}
		}
		
		public function auth($login, $passwd){								// Функция авторизации
			$this -> info = $this -> check($login, $passwd);				// Вызов функции проверки данных
			if($this->info){												// Если проверка успешна
				$_SESSION['name'] = $login;
				header("location: ../index.php");
			}
		}
	}
?>
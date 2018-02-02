<?php
	class Admin {
		private $connect;
		private $check;
		private $info;
		private $rank;
		private $reqister;
		
		public function __construct(){
			$this -> connect = new mysqli('localhost', 'root', '', 'users');
		}
		
		private function checkAdmin($login){
			$this -> chack = $this -> connect -> query("SELECT * FROM user WHERE login='$login'");					// Берем запрос из базы по логину
			$this -> info = $this -> chack -> fetch_array(MYSQLI_ASSOC);										// Помещяем в асоц массив
			$this -> rank = $this -> info['rank'];																// Из асоц массива берем rank
		}
		
		public function getRank($login){
			$this -> checkAdmin($login);								// Проверка ранга, есди в переменной rank записано admin то вернется - админ
			if($this -> rank == "admin"){
				return "Администратор";
			}else{
				return "Пользователь";
			}
		}
		
		public function register($login, $passwd, $reg_rank){
			$this -> connect -> query("INSERT INTO `user` (`login`,`password`, `rank`) VALUES ('$login',md5('$passwd'),'$reg_rank')");				// Регистрация нового пользователя
			header("location: ../index.php");
		}
		
		public function formReg($login){
			$this -> checkAdmin($login);				
			if($this -> rank == "admin"){																			// Если вы админ - у вас будет форма создания нового пользователя
				return "<form action='lib/register.php' method='POST' enctype='multipart/form-data' style='text-align:center;'>
						<label>Регистрация нового пользователя</label>
						<input type='text' name='login' placeholder='Логин'>
						<input type='password' name='passwd' placeholder='Пароль'>
						<select name='rank'>
							<option value='admin'>Админ</option>
							<option value='user'>Пользователь</option>
						</select>
						<input type='submit' name='load' class='form-control btn btn-success' value='Добавить'>
					</form>";
			}
		}
	}
?>
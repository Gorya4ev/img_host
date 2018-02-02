<?php
	class ImageView {
		private $connect;
		private $data;
		public $row;
		public $image;
		public $login;
		
		public function __construct(){
			$this -> connect = new mysqli('localhost', 'root', '', 'users');		// Подключения к бд
		}
		
		public function getBd($link, $login){
			$this -> connect -> query("INSERT INTO `img`(`login`, `img`) VALUES ('$login', '$link')");			// Передача запроса с логином и ссылкой на картинку
		}
		
		public function viewImg(){ 
			$this -> image=[]; 
			if($this -> data = $this -> connect -> query("SELECT * FROM `img` ")){ 						// Если сбор данных прошел удачно
				while($this -> row = $this -> data -> fetch_assoc()){  									// Цикл пока true
					$this -> image[] = $this->row['img']; 												// Запись каждого цикла в массив
					$this -> login[] = $this->row['login']; 
				} 
				$this -> image = array_reverse($this -> image); 										// Перевернут массив
				$this -> login = array_reverse($this -> login); 
				for($a=0;$a < count($this -> login);$a++){ 											// Вывод строк в таблицу
					echo "<tr> 
					<td><img src='{$this -> image[$a]}' alt='Картинка' width='100px'></td> 
					<td>{$this -> login[$a]}</td> 
					<td><a href='{$this -> image[$a]}' target='_blank'>{$this -> image[$a]}</a></td>"; 
				} 
			} 
		}
	}
?>
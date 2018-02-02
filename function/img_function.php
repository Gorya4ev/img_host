<?php
	class Image {
		private $error = 0;
		
		public function saveImage($file){
			if(!$this -> isSecurity($file)){
				header("location: error.php?code=" . $this -> error);
				exit;
			}
			$name = $this -> getName($file["name"]);
			$uploadfile = "images/$name";
			if(move_uploaded_file($file["tmp_name"], $uploadfile)){
				header("location: image.php?im=$name");
			}else{
				$this -> error = 3;
				header("location: error.php?code=" . $this -> error);
			}
			exit;
		}
		
		public function loadImage(){
				$im = $_GET["im"];
				if(!$im){
					return false;
				}
				if(!file_exists("images/$im")){
					return false;
				}
				$results["path"] = "images/$im";
				$results["link"] = "http://" . $_SERVER["HTTP_HOST"] . "/images/$im";
				return $results;
		}
		
		private function isSecurity($file){
			$blacklist = array(".php", ".phtml", ".php3", ".php4", ".html", ".htm");
			foreach($blacklist as $item){
				if(preg_match("/$item\$/i", $file["name"])){
					$this -> error = 1;
					return false;
				}
			}
			$type = $file["type"];
			$size = $file["size"];
			if(($type != "image/jpeg") && ($type != "image/jpg") && ($type != "image/png")){ // Типы файла
				$this -> error = 1;
				return false;
			}
			if($size > 51200000){												// Ограничение объема файла
				$this -> error = 2;
				return false;
			}
			return true;
		}
		
		private function getName($filename){
			$name = substr(md5(microtime()), 0, 8);						// Генерирует имя файла и обрезает его
			$name .= strrchr($filename, ".");
			if(!file_exists("images/$name")){
				return $name;
			}else{
				return $this -> getName();
			}
			
		}
		
		public function getTextError($code){							// Возврат ошибки в зависимости от гет запроса
			if($code == 1){
				return "Неверный тип файла";
			}elseif($code == 2){
				return "Превышен максимальный размер загружаемого файла";
			}elseif($code == 3){
				return "Ошибка при загрузки";
			}
		}
	}
?>
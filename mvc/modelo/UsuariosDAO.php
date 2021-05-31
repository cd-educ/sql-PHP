<?php
	
	include ("../conn.php");

	class UsuariosDAO{

		// SELECT SIN FILTRO
		public static function listar(){

			global $mysqli;
			$result = $mysqli->query("SELECT * FROM usuarios");
			$rows = array();
			while($row = $result->fetch_assoc()) {

				$nombre = $row["nombre"];
				$edad = $row["edad"];
				$email = $row["email"];

				$rows[] = new Usuario($nombre,$edad,$email);

			}

			return $rows;
			
		}

		// INSERT
		public static function crear($nombre,$edad,$email){

			global $mysqli;
			$query = $mysqli->query("INSERT INTO usuarios(nombre,edad,email) VALUES ('$nombre',$edad,'$email')");
			if(!$query){
				die($mysqli->error);
			}
		}

		

	}

	class Usuario{

		public $nombre;
		public $edad;
		public $email;

		public function __construct($nombre,$edad,$email){
			$this->nombre = $nombre;
			$this->edad = $edad;
			$this->email = $email;
		}

	}

?>
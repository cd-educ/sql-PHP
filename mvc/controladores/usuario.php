
<?php

	include("../modelo/UsuariosDAO.php");

	if($_SERVER['REQUEST_METHOD'] == "GET"){

		$usuarios = UsuariosDAO::listar();

	} else if($_SERVER["REQUEST_METHOD"] == "POST"){

		$nombre = $_POST["nombre"];
		$edad = intval($_POST["edad"]);
		$email = $_POST["email"];

		// Lógica de campos completos, con sentido, etc etc...

		UsuariosDAO::crear($nombre,$edad,$email);
		
		$usuarios = UsuariosDAO::listar();

	} else if($_SERVER["REQUEST_METHOD"] == "DELETE"){

		echo "Borrar usuario";
	
	}

	require_once("../vista/viewUsuarios.php");

?>
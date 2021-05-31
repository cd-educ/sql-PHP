<?php

require_once("conn.php");

if($_SERVER['REQUEST_METHOD'] == "GET"){

	$id = $_GET["id"];

	//CONSULTA/SELECT A DB
	$sql = "SELECT * FROM usuarios WHERE id=$id";
	$result = $mysqli->query($sql);
	if (!$result) {
		die("Error ".$mysqli->errno." - ".$mysqli->error);
	}
	echo "Select ejecutado <br>";

	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()) {
			echo "Nombre: " . $row["nombre"]. "<br>";
			echo "Edad: " . $row["edad"]. "<br>";
		}
	}

}


?>
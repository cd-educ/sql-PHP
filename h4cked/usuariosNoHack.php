<?php

require_once("conn.php");

if($_SERVER['REQUEST_METHOD'] == "GET"){

	$id = $_GET["id"];

	//CONSULTA/SELECT A DB
	$stmt = $mysqli->prepare("SELECT * FROM usuarios WHERE id= ?");
	$stmt->bind_param("s", $id);
	$stmt->execute();
	$result = $stmt->get_result();
	echo "Select ejecutado <br>";

	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()) {
			echo "Nombre: " . $row["nombre"]. "<br>";
			echo "Edad: " . $row["edad"]. "<br>";
		}
	}

}


?>
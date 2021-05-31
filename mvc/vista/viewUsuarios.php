<?php
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Usuarios ABM</title>
	</head>
	<body>
	
		<h1>Usuarios ABM</h1>

		<div class="">

			<h2>Usuarios</h2>
			
			<ul>
				<?php
			        foreach ($usuarios as $usuario) {
			            echo "<li>".$usuario->email." <button>Borrar</button> <button>Modificar</button></li>";
			        }
			    ?>
			</ul>

		</div>
		
		<div class="">

			<h2>Crear usuario</h2>

			<form method="POST" action="../controladores/usuario.php">

				<input type="text" name="nombre" placeholder="Nombre">
				<input type="text" name="edad" placeholder="Edad">
				<input type="text" name="email" placeholder="Email">
				<input type="submit" value="Crear usuario">

			</form>

		</div>

	</body>

</html>
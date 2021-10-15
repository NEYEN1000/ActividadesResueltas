<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<title>Primera web</title>
	<script src="https://kit.fontawesome.com/412f384ddd.js" crossorigin="anonymous"></script>
</head>

<body>
	<div class="container-fluid">
		<main>
			<?php

			$registro = array();

			$datosUsuario1= array();
			$datosUsuario1["nombre"] = "Samanta";
			$datosUsuario1["dni"] = "32569875";
			$datosUsuario1["apellido"] = "Strudel";
			$datosUsuario1["edad"] = 10;
			$datosUsuario1["email"] = "Samanta20@gmail.com";

			$datosUsuario2 = array();
			$datosUsuario2["nombre"] = "Mablel";
			$datosUsuario2["dni"] = "80546932";
			$datosUsuario2["apellido"] = "Millei";
			$datosUsuario2["edad"] = 90;
			$datosUsuario2["email"] = "Mabe911@hotmail.com";

			$datosUsuario3 = array();
			$datosUsuario3["nombre"] = "Gabriel";
			$datosUsuario3["dni"] = "40006998";
			$datosUsuario3["apellido"] = "Barcasoo";
			$datosUsuario3["edad"] = 32;
			$datosUsuario3["email"] = "elgabobarcasso@outlook.es";

			$datosUsuario4 = array();
			$datosUsuario4["nombre"] = "Marisa";
			$datosUsuario4["dni"] = "92564872";
			$datosUsuario4["apellido"] = "Ascaso";
			$datosUsuario4["edad"] = 40;
			$datosUsuario4["email"] = "marisascaso@outlook.es";

			$datosUsuario5 = array();
			$datosUsuario5["nombre"] = "Ariel";
			$datosUsuario5["dni"] = "40006995";
			$datosUsuario5["apellido"] = "Olmos";
			$datosUsuario5["edad"] = 24;
			$datosUsuario5["email"] = "soydeboca100@gmail.com";

			$registro[0] = $datosUsuario1;
			$registro[1] = $datosUsuario2;
			$registro[2] = $datosUsuario3;
			$registro[3] = $datosUsuario4;
			$registro[4] = $datosUsuario5;

			//EMPEZAMOS A UTILIZAR ROWS
			echo "<div class=\"row\">";
			echo "<div class=\"col-12 col-sm-2 text-center\"><h3><em>Nombre</em></h3></div>";
			echo "<div class=\"col-12 col-sm-2 text-center\"><h3><em>Apellido</em></h3></div>";
			echo "<div class=\"col-12 col-sm-1 text-center\"><h3><em>Edad</em></h3></div>";
			echo "<div class=\"col-12 col-sm-3 text-center\"><h3><em>Email</em></h3></div>";
			echo "<div class=\"col-12 col-sm-2 text-center\"><h3><em>Dni</em></h3></div>";
			echo "</div>";
			// Cuando coloco count (registro) es la cantidad de registros que tenga
			$i = 0;
			while($i<count($registro)) 
			{
				echo "<div class=\"row\">";
				echo "<div class=\"col-12 col-sm-2 text-center\">" . $registro[$i]["nombre"] . "</div>";
				echo "<div class=\"col-12 col-sm-2 text-center\">" . $registro[$i]["apellido"] . "</div>";
				echo "<div class=\"col-12 col-sm-1 text-center\">" . $registro[$i]["edad"] . "</div>";
				echo "<div class=\"col-12 col-sm-3 text-center\">" . $registro[$i]["email"] . "</div>";
				echo "<div class=\"col-12 col-sm-2 text-center\">" . $registro[$i]["dni"] . "</div>";
				echo "</div>";
				$i++;
			}

			?>
		</main>
		<footer>

		</footer>
	</div>
</body>

</html>
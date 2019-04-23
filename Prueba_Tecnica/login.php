<?php
include("js/funciones.js"); //Incluimos el archivo de funciones en Javascript
echo $_SESSION["autenticado"];
?>
<html>
	<head>
	<link href="css/estilo.css" rel="stylesheet" type="text/css" > <!--Añadimos la hoja de estilos--> 
	</head>
	<body >
		<div class="login" align="center">
			<form class="forml" method="POST" name="form" id="form" action="logeo.php" onsubmit="return valida_campo_vacio()" >
				<table>
					<caption>LOGIN INGRESO</caption> <!--Titulo del Login-->
					<tr>
						<td>Usuario :</td>
						<td><input type="text" name="user"></td>
					</tr>
					<tr>
						<td>Contraseña :</td>
						<td><input type="password" name="pass"></td>
					</tr>
				</table>
				<div>
						<input type="submit" value="Ingresar">
				</div>
			</form>		
		</div>
	</body>
</html>
<?php
session_start();
include("js/funciones.js");
?>
<html>
<head>
	<title>Registra datos tabla goods</title>
	<link href="css/estilo.css" rel="stylesheet" type="text/css" >
</head>
	<body>
		<div align="center">
		<br>
		
		<br>
		</div>
		<div align="center">
			<form class="form2" method="POST" name="form2" id="form2" action="registradatos.php" onsubmit="return valida_campos()"> 
			<table border="1">
				<caption>TABLA "goods"</caption>
				<tr>
					<th>Name</th>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>	
					<th>Description </th>
					<td><input type="text" name="descripcion"></td>
				</tr>
				<tr>	
					<th>Value</th>
					<td><input type="text" name="valor"></td>
				</tr>
			</table>
		</div>
		<div>
				<input type="submit" value="Guardar">
		</div>
		</form>
		<div align="center">
			<a href="index.php"><button>Volver</button></a>
		</div>
	</body>
</html>
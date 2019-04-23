<?php
	session_start();		//Inicio de Sesion
	if ($_SESSION["autenticado"]=="SI") //Validamos si la variable tiene el valor correcto
		{
?>
<html>
	<head>
	<title>Prueba Técnica Luis Miguel Moya</title>
	<meta charset="UTF-8">
	<meta name="author" content="Luis Miguel Moya">

	<link href="css/estilo.css" rel="stylesheet" type="text/css" >
	</head>
	<body >
		<div class="div1" align="center">
				Eliga una opción : 
		</div>

		<div align="center">
		<table class="forms">
			<tr>
				<td class="tag">
				REGISTRAR
				</td>
				<td class="tag">
				MODIFICAR
				</td>
				<td class="tag">
				ELIMINAR
				</td>
			</tr>
			<tr>		
				<td>
				<a href="registrar.php"><button class="reg"></button></a>
				</td>
				<td  >
				<a href="modificar.php"><button class="mod"></button></a>
				</td>
				<td  >
				<a href="eliminar_goods.php"><button class="eli"></button></a>
				</td>
			</tr>
		</table>
		</div>
		<div align="center" class="footer">
			Desarrollado por Luis Miguel Moya 2019
		</div>	
		<div align="center">
		<a href="logout.php"><button>Salir</button></a>
		</div>
	</body>
</html>

<?php
		}
else{		//Si no devolvemos a login.php
echo"<script type='text/javascript'>alert('El usuario no ha iniciado sesion, por favor inicie sesion');</script>";
			header("Location:login.php");
		}
?>
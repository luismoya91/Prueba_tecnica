<html>
<head>
</head>
<body>
<?php
	session_start();
	include('funciones.php'); //Añadimos el archivo que contiene la conexion

	$name=$_POST['name'];  //recibimos las variables que se enviaron por el formulario
	$descripcion=$_POST['descripcion'];
	$value=$_POST['valor'];
	
	$conexion=conexionBD(); //creamos conexion ala base de datos
	$sql = "INSERT INTO goods(name, descripcion, value) VALUES ('$name','$descripcion','$value')"; //Query que inserta los datos
	$result = mysqli_query($conexion,$sql); //capturamos el resultado de la consulta
	desconexionBD($conexion); //cerramos conexion a base de datos

	if($result) { //si el resultado es verdadero mostramos mensaje de exito
		echo "<script type='text/javascript'>alert('Registro Ingresado Correctamente');</script>";
		header("refresh:1; index.php"); //redireccionamos a index.php
	}
	else{ //si existe error de inserción mostramos mensaje de fallo
		echo "<script type='text/javascript'>alert('No es posible insertar el mismo nombre, por favor intenta con un nuevo nombre');</script>";
		header("refresh:1; registrar.php"); //redireccionamos a registrar.php
		}
?>
</body>
</html>
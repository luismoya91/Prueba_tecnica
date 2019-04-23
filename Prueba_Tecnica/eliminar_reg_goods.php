<html>
<head>
</head>
<body>
<?php
	session_start();
	include('funciones.php');// Añadimos archivo de funciones
	
	$name=$_REQUEST['name1']; //requerimos dato y lo asignamos a variable
	
	$sql = "DELETE from goods WHERE name='$name'"; //Query de eliminacion
	
	$conexion=conexionBD();	 //creamos conexion a base de datos
	$result = mysqli_query($conexion,$sql); //capturamos el resultado
	mysqli_close($conexion); //cerramos conexion 

	if($result) { //si es verdadero se muestra mensaje de exito
		echo "<script type='text/javascript'>alert('Registro eliminado correctamente');</script>";
		header("refresh:1; eliminar_goods.php");
	}
	else{   //si no se muestra mensaje de error
		echo "<script type='text/javascript'>alert('No fue posible elminar el registro');</script>";
		echo "Error: " . $sql . "<br>" . $conexion->error;
		header("refresh:1; eliminar_goods.php");
		}
?>
</body>
</html>


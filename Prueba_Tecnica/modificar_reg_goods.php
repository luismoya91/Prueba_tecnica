<html>
<head>
</head>
<body>
<?php
	session_start();
	include('funciones.php'); //añadimos archivo con funciones
	
	$name=$_REQUEST['name']; //requerimos el dato y asignamos a variable
	
	$name=$_POST['name']; //asignamos variables enviadas por el formulario
	$descripcion=$_POST['descripcion'];
	$value=$_POST['value'];
	
	$sql = "UPDATE goods SET name='$name',descripcion='$descripcion',value='$value' where name='$name'";//Query de actualizacion
	
	
	$conexion=conexionBD();	//creamos conexion a base de datos
	$result = mysqli_query($conexion,$sql); //Ejecutamos query y capturamos el valor de retorno
	mysqli_close($conexion); //cerramos conexion

	if($result) {//si es verdadero se muestra mensaje de exito
		 echo "<script type='text/javascript'>alert('Registro actualizado correctamente');</script>";
		 header("refresh:1; index.php");
	}
	else{ // si no se muestra mensaje de error
		echo "Error: " . $sql . "<br>" . $conexion->error;
		echo "<script type='text/javascript'>alert('No fue posible actualizar el registro');</script>";
		header("refresh:1; index.php");
		}
?>
</body>
</html>


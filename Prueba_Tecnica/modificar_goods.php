<?php
session_start();
include('funciones.php'); //añadimos archivo de funciones
			$conexion=conexionBD(); //creamos conexion a base de datos
    		$name=$_REQUEST['name']; //requerimos el dato y lo asignamos a variable
			$sql="SELECT * FROM goods WHERE name='$name'"; // Query de consulta con clausula
			$result = mysqli_query($conexion,$sql); //Ejecutamos la consulta
			$mostrar=mysqli_fetch_array($result); //Asignamos el resultado de la consulta a un array
?>
<html>
	<head>
	<title>Modificar Registro Tabla goods</title>
	<link href="css/estilo.css" rel="stylesheet" type="text/css" >
	</head>
	<body>
		<div align="center">
	            <form method="post" action="modificar_reg_goods.php?name=<?php echo $mostrar['name'];?>">
	                <table>			
						<caption>MODIFICAR REGISTRO "<?php echo $mostrar['name']; ?>"</caption>
						<tr>
							<td>
							<input  value="<?php echo $mostrar['name']; ?>" type="text" name="name" readonly="readonly" / >
							</td>
							<td>
							<label  for="name">Name</label>
							</td>
						</tr>
						<tr>
							<td>
							<input  value="<?php echo $mostrar['descripcion']; ?>" type="text" name="descripcion"/>
							</td>
							<td>
							<label for="descripcion">Descripcion</label>
							</td>
						</tr>
						<tr>
							<td>
							<input  value="<?php echo $mostrar['value']; ?>" type="text" name="value"/>
							</td>
							<td>
							<label for="value">Value</label>
							</td>
						</tr>
					</table>
					<table align="center">
						<tr>
							<td><button type="Submit" name="enviar" value="Insertar" >
							  Guardar
							</button></td>
							<td><button type="Reset" value="Borrar" >
							  Limpiar
							</button></td>
						</tr>
					</table>
	            </form>
	       </div>
	    <div align="center">
			<a href="index.php"><button>Volver</button></a>
		</div>
   </body>
</html>
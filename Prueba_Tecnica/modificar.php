<?php
session_start();
include('funciones.php'); //añadimos archivo con funciones
?>
<html>
	<head>
	<title>Modifica datos tabla goods</title>
	<link href="css/estilo.css" rel="stylesheet" type="text/css" > <!--Añadimos hoja de estilos-->
	</head>
	<body>
		<div align="center">
					<table>	
						<caption>MODIFICAR REGISTRO TABLA "goods"</caption>					
						<tr>
							<th>Name</th>
							<th>Description</th>
							<th>Value</th>
						</tr>
						<?php
						$conexion=conexionBD();		//Creamos conexion a la base de datos
						$sqlini="SELECT * FROM goods"; //Query de consulta
						$stmini=mysqli_query($conexion, $sqlini); //Ejecutamos query
						while($row=mysqli_fetch_row($stmini)){ //Recorremos el arreglo para acceder a la informacion
							echo "<tr>";
							echo "<td>".$row[0]."</td>";
							echo "<td>".$row[1]."</td>";
							echo "<td>".$row[2]."</td>";
						?>
						<td class="td1"> <!--Enviamos dato a script-->
							<a href="modificar_goods.php?name=<?php echo $row['0'];?>"><button >Editar</i></button></a>
						</td>
					<?php
						echo "</tr>";
						}
						mysqli_free_result($stmini); //liberamos la variable
						desconexionBD($conexion); //cerramos conexion a base de datos
					?>
					</table>
		</div>			
		<div align="center">
			<a href="index.php"><button>Volver</button></a>
		</div>
	
   </body>
</html>
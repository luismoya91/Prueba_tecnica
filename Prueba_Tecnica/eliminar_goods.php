<?php
session_start();
include('funciones.php');
?>
<html>
	<head>
	<title>Elimina datos tabla goods</title>
	<link href="css/estilo.css" rel="stylesheet" type="text/css" >
	</head>
	<body>
		<div align="center">
					<table>	
						<caption>ELIMINAR REGISTRO TABLA "goods"</caption>					
						<tr>
							<th>Name</th>
							<th>Description</th>
							<th>Value</th>
						</tr>
						<?php
						$conexion=conexionBD();		//creamos conexion a la base de datos
						$sqlini="SELECT * FROM goods"; //Query de consulta
						$stmini=mysqli_query($conexion, $sqlini); //Ejecutamos el query
						while($row=mysqli_fetch_row($stmini)){//mostramos consulta
							echo "<tr>";
							echo "<td>".$row[0]."</td>";
							echo "<td>".$row[1]."</td>";
							echo "<td>".$row[2]."</td>";
						?>
						<td class="td1"> <!--enviamos dato a script que elimina-->
							<a href="eliminar_reg_goods.php?name1=<?php echo $row['0'];?>"><button >Eliminar</button></a>
						</td>
					<?php
						echo "</tr>";
						}
						mysqli_free_result($stmini); //liberamos variable
						desconexionBD($conexion); //Cerramos conexion base de datos
					?>
					</table>
		</div>			
		<div align="center">
			<a href="index.php"><button>Volver</button></a>
		</div>
	
   </body>
</html>
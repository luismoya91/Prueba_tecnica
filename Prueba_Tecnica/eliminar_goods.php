<?php
session_start();
include('funciones.php');
?>
<html>
	<head>
	<title>Elimina datos tabla goods</title>
	<link href="css/estilos.css" rel="stylesheet" type="text/css" >
    <link href="css/fontello.css" rel="stylesheet" type="text/css">    
	</head>
	<body>
        <header>
            <div class="contenedor">
            <h1 class="icon-circulo">
            My Test
            </h1>
            <input type="checkbox" id="menu-barra">
            <label class="icon-menu" for="menu-barra"></label>
            <nav class="menu">
                <a href="index.html">Inicio</a>
                <a class="icon-agregar" href="registrar.php">Registro</a>
                <a class="icon-editar" href="modificar.php">Editar</a>            
                <a class="icon-borrar" href="eliminar_goods.php">Eliminar</a>
            </nav>
            </div>
        </header>
		<main>		    
        <div class="contenedor_4" align="center">
					<table>	
						<caption>ELIMINAR REGISTRO TABLA "goods"</caption>					
						<tr>
							<th>Name</th>
							<th>Description</th>
							<th>Value</th>
                            <th>Accion</th>
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
		</main>
		<footer>		    
        <div align="center">
			<a href="index.php"><button>Volver</button></a>
		</div>
		</footer>
   </body>
</html>
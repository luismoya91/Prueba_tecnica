<?php
session_start();
include('funciones.php'); //añadimos archivo con funciones
?>
<html>
	<head>
	<title>Modifica datos tabla goods</title>
	<link href="css/estilos.css" rel="stylesheet" type="text/css" > <!--Añadimos hoja de estilos-->
    <link rel="stylesheet" href="css/fontello.css">
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
		<div class="contenedor_4">
                    <table>	
						<caption>MODIFICAR REGISTRO TABLA "goods"</caption>					
						<tr>
							<th>Name</th>
							<th>Description</th>
							<th>Value</th>
						    <th>Accion</th>
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
						<td> <!--Enviamos dato a script-->
							<a href="modificar_goods.php?name=<?php echo $row['0'];?>"><button >Editar</button></a>
						</td>
					<?php
						echo "</tr>";
						}
						mysqli_free_result($stmini); //liberamos la variable
						desconexionBD($conexion); //cerramos conexion a base de datos
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
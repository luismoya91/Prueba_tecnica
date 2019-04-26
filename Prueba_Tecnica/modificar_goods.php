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
	            <form method="post" action="modificar_reg_goods.php?name=<?php echo $mostrar['name'];?>">
	                <table>			
						<caption>MODIFICAR REGISTRO "<?php echo $mostrar['name']; ?>"</caption>
						<tr>
							<td>
							<label>Name</label>
							</td>
							<td>
							<input  value="<?php echo $mostrar['name']; ?>" type="text" name="name" readonly="readonly" / >
							</td>
						</tr>
						<tr>
							<td>
							<label>Descripcion</label>
							</td>
							<td>
							<input  value="<?php echo $mostrar['descripcion']; ?>" type="text" name="descripcion"/>
							</td>
						</tr>
						<tr>
							<td>
							<label>Value</label>
							</td>
							<td>
							<input  value="<?php echo $mostrar['value']; ?>" type="text" name="value"/>
							</td>
						</tr>
					</table>
					<table class="subcontenedor_4">
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
        </main>
        <footer>
	       <div align="center">
			     <a href="index.php"><button>Volver</button></a>
		   </div>
        </footer>
   </body>
</html>
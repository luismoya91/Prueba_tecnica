<?php
session_start();
include("js/funciones.js");
?>
<html>
<head>
	<title>Registra datos tabla goods</title>
	<link rel="stylesheet" href="css/estilos.css">
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
		<div class="contenedor_2" align="center">
            <h2>
                Agregar registro nuevo a la tabla "goods"  
            </h2>
			<form class="form2" method="POST" name="form2" id="form2" action="registradatos.php" onsubmit="return valida_campos()"> 
                <table border="1">
                    <caption>TABLA "goods"</caption>
                    <tr>
                        <th>Name</th>
                        <td><input type="text" name="name"></td>
                    </tr>
                    <tr>	
                        <th>Description </th>
                        <td><input type="text" name="descripcion"></td>
                    </tr>
                    <tr>	
                        <th>Value</th>
                        <td><input type="text" name="valor"></td>
                    </tr>
                </table>
                <div>
                        <input type="submit" value="Guardar">
                </div>
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
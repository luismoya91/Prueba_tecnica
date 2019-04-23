<?php
session_start(); 			//Inicio de Sesión 
			
include('funciones.php');	//Incluimos el archivo que contiene las funciones generales 
							
$user=$_POST['user'];		//Recibimos los valores del formulario del login  y los
$pass=$_POST['pass'];		//y los asignamos a variables para poder usarlos

$conexion = conexionBD();	//Creamos la conexion a la Base de Datos y formatemos en utf8
mysqli_set_charset($conexion, "utf8");
							//Realizamos la consulta con los valores del login
$sql= "SELECT id, pass FROM usuarios WHERE id ='$user' and pass = '$pass'";

if ($res=mysqli_query($conexion,$sql)) //Validamos si la consulta este ejecutada correctamente
		{
		$row=mysqli_fetch_row($res);	//Asignamos el valor devuelto de la consulta a un array para poder acceder a los datos 
		if($row){						//Validamos que el array no sea vacío
			mysqli_free_result($res);	//Liberamos el resultado de la variable
			$_SESSION["autenticado"]= "SI";	//Asigmanos valor a SESSION		
			header('Location:index.php'); //redireccionamos al Index
				}
		else{							//Si el array esta vacio muestra mensaje de error y redirecciona al login nuevamente
			echo "<script type='text/javascript'>alert('El usuario o la clave son incorrectos, intente nuevamente');</script>";
			mysqli_free_result($res);
			header('refresh:0.1;login.php');
		}
}
desconexionBD($conexion);	//Deeconectamos de la base de datos

?>
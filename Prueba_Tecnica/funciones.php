<?php
	//Creado por Luis Miguel Moya 22-04--2019 para Prueba Técnica 
	//Archivo de funciones generales del aplicativo
	
	function conexionBD(){      //Creamos la funcion para conectar
		$server = "localhost";  //Nombre del servidor de Mysql
		$user = "root";			//Nombre de usuario de la base de datos					
		$pass = "";			//Contraseña del usuario de la base de datos
		$dbname = "prueba_tecnica";	//Nombre de la base de datos									
		$conexion = mysqli_connect($server,$user,$pass,$dbname) or trigger_error(mysql_error(), E_USER_ERROR); //Realizamos la conexion
		return $conexion; //Retornamos el valor de la conexion en la varible
	}
	function desconexionBD($conexion){ //Creamos la funcion para desconectar

    $close = mysqli_close($conexion)  //Realizamos la desconexion a la variable
        or die("Ha sucedido un error inesperado en la desconexion de la base de datos");

    return $close; //Retornamos el valor de la desconexion en la varible
	}
	
?>
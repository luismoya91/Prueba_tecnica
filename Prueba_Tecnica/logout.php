	<?php
	$_SESSION["autenticado"]="NO";
	session_destroy();	
	header('Location:login.php');
?>
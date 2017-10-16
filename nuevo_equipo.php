<?php
	$mysql_host = "localhost";
	$mysql_database = "ab95503_SanPedro";
	$mysql_user = "ab95503_juancho";
	$mysql_password = "Jpjpjuancho1995";



// CAMBIO DE CODIGO


	if (isset ($_POST["nombre_equipo"]))
		$equipo = $_POST["nombre_equipo"];
	else
		$equipo = "FAILEQUIPO";
	



		
	$con = mysql_connect($mysql_host,$mysql_user,$mysql_password ) or die(mysql_error()); 
	mysql_select_db($mysql_database,$con) or die(mysql_error()); 

	$sql = "INSERT INTO equipos (equipo) VALUES('$equipo');";
	$res = mysql_query($sql,$con) or die(mysql_error());
	
	mysql_close($con);
	if ($res) {
		header("Location: http://www.zubexdb.com/faro/menu.html");
	}else{
		echo "failed";
	}// end else




?>
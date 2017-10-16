<?php
	$mysql_host = "localhost";
	$mysql_database = "ab95503_SanPedro";
	$mysql_user = "ab95503_juancho";
	$mysql_password = "Jpjpjuancho1995";


//ob_start();
	// CAMBIO DE CODIGO


	if (isset ($_POST["nombre_participante"]))
		$nombre = $_POST["nombre_participante"];
	else
		$nombre = "FAILNOMBRE";

	if (isset ($_POST["apellido_materno"]))
		$apellido_materno = $_POST["apellido_materno"];
	else
		$apellido_materno = "FAILapellido_materno";

	if (isset ($_POST["apellido_paterno"]))
		$apellido_paterno = $_POST["apellido_paterno"];
	else
		$apellido_paterno = "FAILapellido_paterno";

	if (isset ($_POST["curp"]))
		$curp = $_POST["curp"];
	else
		$curp = "FAILcurp";

	if (isset ($_POST["dia"]))
		$dia = $_POST["dia"];
	else
		$dia = "FAILdia";

	if (isset ($_POST["mes"]))
		$mes = $_POST["mes"];
	else
		$mes = "FAILmes";

	if (isset ($_POST["ano"]))
		$ano = $_POST["ano"];
	else
		$ano = "FAILano";

	if (isset ($_POST["categoria"]))
		$categoria = $_POST["categoria"];
	else
		$categoria = "FAILcategoria";

	if (isset ($_POST["sexo"]))
		$sexo = $_POST["sexo"];
	else
		$sexo = "FAILsexo";

	if (isset ($_POST["nombre_equipo"]))
		$equipo = $_POST["nombre_equipo"];
	else
		$equipo = "FAILequipo";

	if (isset ($_POST["capitan"]))
		$capitan = $_POST["capitan"];
	else
		$capitan = "FAILcapitan";

	if (isset ($_POST["club"]))
		$club = $_POST["club"];
	else
		$club = "FAILclub";

	
		$jpg = ".jpg";
		$foto = $nombre . $apellido_paterno . $apellido_materno . $jpg;


		if (isset($_POST['upload'])) {

	
$nombre_foto = $foto;
	

	 $image_name = $_FILES['image']['name'];
	 $image_type = $_FILES['image']['type'];
	 $image_size = $_FILES['image']['size'];
	 $image_tmp_name = $_FILES['image']['tmp_name'];

	 if ($image_name == '') {
	 	echo "<script>alert('Please select image')</script>";
	 	exit();

	 }else{
	 	move_uploaded_file($image_tmp_name, "fotos/$nombre_foto");
	 }


}




	$con = mysql_connect($mysql_host,$mysql_user,$mysql_password ) or die(mysql_error()); 
	mysql_select_db($mysql_database,$con) or die(mysql_error()); 

	$sql = "INSERT INTO participantes (nombre,apellido_paterno,apellido_materno,curp,dia,mes,ano,categoria,sexo,equipo,capitan,club,foto) VALUES('$nombre','$apellido_paterno','$apellido_materno','$curp','$dia','$mes','$ano','$categoria','$sexo','$equipo','$capitan','$club','$foto');";
	$res = mysql_query($sql,$con) or die(mysql_error());

	mysql_close($con);
	if ($res) {
		header("Location: http://www.zubexdb.com/faro/menu.html");
	}else{
		echo "failed";
		}// end else

?>
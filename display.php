<html>
<head>

	<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.9/css/jquery.dataTables.css">
  
<!-- jQuery -->
<script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.9/js/jquery.dataTables.js"></script>


<script>$(document).ready( function () {
    $('#data').DataTable();
} );


</script>








</head>

<body>

	<table id="data" class="display responsive no-wrap" widht = "100%">
    <thead>
        <tr>
            <th>NOMBRE</th>
            <th>APELLIDO P.</th>
            <th>APELLIDO M.</th>
            <th>CURP</th>
            <th>DIA</th>
            <th>MES</th>
            <th>ANO</th>
            <th>CATEGORIA</th>
            <th>SEXO</th>
            <th>EQUIPO</th>
            <th>CAPITAN</th>
            <th>CLUB</th>
        </tr>
    </thead>

    <tbody>
       <?php
	$mysql_host = "localhost";
	$mysql_database = "ab95503_SanPedro";
	$mysql_user = "ab95503_juancho";
	$mysql_password = "Jpjpjuancho1995";

	$con = mysql_connect($mysql_host,$mysql_user,$mysql_password ) or die(mysql_error()); 
	mysql_select_db($mysql_database,$con) or die(mysql_error()); 

	$sql = "SELECT * from participantes";
	$res = mysql_query($sql,$con) or die(mysql_error());
	while ($row = mysql_fetch_array($res)) {
			
?>

<tr>
	<form action = "" method = "POST">
		<td><center> <?php echo $row['nombre'];?></center></td>
		<td><center> <?php echo $row['apellido_paterno'];?></center></td>
		<td><center> <?php echo $row['apellido_materno'];?></center></td>
		<td><center> <?php echo $row['curp'];?></center></td>
		<td><center> <?php echo $row['dia'];?></center></td>
		<td><center> <?php echo $row['mes'];?></center></td>
		<td><center> <?php echo $row['ano'];?></center></td>
		<td><center> <?php echo $row['categoria'];?></center></td>
		<td><center> <?php echo $row['sexo'];?></center></td>
		<td><center> <?php echo $row['equipo'];?></center></td>
		<td><center> <?php echo $row['capitan'];?></center></td>
		<td><center> <?php echo $row['club'];?></center></td> 

	</form>
	<?php
}
?>
</tr>



    </tbody>
</table>


</body>

</html>

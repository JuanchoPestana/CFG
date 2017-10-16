		<!DOCTYPE HTML> 
		<html>
		<head>
			<title>REGISTRAR PARTICIPANTE</title>
			<meta charset="utf-8">
			<link href="style.css" rel="stylesheet" type="text/css">
			<link href='http://fonts.googleapis.com/css?family=Lato:400,700,300' rel='stylesheet' type='text/css'>
		</head>
		<body>
			<div class="main">
				<header>

					
					<ul class="main-nav">

						<li><a href="menu.html">Inicio</a></li>
					</ul>
					
				</header>
				<br>
				<div class="content">

					<h1>Registrar Participante</h1>

					<form method="post" action="insertar.php" class="form1" enctype= "multipart/form-data">

						<label for="nombre_participante">Nombre:</label>
						<input type="text" name="nombre_participante" id="nombre_participante"/><br/><br/>

						<label for="apellido_paterno">Apellido Paterno:</label>
						<input type="text" name="apellido_paterno" id="apellido_paterno" /><br/><br/>

						<label for="apellido_materno">Apellido Materno:</label>
						<input type="text" name="apellido_materno" id="apellido_materno" /><br/><br/>

						<label for="curp">CURP:</label>
						<input type="text" name="curp" id="curp" /><br/><br/>

						<label for="fecha_nacimiento">Fecha Nacimiento:</label>
						<p class="contact-input">
							<label for="dia" class="select">
								<select name="dia" id="select">
									<option value="" selected>D&iacutea</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
									<option value="25">25</option>
									<option value="26">26</option>
									<option value="27">27</option>
									<option value="28">28</option>
									<option value="29">29</option>
									<option value="30">30</option>
									<option value="31">31</option>



								</select>
							</label>
						</p>
						<p class="contact-input">
							<label for="mes" class="select">
								<select name="mes" id="select">
									<option value="" selected>Mes</option>
									<option value="enero">Enero</option>
									<option value="febrero">Febrero</option>
									<option value="marzo">Marzo</option>
									<option value="abril">Abril</option>
									<option value="mayo">Mayo</option>
									<option value="junio">Junio</option>
									<option value="julio">Julio</option>
									<option value="agosto">Agosto</option>
									<option value="septiembre">Septiembre</option>
									<option value="octubre">Octubre</option>
									<option value="noviembre">Noviembre</option>
									<option value="diciembre">Diciembre</option>
									

								</select>
							</label>
						</p>
						<p class="contact-input">
							<label for="ano" class="select">
								<select name="ano" id="select">
									<option value="" selected>A&ntildeo</option>
									<option value="1997">1997</option>
									<option value="1998">1998</option>
									<option value="1999">1999</option>
									<option value="2000">2000</option>
									<option value="2001">2001</option>
									<option value="2002">2002</option>
									<option value="2003">2003</option>

								</select>
							</label>
						</p>




						<label for="categoria">Categor&iacutea:</label>
						<p class="contact-input">
							<label for="categoria" class="select">
								<select name="categoria" id="select">
									<option value="" selected>Seleccione una categoria...</option>
									<option value="97/97">1997-1998</option>
									<option value="99/00">1999-2000</option>
									<option value="00/01">2001-2002</option>
								</select>
							</label>
						</p>

						<label for="sexo">Sexo:</label>
						<p class="contact-input">
							<label for="sexo" class="select">
								<select name="sexo" id="select">
									<option value="" selected>Seleccione el sexo...</option>
									<option value="F">Femenino</option>
									<option value="M">Masculino</option>
								</select>
							</label>
						</p>


						<label for="nombre_equipo">Nombre Equipo:</label>
			<p class="contact-input">
				<label for="nombre_equipo" class="select">
					<select name="nombre_equipo" id="select">
						

						<?php
						$mysql_host = "localhost";
						$mysql_database = "ab95503_SanPedro";
						$mysql_user = "ab95503_juancho";
						$mysql_password = "Jpjpjuancho1995";


						$con = mysql_connect($mysql_host,$mysql_user,$mysql_password ) or die(mysql_error()); 
						mysql_select_db($mysql_database,$con) or die(mysql_error());


						$sql = "SELECT equipo FROM equipos";
						$res = mysql_query($sql,$con) or die(mysql_error());
						$default = "Seleccione el nombre del equipo...";

						echo "<option>$default</option>";
						while ($equipo=mysql_fetch_array($res)) {
            			$nombreEquipo = $equipo["equipo"];
              			  echo "<option value=\"$nombreEquipo\">
                  		  $nombreEquipo
                		</option>";
            
            			}
				

			?>
			
						<!-- <option value="" selected>Seleccion el nombre del equipo...</option>
						<option value="pajaritos">Pajaritos</option>
						<option value="chipocludos">Chipocludos</option> -->


					</select>
				</label>
			</p>




			
			<label for="capitan">Capit&aacuten:</label>
			<p class="contact-input">
				<label for="capitan" class="select">
					<select name="capitan" id="select">
						<option value="" selected>Seleccione si es capit&aacuten o no...</option>
						<option value="SI">S&iacute</option>
						<option value="NO">No</option>
					</select>
				</label>
			</p>


			<label for="club">Club:</label>
			<p class="contact-input">
				<label for="club" class="select">
					<select name="club" id="select">
						<option value="" selected>Seleccion el club al que pertenece...</option>
						<option value="monterrey_san_pedro">Monterrey-San Pedro</option>
						<option value="monterrey_cumbres">Monterrey-Cumbres</option>
						<option value="df_santa_fe">D.F.-Santa Fe</option>
						<option value="df_sur">D.F.-Sur</option>


					</select>
				</label>
			</p>

			<label for="foto">Foto:</label>

			<div class="button-green"><input onchange="CopyMe(this, 'txtFileName');" class="file-upload" type="file" name = "image">Seleccione un archivo...</div>
			<br>
			<script type="text/javascript">
			function CopyMe(oFileInput, sTargetID) {
				document.getElementById(sTargetID).value = oFileInput.value;
			}</script>


			<input type="text" name="foto" id="txtFileName" readonly="readonly" /><br/><br/>


			<input type="submit" value="Registrar" id="Enviar" class="submit" name = "upload"/><br />
		</form>

		</div>
		</div>
		</body>
		</html>
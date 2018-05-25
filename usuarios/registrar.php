
<?php 
session_start();


 ?>
<div  class="container page-header text-center">
 <p>
 	<h2>Registro de Usuarios</h2>
 </p> 
</div>

<div class="container">
	
	<form action='#' method='post'>

<a href="?menu=CerrarPagina"><p align="right">
	<type="submit" class="" id="Cerrar" name="Cerrar">
	<span class="glyphicon glyphicon-lock"></span> Salir
	</p></a>
		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-user"></span>	
			</span>		
					<input  class="form-control" id="usuario" name="usuario" type="text" placeholder="Usuario" required="true">		
		</div>	

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-lock"></span>
			</span>		
					<input class="form-control" id="clave" name="clave" type="password" placeholder="Contraseña" required="true">			
		</div>	

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-edit"></span>
			</span>			
					<input class="form-control" id="nombre1" name="nombre1" type="text" placeholder="Primer Nombre" required="true">		
		</div>		

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-edit"></span>
			</span>			
					<input class="form-control" id="nombre2" name="nombre2" type="text" placeholder="Segundo Nombre">		
		</div>	

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-edit"></span>
			</span>			
					<input class="form-control" id="apellido1" name="apellido1" type="text" placeholder="Primer Apellido" required="true">		
		</div>		

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-edit"></span>
			</span>			
					<input class="form-control" id="apellido2" name="apellido2" type="text" placeholder="Segundo Apellido">		
		</div>	

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-envelope"></span>
			</span>			
					<input class="form-control" id="email" name="email" type="email" placeholder="Email" required="true">	
		</div>		

	<button type="submit" class="btn btn-default btn-block" id="btenviar" name="btenviar">
	  <span class="glyphicon glyphicon-send"></span> Enviar 
	</button>

	</form>		
</div>

<?php 

if (isset($_POST['btenviar'])) {

	$dbname ="CasoEstudio";

	include_once ('./Conexion/Conectar.php');

					$USUARIO			=$_POST['usuario'];
					$CONTRASEÑA			=password_hash($_POST['clave'],PASSWORD_BCRYPT);	
					$PRIMERNOMBRE		=$_POST['nombre1'];
					$SEGUNDONOMBRE		=$_POST['nombre2'];	
					$PRIMERAPELLIDO		=$_POST['apellido1'];	
					$SEGUNDOAPELLIDO	=$_POST['apellido2'];	
					$EMAIL 	 			=$_POST['email'];
				
		$sql= "INSERT INTO  Personal(Usuario, Contrasena, PrimerNombre, SegundoNombre,  PrimerApellido, 									SegundoApellido, Email) 
				VALUES ('$USUARIO','$CONTRASEÑA','$PRIMERNOMBRE','$SEGUNDONOMBRE','$PRIMERAPELLIDO','$SEGUNDOAPELLIDO','$EMAIL')" ;

		$stmt =$db->query($sql);
					

			if ($USUARIO==null || $CONTRASEÑA ==null ||	$PRIMERNOMBRE ==null ||  $PRIMERAPELLIDO==null || $SEGUNDOAPELLIDO==null || $EMAIL==null ) {
				echo "<div align=\"center\">Debe ingresar todos los datos</div><br>";
			}
			else
			{
				if($db->connect_error) 
				{
				die ("Error ".$db->connect_errno .": " . $db->connect_error);
				}	
				else
				{
					echo "<div align=\"center\">Registros insertados exitosamente</div><br>";				
				}	
				
			}
		}
	


 ?>
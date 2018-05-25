<?php 
session_start();


if (isset($_SESSION['login'])) {
				$_SESSION['login']=true;
				$_SESSION['txusuario']=$USUARIO;
				$_SESSION['inicio']=time();
				$_SESSION['fin']=$_SESSION['inicio']+(5*60);
}else
{
	header("Location: ./index.php");  
}
?>




<div  class="container page-header text-center">
 <p>
 	<h2>Registar Tendero</h2>
 </p> 
</div>

<div class="container">
	
	<form action='#' method='post'>
	<a href="?menu=CerrarPagina"><p align="right">
	<type="submit" class="" id="Cerrar" name="Cerrar">
	<span class="glyphicon glyphicon-lock"></span> Salir
	</p></a>

	<a href="?menu=VolverAdmin"><p align="Volver">Volver Pagina Principal </p> </a>
		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-user"></span>	
			</span>		
					<input  class="form-control" id="txtUsuario" name="txtUsuario" type="text" placeholder="Usuario" required="true">		
		</div>	

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-lock"></span>
			</span>		
					<input class="form-control" id="txtContraseña" name="txtContraseña" type="password" placeholder="Contraseña" required="true">			
		</div>	

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-edit"></span>
			</span>			
					<input class="form-control" id="txtnit" name="txtnit" type="text" placeholder="Cedula o Nit" required="true">		
		</div>		

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-edit"></span>
			</span>			
					<input class="form-control" id="txtnombre" name="txtnombre" type="text" placeholder="Nombre Completo" required="true">		
		</div>	

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-edit"></span>
			</span>			
					<input class="form-control" id="txtciudad" name="txtciudad" type="text" placeholder="Ciudad" required="true">		
		</div>		

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-edit"></span>
			</span>			
					<input class="form-control" id="txtBarrio" name="txtBarrio" type="text" placeholder="Barrio" required="true">		
		</div>	

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-envelope"></span>
			</span>			
				<input class="form-control" id="txtDireccion" name="txtDireccion" type="text" placeholder="Direccion" required="true">	
		</div>	

	<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-envelope"></span>
			</span>			
					<input class="form-control" id="txttelefono" name="txttelefono" type="text" placeholder="Telefono" required="true">	
		</div>	
     
<br>
	<center><button type="submit"  id="btEnviarTendero" name="btEnviarTendero">
	<span class="glyphicon glyphicon-send"></span> Insertar Tendero 
	</button></center>
	<br><br>

	

	</form>		
</div>

<?php 

if (isset($_POST['btEnviarTendero'])) {

	$dbname ="CasoEstudio";

	include_once ('./Conexion/Conectar.php');

					$USUARIO			=$_POST['txtUsuario'];
					$CONTRASENA			=password_hash($_POST['txtContraseña'],PASSWORD_BCRYPT);	
					$Nit				=$_POST['txtnit'];
					$Nombre				=$_POST['txtnombre'];	
					$Ciudad				=$_POST['txtciudad'];	
					$Barrio 			=$_POST['txtBarrio'];	
					$Direccion 			=$_POST['txtDireccion'];
					$Telefono 	 		=$_POST['txttelefono'];
				
		$sql= "INSERT INTO  tenderos(Usuario, Contrasena, Nit, NombreCompleto,Ciudad,Barrio, Direccion,telefono) 

				VALUES ('$USUARIO','$CONTRASENA','$Nit','$Nombre','$Ciudad','$Barrio','$Direccion','$Telefono')" ;

		$stmt =$db->query($sql);
					

				if($db->connect_error) 
				{
				die ("Error ".$db->connect_errno .": " . $db->connect_error);
				}	
				else
				{
					echo "<div align=\"center\">Registros insertados exitosamente</div><br>";				
				}	
				
			
		}
	


 ?>
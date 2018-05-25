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

<!DOCTYPE html>
<html lang="es">

<head>
	<title> Plantilla Web con PHP</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style >
	
</style>

<!-- BOOTSTRAP-->

	<!-- Compilado de CSS -->
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

	<!-- Librería jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Compilado JavaScript -->
	<script src="bootstrap/js/bootstrap.min.js"></script>

<!-- Fin Bootstrap -->

</head>



<body>

<!-- El header o encabezamiento, definirá el bloque en donde se mostrará un contenido de tipo titulo o menú del sitio. -->
<header> 	
	<?php 
	//Se carga el archivo con el contenido de la cabecera. Normalmente utilizado para el menú del sitio web.
	require_once('./capas/header.php');
	?>
</header>

<div  class="container page-header text-center">
 <p>
 	<h2>Registrar Nuevo Usuario</h2>
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
					<input  class="form-control" id="txtCedula" name="txtCedula" type="text" placeholder="Cedula" required="true">		
		</div>	

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-lock"></span>
			</span>		
					<input class="form-control" id="txtnombre" name="txtnombre" type="text" placeholder="Nombre" required="true">			
		</div>	

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-edit"></span>
			</span>			
					<input class="form-control" id="txtCiudad" name="txtCiudad" type="text" placeholder="Ciudad" required="true">		
		</div>		

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-edit"></span>
			</span>			
					<input class="form-control" id="txtBarrio" name="txtBarrio" type="text" placeholder="Barrio">		
		</div>	

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-edit"></span>
			</span>			
					<input class="form-control" id="txtDireccion" name="txtDireccion" type="text" placeholder="Direccion" required="true">		
		</div>		

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-edit"></span>
			</span>			
					<input class="form-control" id="txtTelefono" name="txtTelefono" type="text" placeholder="Telefono" required="true">		
		</div>	

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-envelope"></span>
			</span>			
					<input class="form-control" id="txtemail" name="txtemail" type="email" placeholder="Email" required="true">	
		</div>		
<br>
	<button type="submit" class="btn btn-default btn-block" id="btEnviarCliente" name="btEnviarCliente">
	<span class="glyphicon glyphicon-send"></span> Ingresar Cliente
	</button>

	</form>		
</div>

<?php 

if (isset($_POST['btEnviarCliente'])) {

	$dbname ="CasoEstudio";

	include_once ('./Conexion/Conectar.php');

					$Cedula			=$_POST['txtCedula'];
					$Nombre			=$_POST['txtnombre'];	
					$Ciudad			=$_POST['txtCiudad'];
					$Barrio			=$_POST['txtBarrio'];	
					$Direccion		=$_POST['txtDireccion'];	
					$Telefono		=$_POST['txtTelefono'];	
					$Email 	 		=$_POST['txtemail'];
				
		$sql= "INSERT INTO  Cliente(Cedula, Nombre, Ciudad, Barrio, Direccion,telefono, Email) 
				VALUES ('$Cedula','$Nombre','$Ciudad','$Barrio','$Direccion','$Telefono','$Email')" ;

		$stmt =$db->query($sql);
					
		
				if($db->connect_error) 
				{
				die ("Error ".$db->connect_errno .": " . $db->connect_error);
				}	
				else
				{
					

					?>


					<br><br><br>
					<center><p><h2>Realizar Encuesta</h2></p> </center>
					<center><a href="?menu=RegistarCliente"><span class="glyphicon glyphicon"></span> Realizar </a></center>
					
				<?php 
				}					
					
				
			
		}
	


 ?>

<!--El footer definirá el bloque en donde se mostrará el contenido tipo pie de página del sitio. -->	
<footer> 
	<div id="footer">
		<div class="container text-center">
			<?php 
				include_once('./capas/footer.php');
			?>	
		</div>
	</div>
</footer>


</body>
</html>

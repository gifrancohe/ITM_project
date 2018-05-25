<?php 
session_start();
echo "<br><br><br><br><br>";

?>
 <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	
	<script src="bootstrap/js/bootstrap.min.js"></script>
<header> 	
	<?php 
	
	require_once('./capas/header.php');
	?>
</header>

<div  class="container page-header text-center">
 <p>
 	<h2>Clientes</h2>
 </p> 
</div>
<div class="container">
	
	<form action='#' method='post'>

	
		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-lock"></span>
			</span>		
					<input class="form-control" id="txtIngresarUsuario" name="txtIngresarUsuario" type="text" placeholder="Cedula del Cliente" required="true">			
		</div>	


	<button type="submit" class="btn btn-default btn-block" id="btcliente" name="btcliente">
	 <span class="glyphicon glyphicon-send"></span> Ingresar 
	</button>

	</form>		
</div>


<?php

$dbname ="CasoEstudio";

include_once('Conectar.php');

if(isset($_POST['btcliente']))
{
		$UsuarioID=$_POST['txtIngresarUsuario'];

		$existe=0;

		if ($UsuarioID=="") 
		{
			echo "debe ingresar un documento";
		}
		else{
			$consulta = mysqli_query($db,"select * from cliente where Cedula = '$UsuarioID'");

		while($consul = mysqli_fetch_array($consulta))
			{


		$existe++;
			}
		if ($existe==0) 
		{
				$_SESSION['login']=true;
				$_SESSION['inicio']=time();
				$_SESSION['fin']=$_SESSION['inicio']+(5*60);

						?>
							
							<br><br><br>
							<center><p><h2>Cliente No Registrado</h2></p> </center>
							<center><a href="?menu=EnviarCliente"><span class="glyphicon glyphicon-send"></span> Registar </a></center>
			
							
						<?php 
		}

		else
		{


						?>
						<br><br><br>
							 <center><p>
							 <h2> <?php echo "Bienvenido "; ?></h2>
							 </p> </center>
    						<center><a href="?menu=PaginaCliente"><span class="glyphicon glyphicon-send"></span> Ingresar </a></center>
			
							
						<?php 


		}			
		 }
} 

  ?>





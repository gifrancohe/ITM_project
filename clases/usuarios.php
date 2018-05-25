<?php 

session_start();

if (isset($_SESSION['login'])) {
	
}else
{
	header("Location: ./index.php");  
}

 ?>

<div  class="container page-header text-center">
 <p>
 	<h2>Usuarios Nuevos</h2>
 </p> 
</div>

<div class="container">
	
	<form action='#' method='post'>

		

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-user"></span>	
			</span>		
					<input  class="form-control" id="txusuario" name="txusuario" type="text" placeholder="Usuario" >		
		</div>	


	<a href="clases/cerrar.php" < button type="submit" class="btn btn-default btn-block" id="btenviar1" name="btenviar1" >
	   <span class="glyphicon glyphicon-send"></span> Cerrar Sesión </button></a>	

	</form>		
</div>
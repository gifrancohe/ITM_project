
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
 	<h2>Crear Base de Datos</h2>
 </p> 
</div>

<div class="container">
	
	<form action='#' method='post'>
	<a href="?menu=CerrarPagina"><p align="right">
	<type="submit" class="" id="Cerrar" name="Cerrar">
	<span class="glyphicon glyphicon-lock"></span> Salir
	</p></a>	

	<button type="submit" class="btn btn-default btn-block" id="btadministrador1" name="btadministrador1">
	 <a href="?menu=BaseDatos"><span class="glyphicon glyphicon-send"></span> Crear Base de Datos</a>
	</button>


	<button type="submit" class="btn btn-default btn-block" id="btadministrador1" name="btadministrador1">
	  <a href="?menu=BDtablas"><span class="glyphicon glyphicon-send"></span> Crear Tablas</a>
	</button>

	</form>		
</div>

<footer> 
	<div id="footer">
		<div class="container text-center">
			<?php 
				include_once('./capas/footer.php');
			?>	
		</div>
	</div>
</footer>


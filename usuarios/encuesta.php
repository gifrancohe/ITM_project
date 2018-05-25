<?php 

session_start();

if (isset($_SESSION['login'])) {
	
}else
{
	header("Location: ./index.php");  
}

?>

   <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	
	<script src="./bootstrap/js/bootstrap.min.js"></script>
<header> 	
	<?php 
	
	require_once('./capas/header.php');
	?>
</header>

<section> 

<div  class="container page-header text-center">
 <p>
 	<h2>ENCUESTA</h2>
 </p> 
</div>

</section>

<a href="?menu=CerrarPagina"><p align="right">
	<type="submit" class="" id="Cerrar" name="Cerrar">
	<span class="glyphicon glyphicon-lock"></span> Salir
	</p></a>
<section> 
 	
 	<div  class="container page-header text-center">
 <p>
 	<h3>1-  ¿Consume productos cárnicos embutidos?</h3>
 </p> 	
 </div>

</section>


 <div  class="container page-header text-center">
 <p>
 <body >
 	<form method = "post" action = "#">
      <p>
    <h3><label for="opcion">seleccione una respuesta</h3></label>
      </p>
   

					<button type="submit" class="btn btn-default btn-block" id="btEnviarCliente" name="btEnviarCliente">
					<a href="?menu=EncuestaSi"><span class="glyphicon glyphicon"></span> Si </a>
					</button>
				

					<button type="submit" class="btn btn-default btn-block" id="btEnviarCliente" name="btEnviarCliente">
					<a href="?menu=EncuestaNo"><span class="glyphicon glyphicon"></span> No </a>
					</button>
					
			

		     
	</form>
 </div>
 </body>

 <footer> 
	<div id="footer">
		<div class="container text-center">
			<?php 
				include_once('./capas/footer.php');
			?>	
		</div>
	</div>
</footer>
 

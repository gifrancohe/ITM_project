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
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    
    <script src="bootstrap/js/bootstrap.min.js"></script>
<header>    
    <?php 
    
    require_once('./capas/header.php');
    ?>
</header>


</form>
 </div>
 </body>
 </section>
<a href="?menu=CerrarPagina"><p align="right">
  <type="submit" class="" id="Cerrar" name="Cerrar">
  <span class="glyphicon glyphicon-lock"></span> Salir
  </p></a>
 <section> 
 	
 	<div  class="container page-header text-center">
 <p>
 	<h3>8. ¿Le gustaria recibir ofertas e informacion de nuestra compañia, especialmente?</h3>
 </p> 	
 </div>

</section>

 <section>
 <div  class="container page-header text-center">
 <p>
 <body >
 	<form method = "post" action = "encuesta_si.php">
      <p>
    <h3><label for="opcion">seleccione una respuesta</h3></label>
      </p>
    <select name="opcion">
     	<option value="yes">si</option>
     	<option value="not">no</option>
     		
     </select>
      <br><br>
      
        <button type="submit" class="btn btn-default btn-block" id="btEnviarCliente" name="btEnviarCliente">
          <a href="?menu=InicioCliente"><span class="glyphicon glyphicon"></span> Terminar </a>
          </button>
		 <br><br>    
	</form>
 </div>
 </body>
 </section>
<br><br>
 <footer> 
    <div id="footer">
        <div class="container text-center">
            <?php 
                include_once('./capas/footer.php');
            ?>  
        </div>
    </div>
</footer>

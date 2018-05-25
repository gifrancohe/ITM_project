<?php 

session_start();

if (isset($_SESSION['login'])) {
	
}else
{
	header("Location: ./index.php");  
}

?>
<br><br><br><br><br>
	<a href="?menu=CerrarPagina"><p align="right">
  <type="submit" class="" id="Cerrar" name="Cerrar">
  <span class="glyphicon glyphicon-lock"></span> Salir
  </p></a>

	<br>
<center><h1>Aqui se visualizaran estadísticas diarias, semanales y mensuales donde se identifique: ventas de cada producto; el producto más vendido, la presentación más vendida, el producto menos vendido, la presentación menos vendida; total de ventas (en cantidad y precio); el establecimiento, barrio y/o ciudad que más vende y el que menos vende. También es de interés conocer el número de visitantes al sitio web a nivel país y ciudad; así como el número de veces que un usuario registrado ingresa al sitio. </h1></center>

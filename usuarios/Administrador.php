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
 	<h2>Administrador</h2>
 </p> 
</div>
	<a href="?menu=CerrarPagina"><p align="right">
	<type="submit" class="" id="Cerrar" name="Cerrar">
	<span class="glyphicon glyphicon-lock"></span> Salir
	</p></a>
	<button type="submit" class="btn btn-default btn-block" id="btEnviarEmpleado" name="btEnviarEmpleado">
	<a href="?menu=RegistrarEmpleado"><span class="glyphicon glyphicon-send"></span> Registrar Empleado 
	</button>
<br>
<br>
	<button type="submit" class="btn btn-default btn-block" id="btEnviarPV" name="btEnviarPV">
	<a href="?menu=RegistrarPV"><span class="glyphicon glyphicon-send"></span> Registrar Punto de Venta 
	</button>
	<br>
<br>
	<button type="submit" class="btn btn-default btn-block" id="btEnviarTendero" name="btEnviarTendero">
	<a href="?menu=RegistrarTendero"><span class="glyphicon glyphicon-send"></span> Registrar Tendero
	</button>
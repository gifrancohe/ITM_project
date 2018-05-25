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
<html>
<head>
	<title></title>
</head>
<p>Bienvenido</p> 
<p>Esto es solo para tenderos registrados</p>
<body>
<center>
 <form action="" method="post">
	<div>
		<label for="accion">Que acción deseas realizar</label>
		<select name="accion" id="accion">
			<option>Registrar Nuevo Pedido</option>
			<option>Registrar ventas diarias realizadas por los puntos de venta</option>
			<option>Ingresar las ventas diarias de los productos de la compañía</option>
		</select>
	</div>

	<div>
		<input style="background-color: blue; color:white; margin: auto" type="submit" name="realizar" id="realizar" value="REALIZAR">
	</div>
</form>
</center>

</body>
</html>
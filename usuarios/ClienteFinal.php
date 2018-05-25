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

<center> <h1>Ingreso exitoso, bienvenido</h1></center>

<center>

<h1>Ven a nuestros puntos de venta y adquiere los mejores productos en las presentaciones que buscas a los mejores precios</h1>


<table border=1>
  <tr>
    <th>Producto</th>
    <th>Presentacion/Precio</th>
  </tr>
  <tr>
    <td>Chorizo </td>
    <td>300 gr / $4.000 </td>
  </tr>
  <tr>
    <td>Chorizo </td>
    <td>500 gr / $5.300 </td>
  </tr>
  <tr>
    <td>Mortadela</td>
    <td>250 gr / $3.500 </td>
  </tr>
  <tr>
    <td>Mortadela</td>
    <td>500 gr / $6.000 </td>
  </tr>
  <tr>
    <td>Salami </td>
    <td>50 gr / $4.000</td>
  </tr>
  <tr>
    <td>Salami </td>
    <td>150 gr / $10.000 </td>
  </tr>
  <tr>
    <td>Costilla </td>
    <td>500 gr / $10.000 </td>
  </tr>
  <tr>
    <td>Costilla </td>
    <td>1000 gr / $18.000 </td>
  </tr>
  <tr>
    <td>Morcilla </td>
    <td>250 gr / $3.000 </td>
  </tr>
  <tr>
    <td>Morcilla </td>
    <td>500 gr / $5.500</td>
  </tr>
  <tr>
    <td>Salchicha </td>
    <td>250 gr / $4.000 </td>
  </tr>
  <tr>
    <td>Salchicha </td>
    <td>500 gr / $7.500</td>
  </tr>
  <tr>
    <td>Salchichón</td>
    <td>250 gr / $3.000</td>
  </tr>
  <tr>
    <td>Salchichón</td>
    <td>500 gr / $5.500 </td>
  </tr>
</table>

</center>

<a href="?menu=CerrarPagina"><p align="right">
	<type="submit" class="" id="Cerrar" name="Cerrar">
	<span class="glyphicon glyphicon-lock"></span> Salir
	</p></a>
	

<?php 

$dbname ="CasoEstudio";
include_once('./Conexion/Conectar.php');

if(isset($_POST['con']))
{
$UsuarioID=$_POST['UsuarioID'];
$existe=0;

if ($UsuarioID=="") {
	echo "debe ingresar un documento";
}
else{
	$consulta = mysqli_query($db,"select * from Cliente where Cedula = '$UsuarioID'");

while($consul = mysqli_fetch_array($consulta))
{
$existe++;
?>

		 <tr>
		 	<td><?php echo $consul['Cedula'] ?></td>
		 	<td><?php echo $consul['Nombre'] ?></td>
		 	<td><?php echo $consul['Ciudad'] ?></td>
		 	<td><?php echo $consul['Barrio'] ?></td>
		 	<td><?php echo $consul['Email'] ?></td>

		 </tr>

       <?php 
       if ($existe==0) {
	echo "el documento a buscar no existe, ingrese un documento valido";
}
        }

 }
  }



        ?>

	</table>
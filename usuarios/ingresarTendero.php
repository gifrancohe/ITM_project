<?php 

session_start();
 ?>


<div  class="container page-header text-center">
 <p>
 	<h2>Ingreso de Tenderos</h2>
 </p> 
</div>

<div class="container">
	
	<form action='#' method='post'>

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-user"></span>	
			</span>		
					<input  class="form-control" id="txusuarioTendero" name="txusuarioTendero" type="text" placeholder="Usuario" required="true">		
		</div>	

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-lock"></span>
			</span>		
					<input class="form-control" id="txclaveTendero" name="txclaveTendero" type="password" placeholder="Contraseña" required="true">			
		</div>	


	<button type="submit" class="btn btn-default btn-block" id="btIngresartendero" name="btIngresartendero">
	  <span class="glyphicon glyphicon-send"></span> Ingresar Tendero 
	</button>

	</form>		
</div>



<?php 



if (isset($_POST['btIngresartendero'])) {

	$dbname ="CasoEstudio";

	include_once ('./Conexion/Conectar.php');

					$Usuario	=$_POST['txusuarioTendero'];
					$Contrasena		=$_POST['txclaveTendero'];

					
		$sql= "SELECT * FROM tenderos WHERE Usuario ='$Usuario'";

		$stmt =$db->query($sql);
			

			if($stmt->num_rows>0)
			{
				
				$row = $stmt->fetch_array(MYSQLI_ASSOC);

				if (password_verify($Contrasena,$row['Contrasena']))	
				{
				
				
				$_SESSION['login']=true;
				$_SESSION['txusuarioTendero']=$Usuario;
				$_SESSION['inicio']=time();
				$_SESSION['fin']=$_SESSION['inicio']+(5*60);

?>
				 <center><p>
				 <h2> <?php echo "Bienvenido ".$row['NombreCompleto'] ; ?></h2>
				 </p> </center>

			  	<center><a href="?menu=IngresarTendero">
				  	<span class="glyphicon glyphicon-send" class="btn btn-default btn-block"></span> Ingresar 
			    </a></center>
<?php 
				}		
				
			}
				else
				{
					
					echo "<div align=\"center\"> Usuario o Contraseña Incorrectos Vuelva Intentar</div><br>";
					
				}	
				
			
				
	}
?>
<?php 

session_start();
 ?>


<div  class="container page-header text-center">
 <p>
 	<h2>Ingreso de Representante</h2>
 </p> 
</div>

<div class="container">
	
	<form action='#' method='post'>

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-user"></span>	
			</span>		
					<input  class="form-control" id="txusuariorepresentante" name="txusuariorepresentante" type="text" placeholder="Usuario" required="true">		
		</div>	

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-lock"></span>
			</span>		
					<input class="form-control" id="txclaveRespresentante" name="txclaveRespresentante" type="password" placeholder="Contraseña" required="true">			
		</div>	


	<button type="submit" class="btn btn-default btn-block" id="btIngresarRepresentante" name="btIngresarRepresentante">
	  <span class="glyphicon glyphicon-send"></span> Ingresar Representante 
	</button>

	</form>		
</div>



<?php 



if (isset($_POST['btIngresarRepresentante'])) {

	$dbname ="CasoEstudio";

	include_once ('./Conexion/Conectar.php');

					$Usuario	=$_POST['txusuariorepresentante'];
					$Contrasena		=$_POST['txclaveRespresentante'];

					
		$sql= "SELECT * FROM tenderos WHERE Usuario ='$Usuario'";

		$stmt =$db->query($sql);
			

			if($stmt->num_rows>0)
			{
				
				$row = $stmt->fetch_array(MYSQLI_ASSOC);

				if (password_verify($Contrasena,$row['Contrasena']))	
				{
				
				
				$_SESSION['login']=true;
				$_SESSION['txusuariorepresentante']=$Usuario;
				$_SESSION['inicio']=time();
				$_SESSION['fin']=$_SESSION['inicio']+(5*60);

?>
				 <center><p>
				 <h2> <?php echo "Bienvenido  ".$row['NombreCompleto'] ; ?></h2>
				 </p> </center>

			  	<center><a href="?menu=IngresarRepresentante">
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
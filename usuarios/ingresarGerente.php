<?php 

session_start();

?>



<div  class="container page-header text-center">
 <p>
 	<h2>Ingreso Gerente</h2>
 </p> 
</div>

<div class="container">
	
	<form action='#' method='post'>

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-user"></span>	
			</span>		
					<input  class="form-control" id="txusuario" name="txusuario" type="text" placeholder="Usuario" required="true">		
		</div>	

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-lock"></span>
			</span>		
					<input class="form-control" id="txclave" name="txclave" type="password" placeholder="Contraseña" required="true">			
		</div>	


	<button type="submit" class="btn btn-default btn-block" id="btIngresarGerente" name="btIngresarGerente">
	  <span class="glyphicon glyphicon-send"></span> Enviar 
	</button>

	</form>		
</div>



<?php 



if (isset($_POST['btIngresarGerente'])) {

	$dbname ="CasoEstudio";

	include_once ('./Conexion/Conectar.php');

					$USUARIO	=$_POST['txusuario'];
					$clave		=$_POST['txclave'];

					
		$sql= "SELECT * FROM personal WHERE Usuario ='$USUARIO'";

		$stmt =$db->query($sql);
			

			if($stmt->num_rows>0)
			{
				
				$row = $stmt->fetch_array(MYSQLI_ASSOC);

				if (password_verify($clave,$row['Contrasena']))	
				{
				
				
				$_SESSION['login']=true;
				$_SESSION['txusuario']=$USUARIO;
				$_SESSION['inicio']=time();
				$_SESSION['fin']=$_SESSION['inicio']+(5*60);

		
?>

				 <center><p>
				 <h2> <?php echo "Bienvenido Gerente ".$row['PrimerNombre']." " .$row['PrimerApellido'] ; ?></h2>
				 </p> </center>

			  	<center><a href="?menu=EnvioGerente">
			  		<span class="glyphicon glyphicon-send" class="btn btn-default btn-block"></span> Ingresar 
			    </a></center>
	

<?php 
				}		
				
			}else
				{
					echo "<div align=\"center\"> Usuario o Contraseña Incorrectos Vuelva Intentar</div><br>";
					
				}	
			
				
	}
?>
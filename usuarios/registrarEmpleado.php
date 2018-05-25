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
 	<h2>Registar Empleado</h2>
 </p> 
</div>

<div class="container">
	
	<form action='#' method='post'>
	<a href="?menu=CerrarPagina"><p align="right">
	<type="submit" class="" id="Cerrar" name="Cerrar">
	<span class="glyphicon glyphicon-lock"></span> Salir
	</p></a>

	<a href="?menu=VolverAdmin"><p align="Volver">Volver Pagina Principal </p> </a>
		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-user"></span>	
			</span>		
					<input  class="form-control" id="txtUsuario" name="txtUsuario" type="text" placeholder="Usuario" required="true">		
		</div>	

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-lock"></span>
			</span>		
					<input class="form-control" id="txtContraseña" name="txtContraseña" type="password" placeholder="Contraseña" required="true">			
		</div>	

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-edit"></span>
			</span>			
					<input class="form-control" id="txtPrimerNombre" name="txtPrimerNombre" type="text" placeholder="PrimerNombre" required="true">		
		</div>		

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-edit"></span>
			</span>			
					<input class="form-control" id="txtSegundoNombre" name="txtSegundoNombre" type="text" placeholder="SegundoNombre">		
		</div>	

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-edit"></span>
			</span>			
					<input class="form-control" id="txtPrimerApellido" name="txtPrimerApellido" type="text" placeholder="PrimerApellido" required="true">		
		</div>		

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-edit"></span>
			</span>			
					<input class="form-control" id="txtSegundoApellido" name="txtSegundoApellido" type="text" placeholder="SegundoApellido" required="true">		
		</div>	

		<div class="input-group">
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-envelope"></span>
			</span>			
					<input class="form-control" id="txtemail" name="txtemail" type="email" placeholder="Email" required="true">	
		</div>	

	<center>	<h3><label for="frecuencia">seleccione una respuesta</h3></label>
      </p>
			    <select name="frecuencia">
			        <option value="Administrador">Administrador</option>
			        <option value="Gerente">Gerente</option>
			        <option value="Revisor Fiscal">Revisor Fiscal</option>
			                    
			     </select></center>
			     <br>
     

	<br>
	<center><button type="submit"  id="btEnviarEmpleado" name="btEnviarEmpleado">
	<span class="glyphicon glyphicon-send"></span> Insertar Empleado 
	</button></center>
	<br><br>

	

	</form>		
</div>

<?php 

if (isset($_POST['btEnviarEmpleado'])) {

	$dbname ="CasoEstudio";

	include_once ('./Conexion/Conectar.php');

					$USUARIO			=$_POST['txtUsuario'];
					$CONTRASEÑA			=password_hash($_POST['txtContraseña'],PASSWORD_BCRYPT);	
					$PRIMERNOMBRE		=$_POST['txtPrimerNombre'];
					$SEGUNDONOMBRE		=$_POST['txtSegundoNombre'];	
					$PRIMERAPELLIDO		=$_POST['txtPrimerApellido'];	
					$SEGUNDOAPELLIDO	=$_POST['txtSegundoApellido'];	
					$EMAIL 	 			=$_POST['txtemail'];
					$CARGO 	 			=$_POST['frecuencia'];
				
		$sql= "INSERT INTO  Personal(Usuario, Contrasena, PrimerNombre, SegundoNombre,  PrimerApellido, 									SegundoApellido, Email,Cargo) 

				VALUES ('$USUARIO','$CONTRASEÑA','$PRIMERNOMBRE','$SEGUNDONOMBRE','$PRIMERAPELLIDO','$SEGUNDOAPELLIDO','$EMAIL','$CARGO')" ;

		$stmt =$db->query($sql);
					

				if($db->connect_error) 
				{
				die ("Error ".$db->connect_errno .": " . $db->connect_error);
				}	
				else
				{
					echo "<div align=\"center\">Registros insertados exitosamente</div><br>";				
				}	
				
			
		}
	


 ?>
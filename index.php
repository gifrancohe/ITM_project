<!DOCTYPE html>
<html lang="es">

<head>
	<title> Plantilla Web con PHP</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style >
	
</style>

<!-- BOOTSTRAP-->

	<!-- Compilado de CSS -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

	<!-- Librería jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Compilado JavaScript -->
	<script src="bootstrap/js/bootstrap.min.js"></script>

<!-- Fin Bootstrap -->

</head>



<body>

<!-- El header o encabezamiento, definirá el bloque en donde se mostrará un contenido de tipo titulo o menú del sitio. -->
<header> 	
	<?php 
	//Se carga el archivo con el contenido de la cabecera. Normalmente utilizado para el menú del sitio web.
	require_once('capas/header.php');
	?>
</header>



<!--El section se utiliza para definir secciones con gran contenido en la pagian. Este será el bloqur principal del contenido a mostrar.-->
<section> 
	<div class="container">

		<?php 
		
		if (isset($_GET['menu'])) {//Si la variable 'menu' está definida, entonces se carga la opción del menu seleccionado.
			
			if ($_GET['menu']=='inicio') {
				require_once('capas/bienvenido.php');		
			}
			if ($_GET['menu']=='registro') {
				require_once('usuarios/registrar.php');
			}
			if ($_GET['menu']=='ingreso') {
				require_once('usuarios/ingresar.php');
			} 
			if ($_GET['menu']=='Administrador') {
				require_once('usuarios/Administrador.php');
			}
			if ($_GET['menu']=='BaseDatos') {
				require_once('Conexion/BaseDatos.php');
			}
			if ($_GET['menu']=='ingresoUsuario') {
				require_once('Conexion/Clientes.php');
			}
			if ($_GET['menu']=='EnviarCliente') {
				require_once('usuarios/registrarCliente.php');
			}
			if ($_GET['menu']=='Gerente') {
				require_once('usuarios/ingresarGerente.php');
			}
			if ($_GET['menu']=='EnvioGerente') {
				require_once('usuarios/Gerente.php');
			}
			
			if ($_GET['menu']=='IngresarTendero') {
				require_once('usuarios/Tenderos.php');
			}
			if ($_GET['menu']=='InicioCliente') {
				require_once('usuarios/ClienteFinal.php');
			}
			if ($_GET['menu']=='PaginaCliente') {
				require_once('usuarios/ClienteFinal.php');
			}
			if ($_GET['menu']=='IngresarRepresentante') {
				require_once('usuarios/Representante.php');
			}

			
			if ($_GET['menu']=='Representante') {
				require_once('usuarios/ingresarRepresentante.php');
			}
			if ($_GET['menu']=='RegistarCliente') {
				require_once('usuarios/encuesta.php');
			}
			if ($_GET['menu']=='CerrarPagina') {
				require_once('clases/cerrar.php');
			}
			if ($_GET['menu']=='RegistrarPV') {
				require_once('usuarios/puntoVenta.php');
			}
			if ($_GET['menu']=='VolverAdmin') {
				require_once('usuarios/Administrador.php');
			}
			if ($_GET['menu']=='RegistrarTendero') {
				require_once('usuarios/registrarTendero.php');
			}
			if ($_GET['menu']=='ingresarTendero') {
				require_once('usuarios/ingresarTendero.php');
			}



			if ($_GET['menu']=='RegistrarEmpleado') {
				require_once('usuarios/registrarEmpleado.php');
			}
			if ($_GET['menu']=='RegresarBD') {
				require_once('usuarios/CrearBD.php');
			}
			if ($_GET['menu']=='BDtablas') {
				require_once('Conexion/Prueba.php');
			}
			if ($_GET['menu']=='CrearBD') {
				require_once('usuarios/CrearBD.php');
			} 
			if ($_GET['menu']=='RegistarEncuesta') {
				require_once('usuarios/Encuesta.php');
			} 
			if ($_GET['menu']=='EnviarEncuesta') {
				require_once('usuarios/encuesta.php');
			}

			if ($_GET['menu']=='EncuestaSi') {
				require_once('usuarios/encuesta_si.php');
			}

			if ($_GET['menu']=='EncuestaNo') {
				require_once('usuarios/encuesta_no.php');
			}

			if ($_GET['menu']=='contacto') {
				require_once('usuarios/contacto.php');
			} 
			


		}else{
			require_once('capas/bienvenido.php');	
		}

	 	?>		
	</div>

</section>







<!--El footer definirá el bloque en donde se mostrará el contenido tipo pie de página del sitio. -->	
<footer> 
	<div id="footer">
		<div class="container text-center">
			<?php 
				include_once('capas/footer.php');
			?>	
		</div>
	</div>
</footer>


</body>
</html>

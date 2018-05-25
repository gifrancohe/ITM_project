<?php 


$server= "localhost";
$user="root";
$password="";


if(isset($dbname))
{	

	$db= new mysqli($server,$user,$password,$dbname);

	if ($db->connect_error) {
		die("<br>La Conexión ha fallado");
	}
	else{
	//echo "<br><br><br><h2><div align=\"center\"> La conexión ha sido exitosa 1</div><br></h2>";
	}
}else{

		$db= new mysqli($server,$user,$password);

		if ($db->connect_error) {
			die("<br>La Conexión ha fallado");
			}	
			else{
			//echo "<br><br><br><h2><div align=\"center\"> La conexión ha sido exitosa 1</div><br></h2>";;
		}
}
 ?>

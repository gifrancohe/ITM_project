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
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    
    <script src="bootstrap/js/bootstrap.min.js"></script>
<header>    
    <?php 
    
    require_once('./capas/header.php');
    ?>
</header>


<a href="?menu=CerrarPagina"><p align="right">
    <type="submit" class="" id="Cerrar" name="Cerrar">
    <span class="glyphicon glyphicon-lock"></span> Salir
    </p></a>

<section> 
    
    <div  class="container page-header text-center">
 <p>
    <h3>2. ¿Cual de los siguientes productos consume?</h3>
 </p>   
 </div>

</section>

<section>
 <div  class="container page-header text-center">
 <p>
 <body >
    <form method = "post" action = "encuesta_si.php">
      <p>
    <h3><label for="opcion">seleccione su respuesta</h3></label>
      </p>
    <h4>Chorizo:<input type="checkbox" name="producto" velue="chorizo" /></h4>
    <h4>Mortadela:<input type="checkbox" name="producto" velue="mortadela" /></h4>
    <h4>Salami:<input type="checkbox" name="producto" velue="salami" /></h4>
    <h4>Costilla:<input type="checkbox" name="producto" velue="costilla" /></h4>
    <h4>Morcilla:<input type="checkbox" name="producto" velue="morcilla" /></h4>
    <h4>Salchicha:<input type="checkbox" name="producto" velue="salchicha" /></h4>
    <h4>Salchichon:<input type="checkbox" name="producto" velue="salchichon" /></h4>
     

     <br><br>
    
             
    </form>
 </div>
 </body>
 </section>

 <section> 
    
    <div  class="container page-header text-center">
 <p>
    <h3>3. ¿Con que frecuencia consume estos productos?</h3>
 </p>   
 </div>

</section>

 <section>
 <div  class="container page-header text-center">
 <p>
 <body >
    <form method = "post" action = "encuesta_si.php">
      <p>
    <h3><label for="frecuencia">seleccione una respuesta</h3></label>
      </p>
    <select name="frecuencia">
        <option value="diario">Diariamente</option>
        <option value="una_por_semana">Entre una y tres veces por semana</option>
        <option value="cuatro_por_semana">Entre cuatro y seis veces por semana</option>
        <option value="una_al_mes">Una vez al mes</option>
        <option value="mas_de_una">Mas de una vez al mes</option>
            
     </select>
     

     <br><br>
    
             
    </form>
 </div>
 </body>
 </section>

 <section> 
    
    <div  class="container page-header text-center">
 <p>
    <h3>4. ¿Cual es la presentacion que mas le gusta o le gustaria encontrar
    en los productos carnicos embutidos que consume?</h3>
 </p>   
 </div>

</section>

 <section>
 <div  class="container page-header text-center">
 <p>
 <body >
    <form method = "post" action = "encuesta_si.php">
      <p>
    <h3><label for="frecuencia">seleccione una respuesta</h3></label>
      </p>
    <select name="frecuencia">
        <option value="unidad">Por unidad</option>
        <option value="media_libra">250 gr (1/2 libra)</option>
        <option value="una_libra">500 gr (1 libra)</option>
        <option value="libra_y_media">750 gr (1 1/2 libra)</option>
        <option value="un_kilo">1000 gr (1 kilo)</option>
            
     </select>
     

     <br><br>
    
             
    </form>
 </div>
 </body>
 </section>

 <section> 
    
    <div  class="container page-header text-center">
 <p>
    <h3>5. Cual de las siguientes variables considera es la mas importante para usted, a la
    hora de adquirir un embutido carnico enumerelas de 1 a 5, donde 1 es la menos importante
 y 5 es la mas importante</h3>
 </p>   
 </div>

</section>

 <section>
 <div  class="container page-header text-center">
 <p>
 <body >
    <form method = "post" action = "#.php">
      <p>
    <h3><label for="opcion">seleccione su respuesta</h3></label>
      </p>
    <h4>Precio: <select name="importancia">
        
        <option value="uno">1</option>
        <option value="dos">2</option>
        <option value="tres">3</option>
        <option value="cuatro">4</option>
        <option value="cinco">5</option></h4>
         </select>

        <h4>Sabor: <select name="importancia">
        
        <option value="uno">1</option>
        <option value="dos">2</option>
        <option value="tres">3</option>
        <option value="cuatro">4</option>
        <option value="cinco">5</option></h4>
         </select>

        <h4>Calidad: <select name="importancia">
        
        <option value="uno">1</option>
        <option value="dos">2</option>
        <option value="tres">3</option>
        <option value="cuatro">4</option>
        <option value="cinco">5</option></h4>
         </select>

        <h4>Presentacion en gramos: <select name="importancia">
        
        <option value="uno">1</option>
        <option value="dos">2</option>
        <option value="tres">3</option>
        <option value="cuatro">4</option>
        <option value="cinco">5</option></h4>
         </select>

        <h4>Empaque: <select name="importancia">
        
        <option value="uno">1</option>
        <option value="dos">2</option>
        <option value="tres">3</option>
        <option value="cuatro">4</option>
        <option value="cinco">5</option></h4>
                    
     </select>
    

     <br><br>
    
             
    </form>
 </div>
 </body>
 </section>

 
    <div  class="container page-header text-center">
 <p>
    <h3>6. seleccione el establecimiento habitual de su compra</h3>
 </p>   
 </div>

</section>

 <section>
 
 <!DOCTYPE html>
 <html>
 <head>
     <title></title>
 </head>
 <body>
 <?php
$arrayCombo1 = array(
    'Medellin',
    'Bogota'
);
 
$arrayCombo2 = array(
    'Envigado',
    'Robledo',
    'Ciudad Bolivar',
    'Fontibon'
);
 
$arrayCombo3 = array(
    'Olimpica',
    'Exito',
    'D1',
    'Jumbo'
);
?>
 <form action="" method="post">
 <center>
    <select name="combo1" id="combo1">
        <option value="" selected="selected">-- Ciudad --</option>
        <?php
        foreach($arrayCombo1 as $datoCombo1) {
            echo "<option value=".$datoCombo1.">".$datoCombo1."</option>";
        }
        ?>
    </select>
 
    <select name="combo2" id="combo2">
        <option value="" selected="selected">-- Barrio --</option>
        <?php
        foreach($arrayCombo2 as $datoCombo2) {
            echo "<option value=".$datoCombo2.">".$datoCombo2."</option>";
        }
        ?>
    </select>
    <select name="combo3" id="combo3">
        <option value="" selected="selected">-- Establecimiento --</option>
        <?php
        foreach($arrayCombo3 as $datoCombo3) {
            echo "<option value=".$datoCombo3.">".$datoCombo3."</option>";
        }
        ?>
    </select>
 
    </center>
</form>
 </body>
 </html>
 </section>

 <br><br>


    <div  class="container page-header text-center">
 <p>
    <h3>7. ¿Cual es la forma que le gusta o le gustaria adquirir los productos carnicos embutidos?</h3>
 </p>   
 </div>

</section>

 <section>
 <div  class="container page-header text-center">
 <p>
 <body >
    <form method = "post" action = "encuesta_si.php">
      <p>
    <h3><label for="forma">seleccione una respuesta</h3></label>
      </p>
    <select name="forma">
        <option value="punto_venta">En el punto de compra habitual</option>
        <option value="domicilio_telefono">Domicilio solicitado telefonicamente al punto habitual de compra</option>
        <option value="domicilio_web">Domicilio solicitado atravez de pagina web</option>
        <option value="almacen">En almacen de cadena (Grandes superficies)</option>
        
            
     </select>
     

     <br><br>
    
             
    </form>
 </div>
 </body>
 </section>

 <section> 
    
    <div  class="container page-header text-center">
 <p>
    <h3>8. ¿Le gustaria recibir ofertas e informacion de nuestra compañia, especialmente?</h3>
 </p>   
 </div>

</section>

 <section>
 <div  class="container page-header text-center">
 <p>
 <body >
    <form method = "post" action = "encuesta_si.php">
      <p>
    <h3><label for="opcion">seleccione una respuesta</h3></label>
      </p>
    <select name="opcion">
        <option value="yes">si</option>
        <option value="not">no</option><br><br>
                
     </select>
     
<br><br>
     
    
            <button type="submit" class="btn btn-default btn-block" id="btEnviarCliente" name="btEnviarCliente">
          <a href="?menu=InicioCliente"><span class="glyphicon glyphicon"></span> Terminar </a>
          </button> 
       <br><br><br><br>   
    </form>
 </div>
 </body>
 </section>

 <footer> 
    <div id="footer">
        <div class="container text-center">
            <?php 
                include_once('./capas/footer.php');
            ?>  
        </div>
    </div>
</footer>


<?php
  include_once('controlSession.php');
  include_once('../controller/clasescontroller_est.php');
  
        $row = $_SESSION['persona'] ;
      


	$conexion=mysqli_connect('localhost','root','','notyme');


 ?>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/perfil.css">
  <title>Principal</title>
  <link rel="icon" href="img/loguito.png">
  <link href="javascript/lightbox.css" rel="stylesheet">
</head>

<body>

  <div class="container-fluid">
      
    <header class="row nav ">
      <div class="col-xs-12 col-sm-6 col-md-2 col-lg  ">
        <div id="logo_principal"></div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-10 col-lg">
        <div id="cont">
          <ul>
             <li>
              <a href="../controller/CerrarSesion.php">CERRAR SESION</a>
            </li>
            <li>
              <a href="../view/acceso.php">AGENDA</a>
            </li>
          </ul>
        </div>
      </div>
    </header>
      <?php 
		$sql="SELECT count(codigo) FROM materia WHERE Persona_codigo = ".($row['codigo']);
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		
			
		
	<?php 
	}
	 ?>
      
    <section class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
        <div id="usuario" class="col-xs-12 col-sm-6 col-md-6 col-lg-6" >
            <img src="img/user.png" width="150" height="150" style="margin-top:50px;margin-left: 175px;margin-bottom: 20px;"/>
            <a id="boton" href="#">Actualizar foto</a>
            <a id="boton"href="#">Cambiar contraseña</a>
        </div>
        <div id="info" class="col-xs-12 col-sm-6 col-md-6 col-lg-6" >
          <div id="datos_estudiante">
              <div id="datos">
                <h4>Nombre:</h4>
                <div id="dato_estudiante">&ensp;<?php echo(ucwords(trim($row['nombre']))) ?> <?php echo(ucwords(trim($row['apellido']))) ?></div>
              </div>
              <div id="datos">
                <h4>Usuario:</h4>
                <div id="dato_estudiante">&ensp;<?php echo(ucwords(trim($row['user']))) ?></div>
              </div>
              <div id="dato_estudiante">
                <h4>Correo:</h4>
                <div id="dato_estudiante">&ensp;<?php echo(ucwords(trim($row['correo']))) ?></div>
              </div>
              
            </div>
        </div>
      </div>
    </section>
      
    <footer class="row ">
      <div class="col-12 col-sm-4 col-md-6 col-lg ">
        <div id="logo_principal"></div>
      </div>
      <nav class="col-12 col-sm-8 col-md-6 col-lg-auto">
        <div id="redes">
          <ul>
            <li id="logo1"><img src="img/facebook.png" width="32" height="32" /></li>
            <li id="logo2"><img src="img/twitter.png" width="32" height="32" /></li>
            <li id="logo3"><img src="img/instagram.png" width="32" height="32" /></li>
          </ul>
        </div>
      </nav>
    </footer>


    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</div>
</body>

</html>

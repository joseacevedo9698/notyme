
<!DOCTYPE html>
<?php
include '../controller/registramateria.php';
include_once('controlSession.php');
include_once('../controller/clasescontroller_est.php');
$row = $_SESSION['persona'] ;
?>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/agregarmat.css">
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
              <a id="conocenos" href="../view/acceso.php">HOME</a>
            </li>
            <li>
              <a id="registro" href="../view/perfil.php"><?php echo(ucwords(trim($row['user']))) ?></a>
            </li>
              <li>
              <a id="conocenos" href="../controller/CerrarSesion.php">cerrar sesion</a>
            </li>
          </ul>
        </div>
      </div>
    </header>

    <section class="row nav ">
      <div id="menu" class="menu col-xs-2 col-sm-6 col-md-2 col-lg-2  ">
        <h1>MENU</h1>
        <div id="item_dos"><img src="img/icons-23.png" width="25" height="25"/> <a href="../view/acceso.php">Mesa</a>
          <img src="img/icons-28.png" width="25" height="25" align="right" style="margin-top:3px"/>
        </div>  
          <div id="item_uno">
          <img src="img/icons-20.png" width="25" height="25"/> <a href="agregartarea.php">Agregar Tarea</a>
          <img src="img/icons-28.png" width="25" height="25" align="right" style="margin-top:3px"/>
        </div>
        <div id="item_dos">
          <img src="img/icons-20.png" width="25" height="25"/> <a href="#">Agregar Materia</a>
          
        </div>
      </div>
      <div id="act" class="col-xs-10 col-sm-6 col-md-10 col-lg-10  ">
          
          
            <h1>Añadir Materia</h1>  
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <div id="inf">
              Nombre:
            <input id="user" name="nombre" type="text" value placeholder=" MATERIA " required>
          </div>
          
          <div id="inf">Profesor:
            <input id="user" name="profesor" type="text" value placeholder=" PROFESOR " required>
          </div>
          
          <input id="boton" type="submit" value="ACEPTAR" >
          <input id="boton1" type="button" value="CANCELAR" href="acceso.php">
          </form>

  
          
          
     
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


    <script src="../view/js/jquery-3.2.1.min.js"></script>
    <script src="../view/js/bootstrap.min.js"></script>
    <script src="../view/js/script.js"></script>
</div>
</body>

</html>

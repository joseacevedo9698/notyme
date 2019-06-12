<?php

include 'code-register.php';

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
  <link rel="stylesheet" href="../view/css/bootstrap.min.css">
  <link rel="stylesheet" href="../view/css/login.css">
  <title>Registrate</title>
  <link rel="icon" href="img/loguito.png">
    <link href="javascript/lightbox.css" rel="stylesheet">
</head>

<body>

  <header class="container">
      <div class="row nav ">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12  ">
              <a href="../index.php"><div id="logo"></div></a>
            
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
             <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
              <div id="ingreso">REGISTRATE</div>
              <h6>&nbsp;&nbsp;Nombre</h6><input id="user" name="nombre" type="text" required>
              <h6>&nbsp;&nbsp;Apellido</h6><input id="user"  name="apellido"type="text"  required>
              <h6>&nbsp;&nbsp;Usuario</h6><input id="user" name="username" type="text" required>
              <h6>&nbsp;&nbsp;Correo</h6><input id="user" name="correo" type="text"  required>
              <h6>&nbsp;&nbsp;Contraseña</h6><input id="password" name="password" type="password" required>
            <input id="boton" type="submit" value="REGISTRATE" >
            </form>

          </div>
          
          </div>
      </div>
  </header>
      

</body>

</html>

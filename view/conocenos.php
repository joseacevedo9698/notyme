<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
  <link rel="stylesheet" href="../view/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="../view/css/conocenos.css">
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
              <a href="../view/login.php">REGISTRATE</a>
            </li>
            <li>
              <a href="../index.php">INICIO</a>
            </li>
          </ul>
        </div>
      </div>
    </header>
      
    <section class="row ">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 " style="padding-left: 0;padding-right: 0;">
            <div id="ques" class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div id="txt">
                <h1> ¿Qué es Noty.Me?</h1><br>
                <p>NotifyMe te brinda la oportunidad de no perder de vista tus responsabilidades académicas, pudiendo así quitarte un peso de encima. La web a través de correos electronicos te avisará de cualquier detalle que tengas pendiente por atender en tu universidad, esta te recordará tareas, exámenes y demás con solo llenar su cronograma con tu planeación académica.</p>
                </div>
                <img src="img/dis_img.png" width="30%" height="300" style="margin-left:120px;margin-top: 60px;border-radius: 5px;margin-bottom: 60px;" />
            </div>
            <div id="usar" class="col-12 col-sm-12 col-md-12 col-lg-12">
                <h1>¿Cómo usar Noty.Me?</h1>
                <div id="cajitas">
                    <div id="conten" class="col-12 col-sm-12 col-md-12 col-lg-3">
                        <h4>Regístrate</h4>
                        <p>Entra en la pestaña "Sign In", introduce los datos y accede a tu perfil.</p>
                        <img src="img/dis_registro.png" width="250" height="250"  />
                    </div>
                    <div id="conten" class="col-12 col-sm-12 col-md-12 col-lg-3">
                        <h4>Llena</h4>
                        <p>Llena los campos correspondientes en la pestaña de perfil.</p>
                        <img src="img/dis_llena.png" width="250" height="250"  />
                    </div>
                    <div id="conten" class="col-12 col-sm-12 col-md-12 col-lg-3">
                        <h4>Organiza</h4>
                        <p>Mueve tu tarjetas tal como quieres organizar tu información.</p>
                        <img src="img/dis_org.png" width="250" height="250"  />
                    </div>
                    <div id="conten" class="col-12 col-sm-12 col-md-12 col-lg-3">
                        <h4>Recibe</h4>
                        <p>Recibe en tu correo notificaciones de alerta por cada fecha puesta en el perfil.</p>
                        <img src="img/dis_rec.png" width="250" height="250"  />
                    </div>
                </div>
            </div>
            <div id="contact" class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div id="contacto">
                
                    <h1>Contáctenos</h1>
                   <form name="form1"  method="post" action="../controller/enviar.php">
							
							<span>Nombre:</span>
							<input type="text" placeholder="Ingresa tu Nombre : Requerido" name="nombre" id="nombre" required autofocus>
 
							<span>Email:</span>
							<input type="email" placeholder="Ingresa tu email:Requerido" name="email" id="email" required>
 
							<span>Mensaje:</span>
							<textarea rows="5" cols="40"  name="mensaje" id="mensaje" placeholder="Mensaje Requerido "  required></textarea>
 
							<input class="sendButton" type="submit" id="boton" name="Submit" value="ENVIAR">
						</form>
                    <?php
              if (isset($_GET["error"])) {
                $error = $_GET['error'];
                if ($error=="1"){
                  print 'Mensaje enviado';
                }
              }
              if (isset($_GET["error"])) {
                $error = $_GET['error'];
                if ($error=="0"){
                  print 'Intentalo mas tarde';
                }
              }
            ?>
                    
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


</div>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/alerta2.js"></script>
</body>

</html>

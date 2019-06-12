<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
  <link rel="stylesheet" href="view/css/bootstrap.min.css">
  <link rel="stylesheet" href="view/css/index.css">
  <title>Principal</title>
  <link rel="icon" href="view/img/loguito.png">
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
              <a id="conocenos" href="../notyme/view/conocenos.php">CONOCENOS</a>
            </li>
            <li>
              <a id="registro" href="view/login.php">REGISTRATE</a>
            </li>
             
            <li><a href="javascript:openventana()">INICIA SESION</a>
            
            <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.js"></script>﻿
           <form id="login" action="controller/checklogin.php" method="post" name="login">
            <div class="contenedor-iniciosesion">
              	<div id="iniciosesion">
                	<div id="iniciosesion-uno"><h1>INGRESAR</h1>
               	  		<h5>Usuario</h5><input type="text" class="datos" id="correo" name="user" value="" required><br>
                  		<h5>Contraseña</h5><input type="password" class="datos" id="contraseña" name= "pass" required><br>
                         <?php
              if (isset($_GET["error"])) {
                $error = $_GET['error'];
                if ($error=="1"){
                  print 'Este usuario no esta registrado';
                }
              }
              if (isset($_GET["errorp"])) {
                $error = $_GET['errorp'];
                if ($error=="1"){
                  print 'Contraseña incorrecta';
                }
              }
            ?>
                 </div>
                   <input id="boton-iniciosesion" name="login" type="submit" value="Ingresar">
                  <a href="view/login.php" id="boton-registro">Registrate</a>
                    
                  <div id="cerrar"><a href="javascript:closeventana();"><spam>Cerrar</spam></a></div>
                </div>
            </div>
                </form>
           
            </ul>
          </div>
        </div>
      </header>
    </div>
    

    <main class=" row">
      <div class=" col-12 col-sm-12 col-md-12 col-lg-12">
        <div id="imagen_main"></div>
      </div>
    </main>

    <section class=" row">
      <div class="titulo_1 col-12 col-sm-12 col-md-12 col-lg-12">
        <h1>¡Ponte al tanto de </h1>
        <h1>tus responsabilidades!</h1>
      </div>
      <div class="tami col-12 col-sm-12 col-md-12 col-lg-12">
        <div class="texto col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">
          <h2>Tareas</h2>
          <p>&nbsp;</p>
          <p>Noty.Me te recuerda tus tareas a entregar de acuerdo a la fecha que configures, enviandote un correo con la informacion de esta. Con esta pagina lograras tener un mejor rendimiento academico, ya que no tendras que preocuparte por olvidar de
            nuevo tus deberes. </p>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-9">
          <div id="minimagen"></div>
        </div>
      </div>
      <div class="tami col-12 col-sm-12 col-md-12 col-lg-12">
        <div class="texto col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">
          <h2>Exámenes</h2>
          <p>&nbsp;</p>
          <p>Planifica y organiza tus horas de quices o parciales para que lleves un mejor cronograma y así nuestra plataforma pueda brindarte como tambien mantener el control de este y notificarlo. ¡Ya no volveras a perder de vista tus responsabilidades!</p>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-9">
          <div id="minimagen"></div>
        </div>
      </div>
      <div class="tami col-12 col-sm-12 col-md-12 col-lg-12">
        <div class="texto col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">
          <h2>Calendario</h2>
          <p>&nbsp;</p>
          <p>Te ofrecemos una interfaz visualmente atractiva y capaz de transmitir tranquilidad y agrado, para así brindar comodidad a nuestros usuarios y mantenerte al tanto de todas tus actividades para que puedas organizarte de una manera mas fácil. </p>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-9">
          <div id="minimagen"></div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-6 col-lg-auto menu d-flex align-items-stretch flex-wrap flex-sm-nowrap">
          
          <a id="btn_emp" href="../notyme/view/login.php">INGRESAR</a>
      </div>

    </section>

    <footer class="row ">
      <div class="col-12 col-sm-4 col-md-6 col-lg ">
        <div id="logo_principal"></div>
      </div>
      <nav class="col-12 col-sm-8 col-md-6 col-lg-auto">
        <div id="redes">
          <ul>
            <li id="logo1"><img src="view/img/facebook.png" width="32" height="32" /></li>
            <li id="logo2"><img src="view/img/twitter.png" width="32" height="32" /></li>
            <li id="logo3"><img src="view/img/instagram.png" width="32" height="32" /></li>
          </ul>
        </div>
      </nav>
    </footer>


    <script src="view/js/jquery-3.2.1.min.js"></script>
    <script src="view/js/bootstrap.min.js"></script>
    <script src="view/js/script.js"></script>
    <script type="text/javascript">
      function openventana() {
        $(".contenedor-iniciosesion").slideDown("slow");
      }

      function closeventana() {
        $(".contenedor-iniciosesion").slideUp("fast");
      }
    </script>
    <div style="text-align: right;position: fixed;z-index:9999999;bottom: 0;width: auto;right: 1%;cursor: pointer;line-height: 0;display:block !important;"><a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE." target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&utm_campaign=000_logo&utm_medium=website&utm_content=footer_img"><img src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png" alt="www.000webhost.com"></a></div>
    <script>
      function getCookie(e) {
        for (var t = e + "=", n = decodeURIComponent(document.cookie).split(";"), o = 0; o < n.length; o++) {
          for (var i = n[o];
            " " == i.charAt(0);) i = i.substring(1);
          if (0 == i.indexOf(t)) return i.substring(t.length, i.length)
        }
        return ""
      }
      getCookie("hostinger") && (document.cookie = "hostinger=;expires=Thu, 01 Jan 1970 00:00:01 GMT;", location.reload());
      var notification = document.getElementsByClassName("notice notice-success is-dismissible"),
        hostingerLogo = document.getElementsByClassName("hlogo"),
        mainContent = document.getElementsByClassName("notice_content")[0],
        newList = ["Powerful and Easy-To-Use Control Panel.", "1-Click Auto Installer and 24/7 Live Support.", "Free Domain, Email and SSL Bundle.", "5x faster WordPress performance", "Weekly Backups and Fast Response Time."];
      if (0 < notification.length && null != mainContent) {
        var googleFont = document.createElement("link");
        googleFontHref = document.createAttribute("href"), googleFontRel = document.createAttribute("rel"), googleFontHref.value = "https://fonts.googleapis.com/css?family=Open+Sans:300,400,600", googleFontRel.value = "stylesheet", googleFont.setAttributeNode(
          googleFontHref), googleFont.setAttributeNode(googleFontRel);
        var css =
          "@media only screen and (max-width: 768px) {.web-hosting-90-off-image-wrapper {position: absolute;} .notice_content {justify-content: center;} .web-hosting-90-off-image {opacity: 0.3;}} @media only screen and (min-width: 769px) {.notice_content {justify-content: space-between;} .web-hosting-90-off-image-wrapper {padding: 0 5%}} .content-wrapper {z-index: 5} .notice_content {display: flex; align-items: center;} * {-webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;} .upgrade_button_red_sale{border: 0; border-radius: 3px; background-color: #ff123a !important; padding: 15px 55px !important; margin-left: 30px; font-family: 'Open Sans', sans-serif; font-size: 16px; font-weight: 600; color: #ffffff;} .upgrade_button_red_sale:hover{color: #ffffff !important; background: #d10303 !important;}",
          style = document.createElement("style"),
          sheet = window.document.styleSheets[0];
        style.styleSheet ? style.styleSheet.cssText = css : style.appendChild(document.createTextNode(css)), document.getElementsByTagName("head")[0].appendChild(style), document.getElementsByTagName("head")[0].appendChild(googleFont);
        var button = document.getElementsByClassName("upgrade_button_red")[0],
          link = button.parentElement;
        link.setAttribute("href", "https://www.hostinger.com/hosting-starter-offer?utm_source=000webhost&utm_medium=panel&utm_campaign=000-wp"), link.innerHTML = '<button class="upgrade_button_red_sale">TRANSFER NOW</button>', (notification =
          notification[0]).setAttribute("style",
          "padding-bottom: 10px; padding-top: 5px; background-image: url(https://cdn.000webhost.com/000webhost/promotions/springsale/mountains-neon-background.jpg); background-color: #000000; background-size: cover; background-repeat: no-repeat; color: #ffffff; border-color: #ff123a; border-width: 8px;"
        ), notification.className = "notice notice-error is-dismissible", (hostingerLogo = hostingerLogo[0]).setAttribute("src", "https://cdn.000webhost.com/000webhost/promotions/springsale/logo-hostinger-white.svg"), hostingerLogo.setAttribute(
          "style", "float: none !important; height: auto; max-width: 100%; margin: 40px 20px 10px 30px;");
        var h1Tag = notification.getElementsByTagName("H1")[0];
        h1Tag.remove();
        var paragraph = notification.getElementsByTagName("p")[0];
        paragraph.innerHTML = "Migrate your WordPress to Hostinger and enjoy the best features on the market! The time is now!", paragraph.setAttribute("style",
          'max-width: 600px; margin-left: 30px; font-family: "Open Sans", sans-serif; font-size: 16px; font-weight: 600;');
        var list = notification.getElementsByTagName("UL")[0];
        list.setAttribute("style", "max-width: 675px;");
        for (var listElements = list.getElementsByTagName("LI"), i = 0; i < newList.length; i++) listElements[i].setAttribute("style",
          "color:#ffffff; list-style-type: disc; margin-left: 30px; font-family: 'Open Sans', sans-serif; font-size: 14px; font-weight: 300; line-height: 1.5;"), listElements[i].innerHTML = newList[i];
        listElements[listElements.length - 1].remove();
        var org_html = mainContent.innerHTML,
          new_html = '<div class="content-wrapper">' + mainContent.innerHTML +
          '</div><div class="web-hosting-90-off-image-wrapper"><img class="web-hosting-90-off-image" src="https://cdn.000webhost.com/000webhost/promotions/springsale/web-hosting-90-off.png"></div>';
        mainContent.innerHTML = new_html;
        var saleImage = mainContent.getElementsByClassName("web-hosting-90-off-image")[0];
        ! function() {
          var t = document.querySelectorAll("body.wp-admin")[0];

          function e() {
            var e = document.createElement("iframe");
            e.id = "hgr-promo-widget", e.setAttribute("src", "https://www.hostinger.com/widgets/bottom-banner-sale/000_wp_admin"), e.setAttribute("allowfullscreen", !0), e.setAttribute("frameborder", 0), e.style.cssText =
              "z-index: 2147483000 !important;position: fixed !important;bottom: 0; width: 100%;!important; left: 0!important;", e.style.opacity = 0, e.onload = function() {
                iFrameResize({}, "#hgr-promo-widget"), e.style.opacity = 1
              }, t.insertAdjacentElement("afterend", e)
          }
          if (window.iFrameResize) e();
          else {
            var n = document.createElement("script");
            n.type = "text/javascript", t.insertAdjacentElement("afterend", n), n.onload = e, n.src = "https://unpkg.com/iframe-resizer@3.6.3/js/iframeResizer.min.js"
          }
        }()
      }
    </script>
</body>

</html>

<?php
  require_once("../Classes/PersonaObject.php");

  session_start();
  if (isset($_SESSION['persona'])) {
    $control = $_SESSION['persona'];
  }
   ?>

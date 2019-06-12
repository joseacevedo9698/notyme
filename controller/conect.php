<?php
    require('config.php');
  /**
   * clase conection
   */
  class Conect
  {

    private $mysqli;

    function Conect()
    {
      if(!isset($this->mysqli)){
        $this->mysqli = new mysqli(host,user,pass,dbname) or die(mysql_error());
        $this->mysqli->set_charset("utf8");
      }
    }

    public function consulta($consulta){

      $result = $this->mysqli->query($consulta);
      if(!$result){
        echo 'MySQL Error: ' . mysql_error();
        exit;
      }
      return $result;
    }


  }


 ?>

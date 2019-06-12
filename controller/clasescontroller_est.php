<?php
  include_once('../model/clasesmodel_est.php');
  include_once('../Classes/Clase_alumno_Object.php');
  /**
   * clase controller Estudiante
   */
  class clasecontrollerest
  {
    private $id;
    private $clasemode;
    private $result_clases;
    function __construct($ident)
    {
      $this->id = $ident;
    }

    public function ordenarclases()
    {
      $this->clasemode = new clasemodelest($this->id);
      $lista = array();
      $this->result_clases = $this->clasemode->consultarclases();
      while ($fila = $this->result_clases->fetch_assoc()){
        $aux = new Clase_alumno($fila['codigo'],$fila['cod_clase'],$fila['nombre'],$fila['hora_inicio'],$fila['count(i.codigo)'],$fila['inasistencias']);
        $lista[] = $aux;
      }
      return $lista;
    }

  }
 ?>

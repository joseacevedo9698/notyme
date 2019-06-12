<?php

  /**
   * clase model Estudiante
   */
   include('../controller/conect.php');
  class clasemodelest
  {
    private $db;
    private $sql;
    private $id;
    function clasemodelest($id)
    {
      $this->id = $id;
      $this->db = new Conect();
      $this->db->Conect();
    }
    public function consultarclases()
    {
      $this->sql = 'select * from (SELECT a.persona_codigo,cs.codigo,c.codigo as cod_clase,c.nombre,ch.hora_inicio
                  from persona as  p
                  INNER JOIN alumno as a on p.codigo = a.Persona_codigo
                  INNER JOIN clase_has_alumno as cs ON a.Persona_codigo = cs.alumno_codigo
                  INNER JOIN clase AS c ON cs.clase_codigo=c.codigo
                  INNER JOIN clase_horario as ch ON c.codigo = ch.Clase_codigo
                  where p.codigo = '.$this->id.' AND ch.dia = DAYOFWEEK(NOW())) x
                  ,
                  (select count(i.codigo)
                  from inasistencia i
                  INNER JOIN clase_has_alumno ca ON i.clase_has_alumno_codigo = ca.codigo
                  where i.fecha = date(NOW()) and ca.alumno_codigo = '.$this->id.') y
                  ,
                  (SELECT c.codigo,count(i.codigo) inasistencias from inasistencia i
                  INNER JOIN clase_has_alumno ca ON i.clase_has_alumno_codigo = ca.codigo
                  INNER JOIN clase c ON ca.clase_codigo=c.codigo
                  INNER JOIN clase_horario ch ON c.codigo = ch.Clase_codigo
                  WHERE ca.alumno_codigo = '.$this->id.' AND ch.dia=DAYOFWEEK(NOW()) GROUP BY c.codigo) z';
      $result = $this->db->consulta($this->sql);
      return $result;
    }


  }


 ?>

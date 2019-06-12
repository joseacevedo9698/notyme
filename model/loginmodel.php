<?php
/**
 * clase loginmodel
 */
include('../controller/conect.php');
class LoginModel
{
  private $tbl_name;
  private $db;
  private $sql;
  private $result;
  function LoginModel()
  {
    $tbl_name= 'persona';
    $this->db = new Conect();
    $this->db->Conect();
  }

  public function Consultaruser($user,$pass)
  {
    $sql = "SELECT * FROM persona WHERE user = '$user' ";
    $this->result = $this->db->consulta($sql);
    return  $this->validar($pass);
      
  }  
    
   
    public function Consultauser($user,$pass)
  {
    $sql = "SELECT * FROM persona WHERE user = '$user' ";
    $this->result = $this->db->consulta($sql);
    return  $this->validar($pass);
      
  }

    
    
  private function validar($pass)
  {
    if($row = $this->result->fetch_array()){
      if($row['password'] == $pass){
        return $row;  
      }else{
        return 0;
      }
    }else{
      return -1;
    }
  }
}



 ?>

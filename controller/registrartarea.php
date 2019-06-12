<?php
require_once "../view/conexion.php";
  include_once('controlSession.php');

$conexion=mysqli_connect('localhost','root','','notyme');
    $row = $_SESSION['persona'] ;


$nombre = $profesor = $codigo = $codigopersona ="";




if ($_SERVER["REQUEST_METHOD"] == "POST"){
   
    
$sql = "SELECT * FROM tarea WHERE descripcion = ?";
     
        
    if($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, "s", $param_nombre);
        
        $param_nombre = trim($_POST["nombre"]);
        
        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_store_result($stmt);
        
                $nombre = trim($_POST["nombre"]);
            }
            }else {
                echo "Ups! Algo Salio mal, intentalo mas tarde";
                }
            
    


      $sql = "SELECT codigo FROM tarea WHERE descripcion = ?";
          
        
    if($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, "s", $param_profesor);
        $param_profesor = trim($_POST["profesor"]);
        
        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_store_result($stmt);
        
                $profesor = trim($_POST["profesor"]);
            }
            }else {
                echo "Ups! Algo Salio mal, intentalo mas tarde";
                }
    
        
    if($stmt = mysqli_prepare($link, $sql)){
        $sql="SELECT * from materia WHERE nombre ='".($_POST["codigo"])."' AND Persona_codigo = ".($row['codigo']);
                var_dump ($sql);

         mysqli_stmt_bind_param($stmt, "s", $param_codigo);
		 $result=mysqli_query($conexion,$sql);
        var_dump (mysqli_query($conexion,$sql));
        
               while($mostrar=mysqli_fetch_array($result)){    
        $param_codigo = trim($mostrar['codigo']);
        
        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_store_result($stmt);
        
                $codigo = trim($mostrar['codigo']);
            }
               }
            }else {
                echo "Ups! Algo Salio mal, intentalo mas tarde";
                }
            

     
   
        $sql = "INSERT INTO tarea (descripcion, fecha, Materia_codigo) VALUES (?,?,?)";
        
        if ($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param ($stmt, "sss",  $param_nombre,$param_profesor,$param_codigo);
            
               $param_nombre = $nombre;
               $param_profesor = $profesor;
               $param_codigo = $codigo;
               

             
            
                if(mysqli_stmt_execute($stmt)){
                header("location: ../view/agregartarea.php");
                echo "Tarea registrada";    
    
            }
            }else {
                echo "Algo salio mal, intentalo despues";
            }
        
    
        mysqli_close($link);

    } 
?> 
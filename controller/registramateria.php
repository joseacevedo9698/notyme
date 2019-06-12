<?php
require_once "conexion.php";

$nombre = $profesor = $codigo ="";



if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    
$sql = "SELECT * FROM materia WHERE nombre = ?";
     
        
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
            
    


      $sql = "SELECT codigo FROM materia WHERE nombre = ?";
          
        
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
    
        $sql = "SELECT codigo FROM materia WHERE nombre = ?";
          
        
    if($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, "s", $param_codigo);
        session_start();
        $row = $_SESSION['persona'] ;
        var_dump($row);
        $param_codigo = trim($row['codigo']);
        
        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_store_result($stmt);
        
                $codigo = trim($row['codigo']);
            }
            }else {
                echo "Ups! Algo Salio mal, intentalo mas tarde";
                }
            

     
   
        $sql = "INSERT INTO materia (nombre, profesor, Persona_codigo) VALUES (?,?,?)";
        
        if ($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param ($stmt, "sss",  $param_nombre,$param_profesor,$param_codigo);
            
               $param_nombre = $nombre;
               $param_profesor = $profesor;
               $param_codigo = $codigo;

             
            
                if(mysqli_stmt_execute($stmt)){
                header("location: ../controller/enviar2.php");
                echo "materia registrada";    
    
            }
            }else {
                echo "Algo salio mal, intentalo despues";
            }
        
    
        mysqli_close($link);

    } 
?> 
<?php

require_once "conexion.php";

$username = $password = $correo = $nombre = $apellido ="";

$username_err = $password_err = $correo_err = $nombre_err =  $apellido_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    if (empty(trim($_POST["username"]))){
        $username_err = "Por Favor Ingrese un Nombre de Usuario"; 
    }else{
        
        $sql = "SELECT * FROM persona WHERE user = ?";
        
    if($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, "s", $param_username);
        
        $param_username = trim($_POST["username"]);
        
        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_store_result($stmt);
        
                $username = trim($_POST["username"]);
            }
            }else {
                echo "Ups! Algo Salio mal, intentalo mas tarde";
                }
            }
    
    
    if (empty(trim($_POST["correo"]))){
        $correo_err = "Por Favor Ingrese un Correo"; 
    }else{
        
        $sql = "SELECT codigo FROM persona WHERE nombre = ?";
        
    if($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, "s", $param_correo);
        
        $param_correo = trim($_POST["correo"]);
        
        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_store_result($stmt);
        
                $correo = trim($_POST["correo"]);
            }
            }else {
                echo "Ups! Algo Salio mal, intentalo mas tarde";
                }
            }
            
    
      if (empty(trim($_POST["nombre"]))){
        $nombre_err = "Por Favor Ingrese un Nombre"; 
    }
    else{
        
        $sql = "SELECT codigo FROM persona WHERE nombre = ?";
        
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
            }
            
    
      if (empty(trim($_POST["apellido"]))){
        $apellido_err = "Por Favor Ingrese un apellido"; 
    }else{
        
        $sql = "SELECT codigo FROM persona WHERE nombre = ?";
        
    if($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, "s", $param_apellido);
        
        $param_apellido = trim($_POST["apellido"]);
        
        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_store_result($stmt);
        
                $apellido = trim($_POST["apellido"]);
            }
            }else {
                echo "Ups! Algo Salio mal, intentalo mas tarde";
                }
            }
            
              

    if(empty(trim($_POST["password"]))){
        $password_err = "Por favor, ingrese su contraseña";
    }elseif(strlen(trim($_POST["password"])) <4){
        
         $password_err = "LA contraseña debe tener al menos 4 caracteres";
        
    }else{
        $password = trim($_POST["password"]);
    
     
      if(empty($username_err) && empty ($contraseña_err)){
        $sql = "INSERT INTO persona (user, password, correo, nombre, apellido) VALUES (?,?,?,?,?)";
        
        if ($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param ($stmt, "sssss", $param_username, $param_password,$param_correo, $param_nombre,$param_apellido);
            
            $param_username = $username;
            $param_password = $password;
            $param_correo = $correo; 
            $param_nombre = $nombre; 
            $param_apellido = $apellido;
             
            
                if(mysqli_stmt_execute($stmt)){
                header("location: ../index.php");
            }
            }else {
                echo "Algo salio mal, intentalo despues";
            }
        }
    }

        
        
    
        
    

    mysqli_close($link);

    }
?> 
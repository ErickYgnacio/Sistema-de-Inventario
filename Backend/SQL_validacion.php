<?php        
    session_start();
    include('conexion.php');
    $validacion = 1;    

    // CONSULTA SI HAY USUARIO
    //$usuarioQuery = "SELECT * FROM USUARIO WHERE";
    
    if(isset($_POST['usuario']) AND isset($_POST['contrasenia'])){
        $usuario = $_POST['usuario'];
        $password = $_POST['contrasenia'];        

        if($usuario == "admin" and $password=="12345"){
            include('variablesSesion.php');
            header("location:index.php");
        }else{
            $validacion =0;
        }
    }

    
    
?>
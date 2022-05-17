<?php        
    session_start();
    include('conexion.php'); 
    
    if(isset($_POST['usuario']) AND isset($_POST['contrasenia'])){

        // CONSULTA SI HAY USUARIO
        $queryUsuario = "SELECT * FROM USUARIO WHERE Us_Username = '$_POST[usuario]' and Us_Contrasenia='$_POST[contrasenia]'";
        $resultadoUsuario = sqlsrv_query($conn,$queryUsuario);
        
        if( sqlsrv_has_rows($resultadoUsuario)){ // SI EXISTE UNA FILA
            include('variablesSesion.php');
            header('location:index.php');
        }else{
            $credencialesIncorrectas = 0; // PARA MOSTRAR UN MENSAJE DE CREDENCIAL INCORRECTA EN EL ARCHIVO login2.php
        }
    }

    
    
?>
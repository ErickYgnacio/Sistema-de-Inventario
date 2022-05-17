<?php
    // DEVUELVE LOS CAMPOS DE LA TABLA USUARIO
    $rowUsuario = sqlsrv_fetch_array($resultadoUsuario);

    $_SESSION['validado'] = 1; // USUARIO VALIDADO
    $_SESSION['username'] = $rowUsuario['Us_Username'];
?>
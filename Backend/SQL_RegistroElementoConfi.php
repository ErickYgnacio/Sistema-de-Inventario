<?php
    include('conexion.php');

    // GUARDA EN LA VARIABLE $valores TODO LO QUE EL USUARIO DIGITA EN LOS INPUTS
    $valores = "";
    foreach ($_POST as $clave => $valor) {
        if ($clave != 'tipoelemento' and $clave!='atributos') {
            $valores = $valores . $valor . ",";
        }
    }
    $valores = substr($valores,0,-1); // ELIMINA LA ULTIMA COMA

    $queryElementoConfi = "INSERT INTO ELEMENTO_CONFI(ElementoConfi_TipoId,)";


    echo $queryElementoConfi="INSERT INTO ELEMENTO_CONFI($_POST[atributos]) VALUES($valores)";
?>
<?php
    include('conexion.php');

    // QUERY PARA EL INSERT EN LA TABLA ELEMENTO_CONFI
    $queryElementoConfi = "INSERT INTO ELEMENTO_CONFI(ElementoConfi_TipoId,ElementoConfi_Descripcion,ElementoConfi_CodigoPatrimonial) VALUES()";
    $resultadoElementoConfi = sqlsrv_query($conn,$queryElementoConfi);

    // OBTENER EL ULTIMO ELEMENTO DE CONFIGURACION AGREGADO
    $queryUltimoElemento = "SELECT MAX(ElementoConfi_id) AS ultimo_id FROM ELEMENTO_CONFI";
    $resultadoUltimoElemento = sqlsrv_query($conn,$queryUltimoElemento);
    $rowUltimo = sqlsrv_fetch_array($resultadoUltimoElemento);
    
    $ultimo = $rowUltimo['ultimo_id']; // VARIABLE DONDE SE AGREGA EL ULTIMO ELEMENTO DE CONFIGURACION AGREGADO
    echo ("El ultimo trabajador agregado es: " . $ultimoId);

    
    $valores = ""; // GUARDA EN LA VARIABLE $valores TODO LO QUE EL USUARIO DIGITA EN LOS INPUTS
    $atributos = ""; // GUARDA EN LA VARIABLE $atributos LOS CAMPOS QUE SE REGISTRARAN EN LA TABLA ATRIBUTOS

    foreach ($_POST as $clave => $valor) {
        if ($clave != 'tipoelemento' and $clave!='codpatrimonial' and $clave!='descripcion') {
            $atributos = $atributos.$clave.",";
            $valores = $valores . $valor . ",";
        }
    }
    $valores = substr($valores,0,-1); // ELIMINA LA ULTIMA COMA
    $atributos = substr($atributos,0,-1); // ELIMINA LA ULTIMA COMA

    $queryAtributo="INSERT INTO ATRIBUTOS($atributos) VALUES($valores)";


    echo $queryAtributo;
?>
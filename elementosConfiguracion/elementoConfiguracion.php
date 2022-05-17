<?php
include('Backend/conexion.php');

// TRAE EL NOMBRE DEL TIPO AL QUE PERTENECE UN ELEMENTO DE CONFIGURACION

$queryNombreTipo = "SELECT Tipo_Nombre FROM TIPO WHERE Tipo_Id=$_GET[tipoelem]";
$resultadoNombreTipo = sqlsrv_query($conn,$queryNombreTipo);
$rowNombreTipo = sqlsrv_fetch_array($resultadoNombreTipo);

// TRAE LOS ATRIBUTOS DE LA BASE DE DATOS QUE NECESITA CADA DE ELEMENTO DE CONFIGURACION

$queryAtributos = "SELECT TipoConfi_Atributo FROM TIPO_CONFI WHERE TipoConfi_TipoId=$_GET[tipoelem]";
$resultadoAtributos = sqlsrv_query($conn, $queryAtributos);

$inputs = "";

while ($rowAtributos = sqlsrv_fetch_array($resultadoAtributos)) {
    
    // DIBUJA EN LA PAGINA WEB LOS CAMPOS QUE NECESITAN SER LLENADOS PARA UN ELEMENTO DE CONFIGURACION
    $inputs = $inputs.'<div class="col-sm-2">
                    <!-- text input -->
                    <div class="form-group">
                        <label for="' . $rowAtributos['TipoConfi_Atributo'] . '">' . $rowAtributos['TipoConfi_Atributo'] . '</label>
                        <input type="text" class="form-control" id="' . $rowAtributos['TipoConfi_Atributo'] . '" name="' . $rowAtributos['TipoConfi_Atributo'] . '" placeholder="' . $rowAtributos['TipoConfi_Atributo'] . '" autocomplete="off">
                    </div>
                </div>';
}
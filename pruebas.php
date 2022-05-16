<?php
include('Backend/conexion.php');

$queryTipoConfig = "SELECT TipoConfi_Atributo FROM TIPO_CONFI WHERE TipoConfi_TipoId=$_POST[tipoelemento]";
$resultadoTipoConfig = sqlsrv_query($conn, $queryTipoConfig);

$atributos = "";

while ($rowTipoConfig = sqlsrv_fetch_array($resultadoTipoConfig)) {
    $atributos = $atributos . $rowTipoConfig['TipoConfi_Atributo'] . ",";
?>
    <div class="col-sm-2">
        <!-- text input -->
        <div class="form-group">
            <label for="<?php echo $rowTipoConfig['TipoConfi_Atributo']; ?>"><?php echo $rowTipoConfig['TipoConfi_Atributo']; ?></label>
            <input type="text" class="form-control" id="<?php echo $rowTipoConfig['TipoConfi_Atributo']; ?>" name="<?php echo $rowTipoConfig['TipoConfi_Atributo']; ?>" placeholder="<?php echo $rowTipoConfig['TipoConfi_Atributo']; ?>" autocomplete="off">
        </div>
    </div>
<?php
}
$valores="";
foreach($_POST as $clave => $valor){
    if($clave != 'tipoelemento'){
        $valores = $valores.$valor.",";
    }
}

$queryGeneral = "INSERT INTO ELEMENTO_CONFI($atributos) VALUES($valores)";
echo $queryGeneral;
?>
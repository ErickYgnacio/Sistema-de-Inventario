<?php 

$serverName = "DESKTOP-BFF3DKA\MSSQLSERVER01"; 
$connectionInfo = array("Database"=>"InventarioMuni");
$conn = sqlsrv_connect($serverName, $connectionInfo);

if( $conn ) {
    //echo "Se establecio la conexion a la base de datos VACUNAS";
    //die();
}else{
    header("location:../errorPage/500.php");
}
?>


<?php
$servername = "www.evelyn-edgar.com";
$database = "evelyned_boda";
$username = "evelyned_admin";
$password = "VMcR5rehziEUFLy";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM invitados";
$resultado = mysqli_query($conn, $sql);
if (!$resultado) {
    echo 'Error de BD, no se pudo consultar la base de datos';
    exit;
}else{
    $datos = mysqli_fetch_all($resultado);
    print_r(json_encode($datos));
}


mysqli_close($conn);

?>
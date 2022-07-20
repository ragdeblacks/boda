<?php
$servername = "localhost";
$database = "boda";
$username = "admin";
$password = "Edsa3372";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_GET['id'];
$confirma = $_GET['confirma'];
$adultos_reales = $_GET['adultos'];
$ninos_reales = $_GET['ninos'];
$update = '';
if($confirma == '1'){
    $update = "UPDATE `INVITADOS` SET 
        `asistencia` = $confirma, 
        `adultos_reales` = $adultos_reales, 
        `niños_reales` = $ninos_reales 
    WHERE (`id` = $id)";
}else{
    $update = "UPDATE `INVITADOS` SET 
        `asistencia` = $confirma
    WHERE (`id` = $id)";
}
if (mysqli_query($conn, $update) === TRUE) {
    echo true;
}else {
    echo "Error updating record: " . $conn->error;
  }
  


mysqli_close($conn);

?>
<?php
print_r($_POST);

$nombre_alimentacion = $_POST['nombre_alimentacion'];
$id_alimentacion = $_POST['id_alimentacion'];

include('../connection/connection.php');

$consulta = " CALL p_actualizarAlimentacion('$nombre_alimentacion', '$id_alimentacion')";

//Solcitudes WHERE afectan tanto un lado como el otro. Para pensar...
//$consulta = "UPDATE alimentacion SET tipo_alimento = $nombre_alimentacion WHERE id_alimentacion = $id_alimentacion";


$query = mysqli_query($conn,$consulta);

header('Location: ../alimentacion.php');
?>
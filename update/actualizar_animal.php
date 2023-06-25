<?php
print_r($_POST);

$nombre_animal = $_POST['nombre_animal'];
$descripcion_animal = $_POST['descripcion_animal'];
$id_clasificacion = $_POST['id_clasificacion'];
$id_alimentacion = $_POST['id_alimentacion'];
$id_habitat = $_POST['id_habitat'];
$id_animal = $_POST['id_animal'];

include('../connection/connection.php');

$consulta = " CALL p_ActualizarAnimal('$nombre_animal', '$descripcion_animal', '$id_clasificacion', '$id_alimentacion', '$id_habitat', '$id_animal')";

//$consulta = "UPDATE animal SET nombre_animal = $nombre_animal, descripcion_animal = $descripcion_animal, id_clasificacion_id = $id_clasificacion, id_alimentacion_id = $id_alimentacion, id_habitat_id= $id_habitat WHERE id_animal = $id_animal";
// $consulta = "UPDATE animal SET nombre_animal = ?, descripcion_animal = ?, id_clasificacion_id = ?, id_alimentacion_id = ?, id_habitat_id = ? WHERE id_animal = ?";
// $stmt = $conn->prepare($consulta);
// $stmt->bind_param("ssiiii", $nombre_animal, $descripcion_animal, $id_clasificacion, $id_alimentacion, $id_habitat, $id_animal);
// $stmt->execute();
// $stmt->close();


$query = mysqli_query($conn,$consulta);

header('Location: ../animal.php');
?>

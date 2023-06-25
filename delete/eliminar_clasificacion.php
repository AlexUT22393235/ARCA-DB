<?php
    //print_r($_GET);

    $id_clasificacion = $_GET['id_clasificacion'];

    include('../connection/connection.php');

    $consulta = "CALL p_EliminarClasificacion($id_clasificacion)";

    //$consulta = "DELETE FROM clasificacion WHERE id_clasificacion = $id_clasificacion";


    $query = mysqli_query($conn,$consulta);

    header('Location: ../clasificacion.php');
?>
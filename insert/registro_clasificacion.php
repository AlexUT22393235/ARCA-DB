<?php

    //print_r($_POST);

    $nombre_clasificacion = $_POST['nombre_clasificacion'];

    include('../connection/connection.php');

    $consulta = " CALL p_RegistroClasificacion('$nombre_clasificacion')";

    //$consulta = "INSERT INTO clasificacion (nombre_clasificacion) VALUES ('$nombre_clasificacion')";


    $query = mysqli_query($conn, $consulta);

    header('Location: ../clasificacion.php');

?>
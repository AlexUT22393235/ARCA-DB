<?php

    //print_r($_POST);

    $nombre_alimentacion = $_POST['nombre_alimentacion'];

    include('../connection/connection.php');

    $consulta = " CALL p_registroAlimentacion('$nombre_alimentacion')";

    //$consulta = "INSERT INTO alimentacion (tipo_alimento) VALUES ('$nombre_alimentacion')";


    $query = mysqli_query($conn, $consulta);

    header('Location: ../alimentacion.php');

?>
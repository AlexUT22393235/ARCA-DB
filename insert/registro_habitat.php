<?php

    //print_r($_POST);

    $nombre_habitat = $_POST['nombre_habitat'];

    include('../connection/connection.php');

    $consulta = " CALL p_RegistroHabitat('$nombre_habitat')";

    //$consulta = "INSERT INTO habitat (nombre_habitat) VALUES ('$nombre_habitat')";


    $query = mysqli_query($conn, $consulta);

    header('Location: ../habitat.php');

?>
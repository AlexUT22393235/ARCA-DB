<?php
    //print_r($_GET);

    $id_habitat = $_GET['id_habitat'];

    include('../connection/connection.php');

    $consulta = "CALL p_eliminarHabitat($id_habitat)";

    //$consulta = "DELETE FROM habitat WHERE id_habitat = $id_habitat";


    $query = mysqli_query($conn,$consulta);

    header('Location: ../habitat.php');
?>
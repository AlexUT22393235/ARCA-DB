<?php
    //print_r($_GET);

    $id_animal = $_GET['id_animal'];

    include('../connection/connection.php');

    $consulta = "CALL p_ElminarAnimal('$id_animal')";

    //$consulta = "DELETE FROM animal WHERE id_animal = $id_animal";


    $query = mysqli_query($conn, $consulta);

    header('Location: ../animal.php');
?>
<!doctype html>
<html lang="en">

<head>
    <title>Actualizar Animal</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>


        
        <?php
        // print_r($_POST);

        $id_animal = $_GET['id_animal'];

        include('../connection/connection.php');


        $consulta2 ="call p_ObtenerAnimal ('$id_animal')";
        // $consulta2 = "CALL p_ActualizarAnimal()";

        // ASC Y DESC Pueden ser tu cielo o tu infierno


        //Datos a tomar en cuenta: Cuando haya errores relacionados con 0, revisar los parámetros asignados.

        // $consulta2 = "SELECT animal.id_animal,animal.descripcion_animal AS Descripcion, 
        // animal.nombre_animal,animal.id_clasificacion_id, clasificacion.nombre_clasificacion AS Clasificacion,
        // animal.id_alimentacion_id, alimentacion.tipo_alimento AS Alimentacion,
        // animal.id_habitat_id, habitat.nombre_habitat AS Habitat
        // FROM animal
        // INNER JOIN alimentacion ON  animal.id_alimentacion_id = alimentacion.id_alimentacion  
        // INNER JOIN clasificacion ON animal.id_clasificacion_id = clasificacion.id_clasificacion 
        // INNER JOIN habitat ON animal.id_habitat_id = habitat.id_habitat 
        // WHERE  id_animal = '$id_animal'";



        $query2 = mysqli_query($conn, $consulta2);

        // $fila = mysqli_fetch_array($query)
        $fila2 = mysqli_fetch_array($query2);

        ?>


        <!-- ========== Start formulario ========== -->
        <form action="actualizar_animal.php" method="post">
            <div class="mb-3">
                <label class="form-label">Ingresa un animal</label>
                <input name="nombre_animal" value="<?php echo $fila2['nombre_animal']?>" type="text" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Descripcion del animal</label>
                <input name="descripcion_animal"  type="text" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Clasificacion</label>
                <select name="id_clasificacion" class="form-select" aria-label="Default select example">
                    <?php
                    include('../connection/connection.php');
                    
                    $consulta =" CALL arca_db.p_TablaClasificacion()";


                    $query = mysqli_query($conn, $consulta);

                    while ($fila = mysqli_fetch_array($query)) {
                        ?>
                        <option value="<?php echo $fila['id_clasificacion']; ?>"><?php echo $fila['nombre_clasificacion']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Alimentacion</label>
                <select name="id_alimentacion" class="form-select" aria-label="Default select example">
                    <?php
                    include('../connection/connection.php');
                    
                    $consulta =" CALL arca_db.p_TablaAlimentacion()";


                    $query = mysqli_query($conn, $consulta);

                    while ($fila = mysqli_fetch_array($query)) {
                        ?>
                        <option value="<?php echo $fila['id_alimentacion']; ?>"><?php echo $fila['tipo_alimento']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Habitat</label>
                <select name="id_habitat" class="form-select" aria-label="Default select example">
                    <?php
                    include('../connection/connection.php');
                    
                    $consulta =" CALL arca_db.p_TablaHabitat()";


                    $query = mysqli_query($conn, $consulta);

                    while ($fila = mysqli_fetch_array($query)) {
                        ?>
                        <option value="<?php echo $fila['id_habitat']; ?>"><?php echo $fila['nombre_habitat']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <input type="hidden" name="id_animal" value="<?php echo$fila2['id_animal']?>">
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>

        <!-- ========== End formulario ========== -->

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>
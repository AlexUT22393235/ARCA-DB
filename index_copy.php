<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>

    <?php
        include('connection/connection.php');

        // Realizar la consulta para obtener la cantidad de animales
        $sql = "SELECT COUNT(*) AS cantidadAnimales FROM animal";
        $resultado = mysqli_query($conn, $sql);

        if ($resultado) {
            // Obtener el resultado de la consulta
            $fila = mysqli_fetch_assoc($resultado);
            $cantidadAnimales = $fila['cantidadAnimales'];
        } else {
            $cantidadAnimales = 0;
        }
        /////////////////////////////////////////////////////7

        $sql = "SELECT COUNT(*) AS cantidadClasificacion FROM clasificacion";
        $resultado = mysqli_query($conn, $sql);

        if ($resultado) {
            // Obtener el resultado de la consulta
            $fila = mysqli_fetch_assoc($resultado);
            $cantidadClasificacion = $fila['cantidadClasificacion'];
        } else {
            $cantidadClasificacion = 0;
        }
        ///////////////////////////////////////////////////////////7777
        
        $sql = "SELECT COUNT(*) AS cantidadAlimentacion FROM alimentacion";
        $resultado = mysqli_query($conn, $sql);

        if ($resultado) {
            // Obtener el resultado de la consulta
            $fila = mysqli_fetch_assoc($resultado);
            $cantidadAlimentacion = $fila['cantidadAlimentacion'];
        } else {
            $cantidadAlimentacion = 0;
        }

        $sql = "SELECT COUNT(*) AS cantidadHabitat FROM habitat";
        $resultado = mysqli_query($conn, $sql);

        if ($resultado) {
            // Obtener el resultado de la consulta
            $fila = mysqli_fetch_assoc($resultado);
            $cantidadHabitat = $fila['cantidadHabitat'];
        } else {
            $cantidadHabitat = 0;
        }


        // Cerrar la conexión a la base de datos
        mysqli_close($conn);
      ?>

<!-- CREATE DEFINER=`root`@`localhost` PROCEDURE `p_contadorAnimales`()
BEGIN
	SELECT COUNT(*) AS cantidadAnimales FROM animal;
END -->

<!-- CREATE DEFINER=`root`@`localhost` PROCEDURE `p_contadoHabitat`()
BEGIN
	SELECT COUNT(*) AS cantidadHabitat FROM habitat;
END -->

<!-- CREATE DEFINER=`root`@`localhost` PROCEDURE `p_contadorAlimentacion`()
BEGIN
	SELECT COUNT(*) AS cantidadAlimentacion FROM alimentacion;
END -->



    <div class="container">
      <div class="row flex-row">
        <div class="col-md-6">
          <a href="animal.php">
            <div class="card d-flex h-100">
              <img src="img\animal1.gif" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">ANIMALES</h5>
                <p class="card-text" ><?php echo $cantidadAnimales; ?></p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6">
          <a href="alimentacion.php">
            <div class="card d-flex h-100">
              <img src="img\animalescomiendo.gif" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">ALIMENTACION</h5>
                <p class="card-text" ><?php echo $cantidadAlimentacion; ?></p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6">
          <a href="habitat.php">
            <div class="card d-flex h-100">
              <img src="img\animal3.gif" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"> HABITAT</h5>
                <p class="card-text" ><?php echo $cantidadHabitat; ?></p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6">
          <a href="clasificacion.php">
            <div class="card d-flex h-100">
              <img src="img\clasificacion.gif" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">CLASIFICACION</h5>
                <p class="card-text" ><?php echo  $cantidadClasificacion; ?></p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
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
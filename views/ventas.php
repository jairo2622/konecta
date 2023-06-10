<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/index.css">
  <title>Document</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary navbar2">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="../assets/img/logo.png" alt="" class="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ventas.php">Ventas</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Consulta
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#stockModal" onclick="loadHighestStock()">Mayor Stock</a></li>
                <li><a class="dropdown-item" href="#">Producto mas vendidio</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <section>
      <!-- modal stock -->
      <div class="modal fade" id="stockModal" tabindex="-1" aria-labelledby="exampleModalLabel aria-hidden=" true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Stock más alto</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p id="highestStock"></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>
      <!-- modal stock -->
    </section>

    <section>
      <form action="../models/compras.php" method="post" class="formulario-ventas">
        <?php
        include("../conexion/conectar.php");
        $conexion = conectar();

        $consulta = mysqli_query($conexion, "SELECT id, nombre FROM inventario");

        echo "<div class='form-group'>";
        echo "<label for='producto'>Selecciona un Producto</label>";
        echo "<select class='form-input form-control' id='id' name='id' type='text' placeholder='name@example.com' required>>";

        echo "<option type='hidden'>Seleccione un producto</option>";
        while ($fila = mysqli_fetch_assoc($consulta)) {
          echo "<option value='" . $fila['id'] . "'>" . $fila['nombre'] . "</option>";
        }

        echo "</select>";
        echo "<div>";

        mysqli_close($conexion);
        ?>

        <div class="form-floating">
          <input class="form-input form-control" id="stock" name="stock" type="number" placeholder="name@example.com" required>
          <label for="stock">Cantidad</label>
        </div>

        <input class="btn btn-comprar" name="comprar" type="submit" value="comprar">
      </form>
    </section>






  </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  function loadHighestStock() {
    $.ajax({
      url: "../models/stock.php",
      type: "GET",
      dataType: "text",
      success: function(data) {
        document.getElementById("highestStock").textContent = data;
      },
      error: function(jqXHR, textStatus, errorThrown) {
        console.log("Error al obtener el stock");
      }
    });
  }
</script>

</html>
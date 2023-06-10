<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
              <a class="nav-link active" aria-current="page" href="#">Inicio</a>
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
      <button type="button" class="btn btn-accion" data-bs-toggle="modal" data-bs-target="#Registrar">
        Registrar
      </button>

      <!-- modal de registro -->
      <div class="modal fade" id="Registrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Datos del Producto</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div>
                <form id="Registro" action="../models/registrar.php" method="post">
                  <div class="form-floating">
                    <input class="form-input form-control" id="producto" name="nombre" type="text" placeholder="name@example.com" required>
                    <label for="producto">Nombre del Producto</label>
                  </div>

                  <div class="form-floating">
                    <input class="form-input form-control" id="referencia" name="referencia" type="text" placeholder="name@example.com" required>
                    <label for="referencia">Referencia</label>
                  </div>

                  <div class="form-floating">
                    <input class="form-input form-control" id="precio" name="precio" type="number" placeholder="name@example.com" required>
                    <label for="precio">Precio Unidad</label>
                  </div>

                  <div class="form-floating">
                    <input class="form-input form-control" id="peso" name="peso" type="text" placeholder="name@example.com" required>
                    <label for="peso">Peso</label>
                  </div>

                  <div class="form-floating">
                    <input class="form-input form-control" id="categoria" name="categoria" type="text" placeholder="name@example.com" required>
                    <label for="categoria">Categoria</label>
                  </div>

                  <div class="form-floating">
                    <input class="form-input form-control" id="stock" name="stock" type="number" placeholder="name@example.com" required>
                    <label for="stock">Stock</label>
                  </div>

              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <input class="btn btn-enviar" name="Enviar" type="submit">
            </div>
            </form>
          </div>
        </div>
      </div>
      <!-- modal de registro -->

      <!-- modal de actualizacion -->
      <div class="modal fade" id="Actualizar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Actualizar Datos del Producto</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div>
                <form id="Registro" action="../models/actualizar.php" method="post">

                  <input type="hidden" id="modal-id" name="id">

                  <div class="form-floating">
                    <input class="form-input form-control" id="modal-nombre" name="nombre" type="text" placeholder="name@example.com" required>
                    <label for="producto">Nombre del Producto</label>
                  </div>

                  <div class="form-floating">
                    <input class="form-input form-control" id="modal-referencia" name="referencia" type="text" placeholder="name@example.com" required>
                    <label for="referencia">Referencia</label>
                  </div>

                  <div class="form-floating">
                    <input class="form-input form-control" id="modal-precio" name="precio" type="number" placeholder="name@example.com" required>
                    <label for="precio">Precio Unidad</label>
                  </div>

                  <div class="form-floating">
                    <input class="form-input form-control" id="modal-peso" name="peso" type="text" placeholder="name@example.com" required>
                    <label for="peso">Peso</label>
                  </div>

                  <div class="form-floating">
                    <input class="form-input form-control" id="modal-categoria" name="categoria" type="text" placeholder="name@example.com" required>
                    <label for="categoria">Categoria</label>
                  </div>

                  <div class="form-floating">
                    <input class="form-input form-control" id="modal-stock" name="stock" type="number" placeholder="name@example.com" required>
                    <label for="stock">Stock</label>
                  </div>

                  <input type="hidden" id="modal-fecha">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <input class="btn btn-enviar" name="Enviar" type="submit">
            </div>
            </form>
          </div>
        </div>
      </div>
      <!-- modal de actualizacion -->

      <!-- modal stock -->
      <div class="modal fade" id="stockModal" tabindex="-1" aria-labelledby="exampleModalLabel aria-hidden="true">
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
      <?php
      include("../conexion/conectar.php");
      $conexion = conectar();

      $consulta = mysqli_query($conexion, "SELECT*FROM inventario") or die("Error en la consulta");

      echo "<table class='table table-inventario'>";

      echo "<thead>";
      echo "<tr>";
      echo "<th>ID</th>";
      echo "<th>Producto</th>";
      echo "<th>Referencia</th>";
      echo "<th>Precio Uni.</th>";
      echo "<th>Peso</th>";
      echo "<th>Categoria</th>";
      echo "<th>Stock</th>";
      echo "<th>Fecha</th>";
      echo "<th>Actualizar</th>";
      echo "<th>Eliminar</th>";
      echo "</tr>";
      echo "</thead>";

      echo "<tbody class='table-group-divider'>";
      $id = 1;
      while ($traer = mysqli_fetch_array($consulta)) {
        echo "<tr>";
        echo "<td>" . $traer["id"];
        echo "<td>" . $traer["nombre"];
        echo "<td>" . $traer["referencia"];
        echo "<td>" . $traer["precio"];
        echo "<td>" . $traer["peso"];
        echo "<td>" . $traer["categoria"];
        echo "<td>" . $traer["stock"];
        echo "<td>" . $traer["fecha"];
        echo "<td> <button class='btn btn-eliminar' data-id='" . $traer["id"] . "'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
        <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
      </svg></button>";

        echo "<td><button class='btn btn-actualizar' data-bs-toggle='modal' data-bs-target='#Actualizar'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
        <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
        <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
      </svg></button>";
        echo "</tr>";

        if ($traer["stock"] < 0) {
          echo '<script>alert("Alerta!!! No hay Stock de ' . $traer["nombre"] . '")</script>';
        }
      }

      echo "</tbody>";
      echo "</table>";
      ?>
    </section>
  </main>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  $(document).ready(function() {
    $('.btn-eliminar').click(function() {
      var id = $(this).data('id');
      var fila = $(this).closest('tr');

      $.ajax({
        url: '../models/eliminar.php',
        type: 'POST',
        data: {
          id: id
        },
        success: function(response) {
          fila.remove();
        },
        error: function(xhr, status, error) {
          console.error(error);
        }
      });
    });
  });


  $(document).ready(function() {
    $('.btn-actualizar').click(function() {
      var fila = $(this).closest('tr');

      var id = fila.find('td:eq(0)').text();
      var nombre = fila.find('td:eq(1)').text();
      var referencia = fila.find('td:eq(2)').text();
      var precio = fila.find('td:eq(3)').text();
      var peso = fila.find('td:eq(4)').text();
      var categoria = fila.find('td:eq(5)').text();
      var stock = fila.find('td:eq(6)').text();
      var fecha = fila.find('td:eq(7)').text();

      $('#modal-id').val(id);
      $('#modal-nombre').val(nombre);
      $('#modal-referencia').val(referencia);
      $('#modal-precio').val(precio);
      $('#modal-peso').val(peso);
      $('#modal-categoria').val(categoria);
      $('#modal-stock').val(stock);
      $('#modal-fecha').val(fecha);
    });
  });
</script>


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
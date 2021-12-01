<!DOCTYPE html>
<?php
  session_start();
?>
<html lang="es" dir="ltr">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../imagenes/ing_sistemas.jpg">
    <meta charset="utf-8">
    <title>LITECOM | Crear Producto</title>
  </head>
  <body>
    <?php include("../paginas/menu.php"); ?>
    <br>
    <div class="container col-8">
      <h3 style="text-align:center" class="text-info">CREAR PRODUCTO</h3>
      <form class="" action="../../controladores/registrarProducto.php" method="post">
      <div class="card">
        <div class="card-body">
            <div class="mb-3" style="text-align:left">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3" style="text-align:left">
              <label for="nombre" class="form-label">Descripción</label>
              <input type="text" class="form-control" id="descripcion" name="descripcion" required>
            </div>
            <div class="mb-3" style="text-align:left">
              <label for="nombre" class="form-label">Precio de Venta</label>
              <input type="number" class="form-control" id="precio_venta" name="precio_venta" required>
            </div>
            <div class="mb-3" style="text-align:left">
              <a style="color:red" align="left">* </a><label for="asignatura" class="form-label">Categoría</label>
              <select class="custom-select form-control" aria-label="Default select example" id="categoria" name="categoria" required>
                <option selected>Seleccione una asignatura</option>
                <option value="1">CALZADO DAMA</option>
                <option value="2">CALZADO CABALLERO</option>
                <option value="3">CALZADO NIÑO</option>
              </select>
            </div>
        </div>
        <div class="card-footer" align="center">
          <button type="button" class="btn btn-danger">Cancelar</button>
          <button type="submit" class="btn btn-success">Guardar</button>
        </div>
      </div>
      </form>
    </div>
    <?php include("../paginas/footer.php"); ?>
  </body>
</html>

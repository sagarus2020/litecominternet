<!DOCTYPE html>
<?php
  session_start();
  if(!empty($_SESSION['nombre'])){
    header("Location:../../index.php");
  }
?>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../imagenes/ing_sistemas.jpg">
    <title>LITECOM | Iniciar Sesión</title>
  </head>
  <body>
    <?php include("../paginas/menu.php"); ?>
    <br>

    <div class="container" align="center">
      <?php
      if(!empty($_SESSION["mensaje"])){
        echo"<div class='alert alert-success'>".$_SESSION["mensaje"]."</div><br>";
        $_SESSION["mensaje"]="";
      }
      if(!empty($_SESSION["mensajeError"])){
        echo"<div class='alert alert-danger'>".$_SESSION["mensajeError"]."</div><br>";
        $_SESSION["mensajeError"]="";
      }
       ?>
      <h3 style="text-align:center" class="text-info">INICIAR SESIÓN</h3>
      <div class=" col-8 card">
        <div class="card-body">
          <form method="post" action="../../controladores/login.php">
            <div class="mb-3" style="text-align:left">
              <label for="email" class="form-label">Dirección de Correo</label>
              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3" style="text-align:left">
              <label for="clave" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="clave" name="clave">
            </div>
            <div class="text-right" style="text-align:right">
              <a href="#">Recuperar contraseña</a>
              <br>
              <a href="#">Registrarse</a>
            </div>
            <button type="submit" class="btn btn-primary">Iniciar</button>
          </form>
        </div>
      </div>
    </div>
    <?php include("../paginas/footer.php"); ?>
  </body>
</html>

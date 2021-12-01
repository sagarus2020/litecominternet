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
    <title>LITECOM | Lista de Productos</title>
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
    </div>
    <?php include("../paginas/footer.php"); ?>
  </body>
</html>

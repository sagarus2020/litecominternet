<!DOCTYPE html>
<?php
  session_start();
?>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../imagenes/ing_sistemas.jpg">
    <title>LITECOM | Lista de Categorias</title>
  </head>
  <body>
    <?php include("../paginas/menu.php"); ?>
    <br>
    <div class="container">
      <h3 style="text-align:center" class="text-info">LISTA DE CATEGORIAS</h3>
      <div class="row row-cols-1 row-cols-md-4 g-4">
        <?php

        require ("../../controladores/categoriaControl.php");
        $control= new CategoriaControl();
        $categorias=$control->getAll();
        $i=1;
        foreach($categorias as $categoria){
          ?>
          <div class="col">
            <div class="card h-100 text-dark <?php if($i%2==0)echo("bg-light"); else echo("bg-info"); ?>">
              <div class="card-body">
                <h5 class="card-title"><?php echo($categoria->nombre); ?></h5>
                <p class="card-text"><?php echo($categoria->descripcion); ?>.</p>
                  <div class="btn <?php if($i%2==0)echo("btn-info"); else echo("btn-light"); ?>">VER PRODUCTOS</div>
              </div>
            </div>
          </div>
        <?php
        $i++;
      } ?>
        </div>
    </div>
    <?php include("../paginas/footer.php"); ?>
  </body>
</html>

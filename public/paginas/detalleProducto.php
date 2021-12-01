<!DOCTYPE html>
<?php
  session_start();
?>
<html lang="es" dir="ltr">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript">
      var myCarousel = document.querySelector('#myCarousel')
      var carousel = new bootstrap.Carousel(myCarousel, {
      interval: 200,
      wrap: false
      })
    </script>
    <link rel="shortcut icon" href="../imagenes/ing_sistemas.jpg">
    <meta charset="utf-8">
    <title>LITECOM | Detalle de Producto</title>
  </head>
  <body>
    <?php include("../paginas/menu.php"); ?>
    <br>
    <div class="container">
      <h3 style="text-align:center" class="text-info">PRODUCTO 1</h3>
      <div class="card">
        <div class="card-header">
          <div class="">
            <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="../imagenes/img1.svg" class="d-block w-100" alt="..." height="200px">
                </div>
                <div class="carousel-item">
                  <img src="../imagenes/img2.svg" class="d-block w-100" alt="..." height="200px">
                </div>
                <div class="carousel-item">
                  <img src="../imagenes/img3.svg" class="d-block w-100" alt="..." height="200px">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
        <div class="card-body">
          <h5>DESCRIPCIÓN</h5>
          <p>Lorem  ipsum  dolor sit  amet,  consectetur adipisicing  elit, sed
            do eiusmod tempor incididunt  ut labore  et dolore magna aliqua.
            Ut  enim  ad  minim  veniam, quis  nostrud exercitation  ullamco laboris
            nisi  ut  aliquip  ex  ea  commodo  consequat.  Duis  aute irure dolor
            in  reprehenderit  in  voluptate  velit  esse  cillum  dolore eu fugiat
            nulla pariatur. Excepteur  sint  occaecat cupidatat non  proident, sunt
             in  culpa qui  officia deserunt  mollit anim id  est  laborum.</p>
          <h5>CATEGORIA</h5>
          <p>Categoria del producto</p>
          <h5>FABRICANTE</h5>
          <p>Empresa del producto</p>
          <h5>PRECIO</h5>
          <p>$123.456</p>
          <input type="number" name="" value="1" min="1" max="100">
          <div class="btn btn-success">Comprar</div>
        </div>
      </div>
    </div>
    <?php include("../paginas/footer.php"); ?>
  </body>
</html>

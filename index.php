<!DOCTYPE html>
<?php
  session_start();
?>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="public/imagenes/ing_sistemas.jpg">
    <title>LITECOM INTERNET</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info sticky-top">
      <div class="container-fluid">
        LITECOM
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="public/paginas/listaEmpresas.php">Empresas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="public/paginas/listaCategorias.php">Categorias</a>
            </li>
            <?php
              if(empty($_SESSION['nombre'])){
             ?>
            <li class="nav-item">
              <a class="nav-link" href="public/paginas/iniciarSesion.php">Iniciar Sesión</a>
            </li>
          <?php }
              else{
          ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                <img src="public/imagenes/person-fill.svg" height="20"> <?php echo $_SESSION['nombre'] ?>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">MIS PRODUCTOS</a></li>
              <li><a class="dropdown-item" href="public/paginas/crearProducto.php">NUEVO PRODUCTO</a></li>
              <?php
                if($_SESSION['perfil']=='ADMINISTRADOR'){
              ?>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">LISTA DE EMPRESAS</a></li>
              <li><a class="dropdown-item" href="#">NUEVA EMPRESA</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">LISTA DE CATEGORIAS</a></li>
              <li><a class="dropdown-item" href="#">NUEVA CATEGORIA</a></li>
            <?php } ?>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="controladores/logout.php">
                <img src="public/imagenes/lock.svg" height="20"> CERRAR SESIÓN</a>
              </li>
            </ul>
          </li>
        <?php } ?>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
          </form>
        </div>
      </div>
    </nav>
    <br>
    <div class="container">
      <div class="row row-cols-1 row-cols-md-4 g-4">
        <?php

        require ("controladores/productoControl.php");
        require ("modelo/producto.php");
        $control= new ProductoControl();
        $productos=$control->getAll();
        foreach($productos as $producto){
          ?>
          <div class="col">
            <div class="card h-100">
              <br>
              <img src="public/imagenes/img1.svg" class="card-img-top" alt="..." height="120px">
              <div class="card-body">
                <h5 class="card-title"><a href="public/paginas/detalleProducto.php?id=<?php echo($producto->id); ?>"><?php echo($producto->nombre); ?></a></h5>
                <p class="card-text"><?php echo($producto->descripcion); ?></p>
                <h4 class="card-text">$<?php echo($producto->precio_venta); ?></h4>
              </div>
              <div class="card-footer">
                <small class="text-muted">Publicado por <?php echo($producto->empresa); ?></small>
                <button type="button" name="button" class="btn btn-success">Comprar</button>
              </div>
            </div>
          </div>
        <?php } ?>
        </div>
    </div>
    <?php include("public/paginas/footer.php"); ?>
  </body>
</html>

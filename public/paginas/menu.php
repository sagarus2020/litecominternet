<nav class="navbar navbar-expand-lg navbar-light bg-info sticky-top">
  <div class="container-fluid">
    LITECOM
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../../index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="listaEmpresas.php">Empresas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="listaCategorias.php">Categorias</a>
        </li>
        <?php
          if(empty($_SESSION['nombre'])){
         ?>
        <li class="nav-item">
          <a class="nav-link" href="iniciarSesion.php">Iniciar Sesión</a>
        </li>
      <?php }
          else{
      ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
            <img src="../imagenes/person-fill.svg" height="20"> <?php echo $_SESSION['nombre'] ?>
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">MIS PRODUCTOS</a></li>
          <li><a class="dropdown-item" href="crearProducto.php">NUEVO PRODUCTO</a></li>
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
          <li><a class="dropdown-item" href="../../controladores/logout.php">
            <img src="../imagenes/lock.svg" height="20"> CERRAR SESIÓN</a>
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

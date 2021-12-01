<?php
  session_start();
  require"../modelo/producto.php";
  require"productoControl.php";
  require"../util/funciones.php";
  if(isset($_POST)){
    $nombre=strtoupper(EntradaSegura($_POST['nombre']));
    $descripcion=strtoupper(EntradaSegura($_POST['descripcion']));
    $estado="ACTIVO";
    $imagen="";
    $categoria=EntradaSegura($_POST['categoria']);
    $empresa=$_SESSION['empresa_id'];
    $precioVenta=EntradaSegura($_POST['precio_venta']);
    $producto= new Producto($nombre, $descripcion, $estado, $imagen, $categoria, $empresa, $precioVenta);
   $control=new ProductoControl();
   $msg=$control->crear($producto);
   if($msg=="OK"){
     $_SESSION['mensaje']="Producto: $nombre fue creado correctamente.";
   }
   else{
     $_SESSION['mensajeError']="Error: al crear el Producto ".$msg;
   }
   header('Refresh: 0; URL=../public/paginas/listaProductos.php');
  }

 ?>

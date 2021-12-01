<?php
  session_start();
  require_once("../config/conexionBD.php");
  include "../util/funciones.php";

  if(!empty($_POST))
  {
    $email=EntradaSegura($_POST['email']);
    $clave=md5(EntradaSegura($_POST['clave']));

    $consulta="SELECT nombre, perfil,correo,id
                      FROM usuario
                        WHERE correo='$email' AND clave='$clave' AND estado='ACTIVO'";

    if (!$resultado = $con->query($consulta)) {
      echo($consulta);
    }
    else{

      if ($resultado->num_rows === 0) {
        $_SESSION['mensajeError']="USUARIO O CLAVE INCORRECTA";
        header("Location:../public/paginas/iniciarSesion.php");
      }
      else{
        $usuario = $resultado->fetch_assoc();
        $_SESSION['nombre']=$usuario['nombre'];
        $_SESSION['correo']=$usuario['correo'];
        $_SESSION['perfil']=$usuario['perfil'];
        if($_SESSION['perfil']=="EMPRESA"){
          $consulta2="SELECT nombre,id
                            FROM empresa
                              WHERE usuario=$usuario['id']";

          $resultado2 = $con->query($consulta2);
          $empresa = $resultado->fetch_assoc();
          $_SESSION['empresa_id']=$empresa['id'];
          $_SESSION['empresa_nombre']=$empresa['nombre'];
        }
        header("Location:../index.php");
      }
    }
  }

 ?>

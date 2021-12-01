<!DOCTYPE html>
<?php
  session_start();
?>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../imagenes/ing_sistemas.jpg">
    <title>LITECOM | Lista de Empresas</title>
  </head>
  <body>
    <?php include("../paginas/menu.php"); ?>
    <br>
    <div class="container">
      <h3 style="text-align:center" class="text-info">LISTA DE EMPRESAS</h3>
      <table id="empresas" class="table table-striped table-bordered" style="width:100%">
        <thead class="table-dark">
            <tr>
                <th>NOMBRE EMPRESA</th>
                <th>CELULAR</th>
                <th>E-MAIL</th>
                <th>DIRECCIÓN</th>
                <th>LOGO</th>
                <th>OPCIONES</th>
            </tr>
        </thead>
        <tbody>
          <?php

          require ("../../controladores/empresaControl.php");
          $control= new EmpresaControl();
          $empresas=$control->getAll();
          $i=1;
          foreach($empresas as $empresa){
                    echo "<tr>";
                    echo("<td>".$empresa->nombre."</td>");
                    echo("<td>".$empresa->celular."</td>");
                    echo("<td>".$empresa->correo."</td>");
                    echo("<td>".$empresa->direccion."</td>");
                    echo("<td style='text-align:center'><img src='../imagenes/img1.svg' height='24px'></img></td>");
                    echo("<td><a href='#'>VER PRODUCTOS</a></td>");
                    echo "</tr>";
                    $i++;
                  }
              ?>
        </tbody>
    </table>
    </div>
    <?php include("../paginas/footer.php"); ?>
    <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
      $('#empresas').DataTable( {
          "language": {
              "url": "//cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json"
          },
          dom: 'Bfrtip',
          buttons: [
              'copy', 'csv', 'excel', 'pdf', 'print'
          ]
      } );
      } );
    </script>
  </body>
</html>

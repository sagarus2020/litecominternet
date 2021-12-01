<?php
          $serverName = "127.0.0.1";
          $USERNAME="litecom_123";
          $PASSWORD="litecom123";
          $con = mysqli_connect($serverName, $USERNAME, $PASSWORD,"litecom_LC1");

          if ($con){
              //echo "<h1>Conexión Exitosa desde conexionIcaro.php</h1>";
            } else{
                echo "Falló la Conexión: Póngase en contacto con el administrador del sistema ! </br></br>";
                die( print_r( sqlsrv_errors(), true));
                }
                /*********************************************/
 ?>

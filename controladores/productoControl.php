<?php
class ProductoControl
{
  private $db;

  function __construct()
  {

  }

  public function conectar($url){
    require_once $url.'conexionBD.php';
    $this->db=$con;
  }

  public function cerrarConexion(){
    $this->db->close();
  }
  public function getAll(){
        $this->conectar('config/');
        $query=$this->db->query("SELECT p.nombre, p.descripcion, p.precio_venta, e.nombre as empresa FROM producto p inner join empresa e on p.empresa=e.id ORDER BY p.id DESC");

        //Devolvemos el resultset en forma de array de objetos
        while ($row = $query->fetch_object()) {
           $resultSet[]=$row;
        }
        $query->free_result();
        $this->cerrarConexion();
        return $resultSet;
    }

    public function getAllEmpresa($empresa){
          $this->conectar('../../config/');
          $query=$this->db->query("SELECT * FROM producto where empresa=".$empresa." ORDER BY id DESC");

          //Devolvemos el resultset en forma de array de objetos
          while ($row = $query->fetch_object()) {
             $resultSet[]=$row;
          }
          $query->free_result();
          $this->cerrarConexion();
          return $resultSet;
      }

    public function crear(Producto $producto){
      $query="INSERT INTO producto (nombre, descripcion, categoria, empresa,
                                      precio_venta, imagen, estado)
                VALUES('".$producto->getNombre()."',
                       '".$producto->getDescripcion()."',
                        ".$producto->getCategoria().",
                        ".$producto->getEmpresa().",
                        ".$producto->getPrecioVenta().",
                        '".$producto->getImagen()."',
                       '".$producto->getEstado()."');";
      $this->conectar('../config/');
      $save=$this->db->query($query);
      $this->cerrarConexion();
      if($save){
        return "OK";
      }
      return $query;
    }
    public function eliminar(){

    }
    public function actualizar(){

    }

}



 ?>

<?php
class EmpresaControl
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
        $this->conectar('../../config/');
        $query=$this->db->query("SELECT * FROM empresa ORDER BY id DESC");

        //Devolvemos el resultset en forma de array de objetos
        while ($row = $query->fetch_object()) {
           $resultSet[]=$row;
        }
        $query->free_result();
        $this->cerrarConexion();
        return $resultSet;
    }


    public function crear(Empresa $empresa){

    }
    public function eliminar(){

    }
    public function actualizar(){

    }

}



 ?>

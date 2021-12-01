<?php
/**
 *
 */
class Producto
{
  private $id;
  private $nombre, $descripcion,$estado,$imagen;
  private $categoria, $empresa;
  private $precioVenta;

  function __construct($nombre, $descripcion, $estado, $imagen, $categoria, $empresa, $precioVenta)
  {
    $this->nombre=$nombre;
    $this->descripcion=$descripcion;
    $this->estado=$estado;
    $this->imagen=$imagen;
    $this->categoria=$categoria;
    $this->empresa=$empresa;
    $this->precioVenta=$precioVenta;
  }
  public function getId(){
    return $this->id;
  }
  public function setId($id){
    $this->id=$id;
  }
  public function getNombre(){
    return $this->nombre;
  }
  public function setNombre($nombre){
    $this->nombre=$nombre;
  }
  public function getDescripcion(){
    return $this->descripcion;
  }
  public function setDescripcion($descripcion){
    $this->descripcion=$descripcion;
  }
  public function getEstado(){
    return $this->estado;
  }
  public function setEstado($estado){
    $this->estado=$estado;
  }
  public function getImagen(){
    return $this->imagen;
  }
  public function setImagen($imagen){
    $this->imagen=$imagen;
  }
  public function getCategoria(){
    return $this->categoria;
  }
  public function setCategoria($categoria){
    $this->categoria=$categoria;
  }
  public function getEmpresa(){
    return $this->empresa;
  }
  public function setEmpresa($empresa){
    $this->empresa=$empresa;
  }
  public function getPrecioVenta(){
    return $this->precioVenta;
  }
  public function setPrecioVenta($precioVenta){
    $this->precioVenta=$precioVenta;
  }
}

 ?>

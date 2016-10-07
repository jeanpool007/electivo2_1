<?php

class Producto {
   var $codigo;
   var $nombre;
   var $precio;
   var $cantidad;
   var $marca;
   var $unidad_medida;
   
   function __construct($codigo, $nombre, $precio, $cantidad, $marca, $unidad_medida) {
       $this->codigo = $codigo;
       $this->nombre = $nombre;
       $this->precio = $precio;
       $this->cantidad = $cantidad;
       $this->marca = $marca;
       $this->unidad_medida = $unidad_medida;
   }

   function getCodigo() {
       return $this->codigo;
   }

   function getNombre() {
       return $this->nombre;
   }

   function getPrecio() {
       return $this->precio;
   }

   function getCantidad() {
       return $this->cantidad;
   }

   function getMarca() {
       return $this->marca;
   }

   function getUnidad_medida() {
       return $this->unidad_medida;
   }

   function setCodigo($codigo) {
       $this->codigo = $codigo;
   }

   function setNombre($nombre) {
       $this->nombre = $nombre;
   }

   function setPrecio($precio) {
       $this->precio = $precio;
   }

   function setCantidad($cantidad) {
       $this->cantidad = $cantidad;
   }

   function setMarca($marca) {
       $this->marca = $marca;
   }

   function setUnidad_medida($unidad_medida) {
       $this->unidad_medida = $unidad_medida;
   }



}

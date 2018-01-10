<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Revista
 *
 * @author casa
 */
class Revista extends Documento{
    //put your code here
     private $volumen;
     private $fechaEdicion;
     function getVolumen() {
         return $this->volumen;
     }

     function getFechaEdicion() {
         return $this->fechaEdicion;
     }

     function setVolumen($volumen) {
         $this->volumen = $volumen;
     }

     function setFechaEdicion($fechaEdicion) {
         $this->fechaEdicion = $fechaEdicion;
     }


}

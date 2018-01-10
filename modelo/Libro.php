<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Libro
 *
 * @author casa
 */
class Libro extends Documento {
    //put your code here
     private $edicion;
     private $editorial;
     private $capitulos;
     
     function getCapitulos() {
         return $this->capitulos;
     }

     function setCapitulos($capitulos) {
         $this->capitulos = $capitulos;
     }

          function getEdicion() {
         return $this->edicion;
     }

     function getEditorial() {
         return $this->editorial;
     }

     function setEdicion($edicion) {
         $this->edicion = $edicion;
     }

     function setEditorial($editorial) {
         $this->editorial = $editorial;
     }


     
}

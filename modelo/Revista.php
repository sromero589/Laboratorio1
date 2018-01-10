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
     private $temas;
     private $secciones;
     function getTemas() {
         return $this->temas;
     }

     function getSecciones() {
         return $this->secciones;
     }

     function setTemas($temas) {
         $this->temas = $temas;
     }

     function setSecciones($secciones) {
         $this->secciones = $secciones;
     }

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

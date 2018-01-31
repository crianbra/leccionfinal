<?php

class Temperatura
{
    private $idtemperatura;
    private $dia;
    private $mes;
    private $hora;
    private $temp;
    private $idciudad;
    
     function __construct($idtemperatura, $dia, $mes, $hora, $temp, $idciudad) {
       $this->idtemperatura = $idtemperatura;
       $this->dia = $dia;
         $this->mes = $mes;
       $this->hora = $hora;
         $this->temp = $temp;
       $this->idciudad = $idciudad;
        
     }
    
     function setIdtemperatura($idtemperatura){
       $this->idtemperatura = $idtemperatura;
     } 
     function getIdtemperatura(){
       return $this->idtemperatura;
     } 
     function setDia($dia){
       $this->dia = $dia;
     } 
     function getDia(){
       return $this->dia;
     } 
    function setMes($mes){
       $this->mes = $mes;
     } 
     function getMes(){
       return $this->mes;
     } 
    function setHora($hora){
       $this->hora = $hora;
     } 
     function getHora(){
       return $this->hora;
     } 
    function setTemp($temp){
       $this->temp = $temp;
     } 
     function getTemp(){
       return $this->temp;
     }
    function setIdciudad($idciudad){
       $this->idciudad = $idciudad;
     } 
     function getIdciudad(){
       return $this->idciudad;
     } 
}

?> 

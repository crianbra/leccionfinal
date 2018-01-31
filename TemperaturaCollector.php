<?php

include_once('Temperatura.php');
include_once('Collector.php');

class TemperaturaCollector extends Collector
{
  
  function showTemperaturas() {
    $rows = self::$db->getRows("SELECT * FROM temperatura");        
    
    $arrayTemperatura= array();        
    foreach ($rows as $c){
      $aux = new Temperatura($c{'idtemperatura'},$c{'dia'},$c{'mes'},$c{'hora'},$c{'temp'},$c{'idciudad'});
      array_push($arrayTemperatura, $aux);
    }
    return $arrayTemperatura;        
  }


function createTemperatura($dia,$mes,$hora,$temp,$idciudad){
	$insertarrow = self::$db->insertRow("INSERT INTO public.temperatura (dia,mes,hora,temp,idciudad) VALUES (?,?,?,?,?)", array ("{$dia}","{$mes}","{$hora}","{$temp}","{$idciudad}"));

}

}
?>


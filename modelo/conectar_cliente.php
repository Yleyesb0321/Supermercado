<?php

  class Conexx {
    public static function Conect(){
      define('servidor','localhost');
      define('nombre_bd','supermegaplus');
      define('usuario','root');
      define('password','');
  
      $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

      try{
        $coness = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password, $opciones);
        return $coness;
        
      }catch (Exception $e){
        die("Error de Conexion es: ". $e->getMessage());
      }
    }
  }
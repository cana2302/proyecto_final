<?php
    //Obtenemos código del archivo 'conexion.php'
    require ("conexion.php");

    class Devuelve extends Conexion{  //Clase heredada de la clase Conexion
        
        //Metodo constructor:
        public function __construct (){
            parent::Conexion(); //constructor padre (conexion.php)
        }
        
        public function get_aseguradoras (){
            $resultado=$this->conexion_db->query("SELECT * FROM aseguradoras1");

            $aseguradoras=$resultado->fetch_all(MYSQLI_ASSOC);
            return $aseguradoras;
        }

        public function get_asegurados (){
            $resultado=$this->conexion_db->query("SELECT * FROM asegurados");

            $asegurados=$resultado->fetch_all(MYSQLI_ASSOC);
            return $asegurados;
        }

        public function get_reparaciones (){
            $resultado=$this->conexion_db->query("SELECT * FROM averias");

            $reparaciones=$resultado->fetch_all(MYSQLI_ASSOC);
            return $reparaciones;
        }


    }



?>
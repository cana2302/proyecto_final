<?php

    // 'require' trae la info que se encuentra en el archivo config (en este caso variables)
    require ("config.php");

    class Conexion {

        protected $conexion_db;

        //Constructor de la clase:
        public function Conexion (){
            $this->conexion_db=new mysqli(DB_HOST, DB_USUARIO, DB_CONTRA, DB_NOMBRE); //utiliza variables de config.php

            //En caso de fallo de conexion:
            if ($this->conexion_db->connect_errno){
                echo "Fallo al conectar a base de datos.<br>";
                echo $this->conexion_db->connect_error;
                return;
            }

            //Establecemos caracteres a utilizar en la bbdd
            $this->conexion_db->set_charset(DB_CHARSET);

        }

    }
    
    
?>
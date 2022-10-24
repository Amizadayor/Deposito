<?php

    class conexionsql{

        //VARIABLES DE CONEXIÓN SQL
        private $host = 'localhost';
        private $bdname = 'deposito';
        private $username = 'root';
        private $pass='11092000';
        private $conexion;

        //metodo que nos ayudara a conectarnos

        public function conectar (){
            $this->conexion = null;

            try{
                //conectar a la base de datos

                $conexion = new PDO('mysql:host=localhost;dbname='.$this->bdname,
                                $this->username, $this->pass);
                foreach($conexion->query('SELECT * FROM proveedor') as $proveedor){
                    echo 'NOMBRE DEL PROVEEDOR:' . $proveedor[1]. '</br>';
                }
            }catch(PDOException $e){
                echo "Ocurrio un error al conectarte a la base de datos".$e;

            }
        }
    }
?>


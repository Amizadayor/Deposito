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

            try{    //conexión a la base de datos

    //CONEXIÓN A LA TABLA DE PROVEEDOR

                $conexion = new PDO('mysql:host=localhost;dbname='.$this->bdname,$this->username, $this->pass);
                echo "<h1>PROVEEDORES REGISTRADOS : </h1> ";
                foreach($conexion->query('SELECT * FROM proveedor') as $proveedor){
                    echo '<br></br>';
                    echo 'NOMBRE DEL PROVEEDOR : '. $proveedor[1], $proveedor[2]. '</br>';
                    echo 'APELLIDO DEL PROVEEDOR : '. $proveedor[3], $proveedor[4]. '</br>';
                    echo 'NÚMERO DEL PROVEEDOR : '. $proveedor[5]. '</br>';
                    echo 'EMPRESA DEL PROVEEDOR : '. $proveedor[6]. '</br>';
                }

    //CONEXIÓN A LA TABLA CATEGORIA

                echo "<h1>CATEGORIAS REGISTRADAS : </h1> ";
                $conexion = new PDO('mysql:host=localhost;dbname='.$this->bdname,$this->username, $this->pass);
                foreach($conexion->query('SELECT * FROM categoria') as $categoria){
                    echo '<br></br>';
                    echo 'NOMBRE DE LA CATEGORIA : '. $categoria[1]. '</br>';
                    echo 'CAPACIDAD DEL PRODUCTO : '. $categoria[2]. '</br>';
                }
            }catch(PDOException $e){
                echo "Ocurrio un error al conectarte a la base de datos".$e;

            }
        }
    }
?>


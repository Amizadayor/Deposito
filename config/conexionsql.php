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
                    echo 'NOMBRE DEL PROVEEDOR : '. $proveedor[1], $proveedor[2]. '</p>';
                    echo 'APELLIDO DEL PROVEEDOR : '. $proveedor[3], $proveedor[4]. '</p>';
                    echo 'NÚMERO DEL PROVEEDOR : '. $proveedor[5]. '</p>';
                    echo 'EMPRESA DEL PROVEEDOR : '. $proveedor[6]. '</p>';
                }

//CONEXIÓN A LA TABLA CATEGORIA
                echo '<hr>';
                echo "<h1>CATEGORIAS REGISTRADAS : </h1> ";
                $conexion = new PDO('mysql:host=localhost;dbname='.$this->bdname,$this->username, $this->pass);
                foreach($conexion->query('SELECT * FROM categoria') as $categoria){
                    echo '<br></br>';
                    echo 'NOMBRE DE LA CATEGORIA : '. $categoria[1]. '</p>';
                    echo 'CAPACIDAD DEL PRODUCTO : '. $categoria[2]. '</p>';
                }

//CONEXIÓN A LA TABLA DE PRODUCTOS
                echo '<hr>';
                echo "<h1> PRODUCTOS REGISTRADOS : </h1>";
                $conexion = new PDO('mysql:host=localhost;dbname='.$this->bdname,$this->username, $this->pass);
                foreach($conexion->query('SELECT * FROM Producto') as $producto){
                    echo '<br></br>';
                    echo 'NOMBRE DEL PRODUCTO : '. $producto[1]. '</p>';
                    echo 'PRECIO DEL PRODUCTO : '. $producto[2]. '</p>';
                    echo 'CANTIDAD DISPONIBLE PARA LA VENTA : '. $producto[3]. '</p>';
                    echo 'CATEGORIA DEL PRODUCTO : '. $producto[4]. '</p>';
                    echo 'PROVEEDOR DEL PRODUCTO : '. $producto[5]. '</p>';
                }

//CONEXIÓN A LA TABLA DE EMPLEADOS
                echo '<hr>';
                echo "<h1> EMPLEADOS REGISTRADOS : </h1>";
                $conexion = new PDO('mysql:host=localhost;dbname='.$this->bdname,$this->username, $this->pass);
                foreach($conexion->query('SELECT * FROM Empleado') as $empleado){
                    echo '<br></br>';
                    echo 'USUARIO DEL EMPLEADO : ' .$empleado[1]. '</p>';
                    echo 'CONTRASEÑA DEL EMPLEADO : ' .$empleado[2]. '</p>';
                    echo 'NOMBRE DEL EMPLEADO : ' .$empleado[3], $empleado[4]. '</p>';
                    echo 'APELLIDO DEL EMPLEADO : ' .$empleado[5], $empleado[6]. '</p>';
                    echo 'NÚMERO DE TELÉFONO  DEL EMPLEADO : ' .$empleado[7]. '</p>';
                    echo 'DIRECCIÓN DEL EMPLEADO : ' .$empleado[8]. '</p>';
                    echo 'CURP DEL EMPLEADO : ' .$empleado[9]. '</p>';
                    echo 'RFC DEL EMPLEADO' .$empleado[10]. '</p>';
                }

//CONEXIÓN A LA TABLA DEL CLIENTE
                echo '<hr>';
                echo "<h1> CLIENTES REGISTRADOS : </h1>";
                $conexion = new PDO('mysql:host=localhost;dbname='.$this->bdname,$this->username, $this->pass);
                foreach($conexion->query('SELECT * FROM Cliente')as $cliente){
                    echo '<br></br>';
                    echo 'NOMBRE DEL CLIENTE : ' .$cliente[1], $cliente[2]. '</p>';
                    echo 'APELLIDO DEL CLIENTE : ' .$cliente[3], $cliente[4]. '</p>';
                    echo 'NÚMERO DE TELÉFONO DEL CLIENTE : ' .$cliente[5]. '</p>';
                    echo 'DIRECCIÓN DEL CLIENTE : ' .$cliente[6]. '</p>';
                    echo 'FECHA DE NACIMIENTO DEL CLIENTE : ' .$cliente[7]. '</p>';
                }

            }catch(PDOException $e){
                echo "Ocurrio un error al conectarte a la base de datos".$e;

            }
        }
    }
?>


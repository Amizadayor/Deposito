<?php

class conexionsql
{

    //VARIABLES DE CONEXIÓN SQL
    private $host = 'localhost';
    private $bdname = 'deposito';
    private $username = 'root';
    private $pass = '';
    private $conexion;

    //metodo que nos ayudara a conectarnos

    public function conectar()
    {
        $this->conexion = null;
        try {    //conexión a la base de datos

            //CONEXIÓN A LA TABLA DE PROVEEDOR
            $conexion = new PDO('mysql:host=localhost;dbname=' . $this->bdname, $this->username, $this->pass);
            echo "<h1>PROVEEDORES REGISTRADOS </h1> ";
            foreach ($conexion->query('SELECT * FROM proveedor') as $proveedor) {
                echo '<br></br>';
                echo '<strong> ID DEL PROVEEDOR : </strong>' . $proveedor[0] . '</p>';
                echo '<strong> NOMBRE DEL PROVEEDOR : </strong>' . $proveedor[1] . '&nbsp' . $proveedor[2] . '</p>';
                echo '<strong> APELLIDO DEL PROVEEDOR : </strong>' . $proveedor[3] . '&nbsp' . $proveedor[4] . '</p>';
                echo '<strong> TELÉFONO DEL PROVEEDOR : </strong>' . $proveedor[5] . '</p>';
                echo '<strong> EMPRESA DEL PROVEEDOR : </strong>' . $proveedor[6] . '</p>';
            }

            //CONEXIÓN A LA TABLA CATEGORIA
            echo '<hr>';
            echo "<h1>CATEGORIAS REGISTRADAS </h1> ";
            $conexion = new PDO('mysql:host=localhost;dbname=' . $this->bdname, $this->username, $this->pass);
            foreach ($conexion->query('SELECT * FROM categoria') as $categoria) {
                echo '<br></br>';
                echo '<strong> ID DE LA CATEGORIA : </strong>' . $categoria[0] . '</p>';
                echo '<strong> NOMBRE DE LA CATEGORIA : </strong>' . $categoria[1] . '</p>';
                echo '<strong> CAPACIDAD DEL PRODUCTO : </strong>' . $categoria[2] . '</p>';
            }

            //CONEXIÓN A LA TABLA DE PRODUCTOS
            echo '<hr>';
            echo "<h1> PRODUCTOS REGISTRADOS </h1>";
            $conexion = new PDO('mysql:host=localhost;dbname=' . $this->bdname, $this->username, $this->pass);
            foreach ($conexion->query("select p.id, p.Nombre_producto, p.Precio_producto, p.Stock, c.Nombre_categoria, CONCAT(pr.Nombre_1 , ' ' , pr.Nombre_2 , ' ' ,pr.Apellido_paterno , ' ' ,pr.Apellido_materno) AS NOMBRE from producto p join categoria c on p.Categoria_id= c.Id JOIN proveedor pr on p.Proveedor_id= pr.Id;") as $producto) {
                echo '<br></br>';
                echo '<strong> ID DEL PRODUCTO : </strong>' . $producto[0] . '</p>';
                echo '<strong> NOMBRE DEL PRODUCTO : </strong>' . $producto[1] . '</p>';
                echo '<strong> PRECIO DEL PRODUCTO : </strong>' . $producto[2] . '</p>';
                echo '<strong> CANTIDAD DISPONIBLE PARA LA VENTA : </strong>' . $producto[3] . '</p>';
                echo '<strong> CATEGORIA DEL PRODUCTO : </strong>' . $producto[4] . '</p>';
                echo '<strong> PROVEEDOR DEL PRODUCTO : </strong>' . $producto[5] . '</p>';
            }

            //CONEXIÓN A LA TABLA DE EMPLEADOS
            echo '<hr>';
            echo "<h1> EMPLEADOS REGISTRADOS </h1>";
            $conexion = new PDO('mysql:host=localhost;dbname=' . $this->bdname, $this->username, $this->pass);
            foreach ($conexion->query('SELECT * FROM Empleado') as $empleado) {
                echo '<br></br>';
                echo '<strong> ID DEL EMPLEADO : </strong>' . $empleado[0] . '</p>';
                echo '<strong> USUARIO DEL EMPLEADO : </strong>' . $empleado[1] . '</p>';
                echo '<strong> CONTRASEÑA DEL EMPLEADO : </strong>' . $empleado[2] . '</p>';
                echo '<strong> NOMBRE DEL EMPLEADO : </strong>' . $empleado[3] . '&nbsp' . $empleado[4] . '</p>';
                echo '<strong> APELLIDO DEL EMPLEADO : </strong>' . $empleado[5] . '&nbsp' . $empleado[6] . '</p>';
                echo '<strong> TELÉFONO  DEL EMPLEADO : </strong>' . $empleado[7] . '</p>';
                echo '<strong> DIRECCIÓN DEL EMPLEADO : </strong>' . $empleado[8] . '</p>';
                echo '<strong> CURP DEL EMPLEADO : </strong>' . $empleado[9] . '</p>';
                echo '<strong> RFC DEL EMPLEADO : </strong>' . $empleado[10] . '</p>';
            }

            //CONEXIÓN A LA TABLA DEL CLIENTE
            echo '<hr>';
            echo "<h1> CLIENTES REGISTRADOS : </h1>";
            $conexion = new PDO('mysql:host=localhost;dbname=' . $this->bdname, $this->username, $this->pass);
            foreach ($conexion->query('SELECT * FROM Cliente') as $cliente) {
                echo '<br></br>';
                echo '<strong> ID DEL CLIENTE : </strong>' . $cliente[0] . '</p>';
                echo '<strong> NOMBRE DEL CLIENTE : </strong>' . $cliente[1] . '&nbsp' . $cliente[2] . '</p>';
                echo '<strong> APELLIDO DEL CLIENTE : </strong>' . $cliente[3] . '&nbsp' . $cliente[4] . '</p>';
                echo '<strong> NÚMERO DE TELÉFONO DEL CLIENTE : </strong>' . $cliente[5] . '</p>';
                echo '<strong> DIRECCIÓN DEL CLIENTE : </strong>' . $cliente[6] . '</p>';
                echo '<strong> FECHA DE NACIMIENTO DEL CLIENTE : </strong>' . $cliente[7] . '</p>';
            }

            //CONEXIÓN A LA TABLA DE VENTAS REGISTRADAS
            echo '<hr>';
            echo "<h1> TOTAL DE VENTAS REGISTRADAS </h1>";
            $conexion = new PDO('mysql:host=localhost;dbname=' . $this->bdname, $this->username, $this->pass);
            foreach ($conexion->query('SELECT * FROM Venta') as $venta) {
                echo '<br></br>';
                echo '<strong> ID DE LA VENTA FINAL : </strong>' . $venta[0] . '</p>';
                echo '<strong> PRECIO TOTAL DE LA VENTA : </strong>' . $venta[1] . '</p>';
                echo '<strong> CANTIDAD TOTAL DE PRODUCTOS VENDIDOS : </strong>' . $venta[2] . '</p>';
                echo '<strong> FECHA VENTA : </strong>' . $venta[3] . '</p>';
                echo '<strong> ID DEL CLIENTE : </strong>' . $venta[4] . '</p>';
                echo '<strong> ID DEL EMPLEADO : </strong>' . $venta[5] . '</p>';
            }

             //CONEXIÓN A LA TABLA DE PRODUCTO_VENTA
            echo '<hr>';
            echo "<h1> TOTAL DE PRODUCTOS VENDIDOS </h1>";
            $conexion = new PDO('mysql:host=localhost;dbname=' . $this->bdname, $this->username, $this->pass);
             foreach ($conexion->query('SELECT * FROM ProductoVenta') as $productoVenta) {
                echo '<br></br>';
                echo '<strong> ID DE LA VENTA DE PRODUCTOS: </strong>' . $productoVenta[0] . '</p>';
                echo '<strong> PRECIO TOTAL : </strong>' . $productoVenta[1] . '</p>';
                echo '<strong> CANTIDAD DE PRODUCTOS VENDIDOS : </strong>' . $productoVenta[2] . '</p>';
                echo '<strong> ID DEL PRODUCTO : </strong>' . $productoVenta[3] . '</p>';
                echo '<strong> ID DE LA VENTA : </strong>' . $productoVenta[4] . '</p>';
            }

        } catch (PDOException $e) {
            echo "Ocurrio un error al conectarte a la base de datos" . $e;
        }
    }
}

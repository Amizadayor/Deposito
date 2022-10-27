<?php
include 'config/conexionsql.php';

echo '<link href="../Deposito/css/style.css" rel="stylesheet">';
echo "<h1> DATOS REGISTRADOS </h1> ";
echo '<hr>';

$varconex = new conexionsql;
$varconex->conectar();

?>

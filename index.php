<?php
include 'config/conexionsql.php';

echo "<h1> DATOS REGISTRADOS </h1> ";
echo '<hr>';

$varconex = new conexionsql;
$varconex->conectar();

?>

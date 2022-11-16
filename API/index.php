<?php
include 'connection/conexionsql.php';

echo '<link href="../API/css/style.css" rel="stylesheet">';
echo '<br>';
echo '<hr>';
echo "<h1> DATOS REGISTRADOS </h1> ";
echo '<hr>';

$varconex = new conexionsql;
$varconex->conectar();

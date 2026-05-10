<?php

$conexion = new mysqli(
    "sql209.infinityfree.com",
    "if0_41867531",
    "3hbLpEZB0Lp",
    "if0_41867531_wallapop"
);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}



?>
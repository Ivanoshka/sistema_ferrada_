<!-- Este archivo sirve para hacer la conexion a la base de datos
 -->
<?php
session_start();

/* nos conectamos a la base de datos
 */
$conexion = new mysqli("serverrds1.c3qkohaf9xbm.us-east-1.rds.amazonaws.com", "superhombre","superhombre1","sistema_rfid","3306");

$conexion->set_charset("utf8");



?>
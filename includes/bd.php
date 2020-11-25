<?php

$user = '';
$server  = '104.154.169.214';
$password = '';
$base = 'cryptobs';

$conn = mysqli_connect($server, $user, $password, $base);

if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
} else {
    echo "Conexión exitosa <br>";
}
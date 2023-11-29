<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$bd = 'permiturismo';

$conn = mysqli_connect($servidor, $usuario, $senha, $bd);

if (!$conn) {
    die("Problemas de Conexão" . mysqli_connect_error());
}

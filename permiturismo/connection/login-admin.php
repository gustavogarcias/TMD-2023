<?php
include "connection.php";

$password = 'segredo';

$senha = $_REQUEST['senha'];

if ($senha == $password) {
  setcookie('permiturismo_admin', uniqid('', false), time() + (86400 * 30), '/');
  header('Location: /admin-restaurantes.php');
  mysqli_close($conn);
} else {
  echo 'Senha incorreta.';
  echo '<br> <a href="/admin.php">Clique aqui e tente novamente.</a>';
  mysqli_error($conn);
}

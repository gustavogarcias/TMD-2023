<?php
$title = 'Admin - Restaurantes';
$children = 'views/remover-passeio.php';
$css = 'styles/admin.css';
include('connection/connection.php');
include('layout.php');

if (!isset($_COOKIE['permiturismo_admin'])) {
  header('Location: /admin.php');
}

$query = explode('=', $_SERVER['QUERY_STRING']);
$id = $query[1];

$sql = "DELETE FROM passeio
  WHERE id = $id";

if (mysqli_query($conn, $sql)) {
  header('Location: /passeios.php');
} else {
  echo "Error" . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

<?php
include('connection/connection.php');

if (!isset($_COOKIE['permiturismo_admin'])) {
  header('Location: /admin.php');
}

$query = explode('=', $_SERVER['QUERY_STRING']);
$id = $query[1];

$sql = "DELETE FROM usuario
  WHERE id = $id";

if (mysqli_query($conn, $sql)) {
  header('Location: /relatorio.php');
} else {
  echo "Error" . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

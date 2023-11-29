<?php
$title = 'Admin - Editar restaurante';
$children = 'views/editar-restaurante.php';
$css = 'styles/admin.css';
include('layout.php');

if (!isset($_COOKIE['permiturismo_admin'])) {
  header('Location: /admin.php');
}

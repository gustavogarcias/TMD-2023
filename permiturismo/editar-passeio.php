<?php
$title = 'Admin - Editar passeio';
$children = 'views/editar-passeio.php';
$css = 'styles/admin.css';
include('layout.php');

if (!isset($_COOKIE['permiturismo_admin'])) {
  header('Location: /admin.php');
}

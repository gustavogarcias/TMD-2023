<?php
$title = 'Admin - Criar restaurante';
$children = 'views/criar-restaurante.php';
$css = 'styles/admin.css';
include('layout.php');

if (!isset($_COOKIE['permiturismo_admin'])) {
  header('Location: /admin.php');
}

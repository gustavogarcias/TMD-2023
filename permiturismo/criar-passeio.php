<?php
$title = 'Admin - Criar passeio';
$children = 'views/criar-passeio.php';
$css = 'styles/admin.css';
include('layout.php');

if (!isset($_COOKIE['permiturismo_admin'])) {
  header('Location: /admin.php');
}

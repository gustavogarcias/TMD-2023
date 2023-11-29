<?php
$title = 'Relatório';
$children = 'views/relatorio.php';
$css = 'styles/admin.css';
include('layout.php');

if (!isset($_COOKIE['permiturismo_admin'])) {
  header('Location: /admin.php');
}

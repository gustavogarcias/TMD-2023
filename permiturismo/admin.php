<?php
if (isset($_COOKIE['permiturismo_admin'])) {
  header('Location: /admin-restaurantes.php');
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link rel="stylesheet" href="/styles/admin.css">
</head>

<body class="login">
  <form action="/connection/login-admin.php" method="POST" class="login-admin-form">
    <p>Entrar no painel de administrador</p>
    <input type="password" name="senha" id="senha" class="login-admin-input" placeholder="••••••">
    <button type="submit" class="button">
      Entrar
    </button>
  </form>
</body>

</html>
<main>
  <div class="container">
    <span class="user-icon"></span>
    <h1>Área de Login</h1>
    <form action="/connection/login.php" method="POST">
      <div class="form-row">
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
      </div>
      <div class="form-row">
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha">
      </div>
      <button type="submit">Entrar</button>
    </form>
    <a href="/cadastro.php" class="register">Não tem uma conta? Clique aqui.</a>
  </div>
</main>
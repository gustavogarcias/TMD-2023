<main>
  <div class="container">
    <aside>
      <h1>Cadastre-se</h1>
      <p>Se estiver com dificuldades entre em contato pelo e-mail abaixo: permiturismo_tmd@gmail.com</p>
    </aside>
    <form action="/connection/novo-usuario.php" method='POST' autocomplete="off">
      <div class="form-row">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Primeiro nome">
      </div>
      <div class="form-row">
        <label for="sobrenome">Sobrenome</label>
        <input type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome">
      </div>
      <div class="form-row">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="nome@gmail.com">
      </div>
      <div class="form-row">
        <label for="sexo">Sexo</label>
        <div class="radio">
          <input type="radio" name="sexo" id="feminino" value="F">
          <label for="feminino">Feminino</label>
        </div>
        <div class="radio">
          <input type="radio" name="sexo" id="masculino" value="M">
          <label for="masculino">Masculino</label>
        </div>
      </div>
      <div class="form-row password">
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" placeholder="Senha">
      </div>
      <button type="submit">Cadastrar</button>


    </form>
  </div>
</main>
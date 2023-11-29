<?php
include "connection/connection.php";

$sql = "SELECT * FROM restaurante";
$restaurantes = $conn->query($sql);

$conn->close();

?>

<main class="screen">
  <h2 class="title">Painel de Administrador Permiturismo</h2>
  <section>
    <aside>
      <a href="/admin-restaurantes.php">Restaurantes</a>
      <a href="/admin-passeios.php">Passeios</a>
      <a href="/relatorio.php">Relatório</a>
    </aside>
    <div class="dashboard">
      <a href="/criar-restaurante.php" class="create-link">Postar novo restaurante</a>
      <ul>
        <?php if ($restaurantes->num_rows > 0) {
          while ($row = $restaurantes->fetch_assoc()) {
            echo "<li class='item'>
            <img src='$row[imagem]' alt='$row[nome]' decoding='async' loading='lazy' width='72' height='64' />
            <p>$row[nome]</p>
            <div class='item-btns'>
              <a href='/editar-restaurante.php?id=$row[id]' class='edit-item item-btn'></a>
              <a href='/remover-restaurante.php?id=$row[id]' class='delete-item item-btn' title='Deletar restaurante'></a>
            </div>
          </li>";
          }
        } else {
          echo "Nenhum restaurante encontrado.";
        } ?>
      </ul>
    </div>
  </section>
</main
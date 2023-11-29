<?php
include "connection/connection.php";

$sql = "SELECT * FROM passeio";
$passeios = $conn->query($sql);

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
      <a href="/criar-passeio.php" class="create-link">Postar novo passeio</a>
      <ul>
        <?php if ($passeios->num_rows > 0) {
          while ($row = $passeios->fetch_assoc()) {
            echo "<li class='item'>
            <img src='$row[imagem]' alt='$row[nome]' decoding='async' loading='lazy' width='72' height='64' />
            <p>$row[nome]</p>
            <div class='item-btns'>
              <a href='/editar-passeio.php?id=$row[id]' class='edit-item item-btn'></a>
              <a href='/remover-passeio.php?id=$row[id]' class='delete-item item-btn' title='Deletar passeio'></a>
            </div>
          </li>";
          }
        } else {
          echo "Nenhum passeio encontrado.";
        } ?>
      </ul>
    </div>
  </section>
</main
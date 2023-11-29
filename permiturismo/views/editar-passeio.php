<?php
include "connection/connection.php";

$query = explode('=', $_SERVER['QUERY_STRING']);
$id = $query[1];

$sql = "SELECT * FROM passeio WHERE id = $id LIMIT 1";
$passeio = $conn->query($sql);


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
      <?php if ($passeio->num_rows > 0) {
        while ($row = $passeio->fetch_assoc()) {
          echo "<form class='form' action='/connection/editar-passeio.php' method='POST'>
          <input type='number' name='id' id='id' value='$row[id]' style='display: none;'>
          <div class='form-row'>
            <label for='nome'>Nome</label>
            <input type='text' name='nome' id='nome' placeholder='Jardim Botânico' value='$row[nome]'>
          </div>
          <div class='form-row'>
            <label for='descricao'>Descrição</label>
            <input type='text' name='descricao' id='descricao' placeholder='Jardim Botânico é muito legal!' value='$row[descricao]'>
          </div>
          <div class='form-row'>
            <label for='imagem'>Imagem</label>
            <input type='text' name='imagem' id='imagem' value='$row[imagem]' placeholder='https://www.google.com/maps/place/Jardim+Bot%C3%A2nico,+Curitiba+-+PR,+82590-300/@-25.4432828,-49.2676166,14z/data=!3m1!4b1!4m6!3m5!1s0x94dce4ff6c236d65:0xdcb9bf3363daa784!8m2!3d-25.4414024!4d-49.2487178!16s%2Fg%2F122vlt_r?entry=ttu'>
          </div>
          <div class='form-row'>
            <label for='texto'>Texto</label>
            <textarea type='text' name='texto' id='texto' placeholder=''>$row[texto]</textarea>
          </div>
          <div class='list-container'>
            <label for='lista'>Lista</label>
            <input placeholder='Abre às 08:00' type='text' name='lista' id='lista' class='list-item-input' value='$row[lista]'>
          </div>
          <button type='submit'>Atualizar</button>
        </form>";
        }
      } else {
        echo "Passeio com id '$id' não encontrado";
      }
      ?>
    </div>
  </section>
</main
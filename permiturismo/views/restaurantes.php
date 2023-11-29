<?php
include "connection/connection.php";

$sql = "SELECT * FROM restaurante";
$restaurantes = $conn->query($sql);

$conn->close();
?>

<main>
  <h1>Restaurantes</h1>
  <div class="places">
  <?php if ($restaurantes->num_rows > 0) {
    while ($row = $restaurantes->fetch_assoc()) {
      echo
      "<a href='/restaurante.php?id=$row[id]' class='place-link'>
          <div class='place-content'>
            <h3>$row[nome]</h3>
            <p>$row[descricao]</p>
          </div>
          <img src='$row[imagem]' alt='$row[nome]' class='place-image' decoding='async' loading='lazy' style='content-visibility: auto;' />
        </a>";
    } } else {
      echo "Nenhum restaurante encontrado.";
    }
    ?>
  </div>
</main>
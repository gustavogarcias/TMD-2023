<?php
include "connection/connection.php";

$query = explode('=', $_SERVER['QUERY_STRING']);
$id = $query[1];

$sql = "SELECT * FROM restaurante WHERE id = $id LIMIT 1";
$restaurante = $conn->query($sql);

$conn->close();
?>

<main>
  <?php if ($restaurante->num_rows > 0) {
    while ($row = $restaurante->fetch_assoc()) {
      echo "<section class='screen'>
        <h3>$row[nome]</h3>
        <img src='$row[imagem]' alt='$row[nome]' class='image'>
        <p>$row[texto]</p>
        <div class='info'>
          <ul>
            ";foreach (explode(';', $row['lista']) as $item) {
              echo "<li><p>$item</p></li>";
            }"
          </ul>
        </div>
      </section>";
    }
  } else {
    echo "Restaurante com id '$id' não encontrado";
  }
  ?>
</main>
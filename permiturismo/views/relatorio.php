<?php
include "connection/connection.php";

$sql = "SELECT * FROM usuario WHERE cargo='usuario'";
$usuarios = $conn->query($sql);

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
      <?php if ($usuarios->num_rows > 0) {
        echo "<table>
        <thead>
          <tr>
            <th>Id</th>
            <th>Nome completo</th>
            <th>Email</th>
            <th>Sexo</th>
            <th>Opções</th>
          </tr>
        </thead>";
      }
      if ($usuarios->num_rows > 0) {
        while ($row = $usuarios->fetch_assoc()) {
          echo "
                <tbody>
                  <tr>
                    <td>$row[id]</td>
                    <td>$row[nome] $row[sobrenome]</td>
                    <td>$row[email]</td>
                    <td>$row[sexo]</td>
                    <td>
                      <a href='/remover-usuario.php?id=$row[id]'>Remover usuário</a>
                    </td>
                  </tr>
                </tbody>
              ";
        }
      } else {
        echo "<p>Nenhum usuário cadastrado...</p>";
      }
      if ($usuarios->num_rows > 0) {
        echo "</table>";
      }
      ?>
    </div>
  </section>
</main
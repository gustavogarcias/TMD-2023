<?php
include "connection.php";

$imagem = $_REQUEST['imagem'];
$nome = $_REQUEST['nome'];
$texto = $_REQUEST['texto'];
$descricao = $_REQUEST['descricao'];
$localizacao = $_REQUEST['localizacao'];
$lista = $_REQUEST['lista'];

$sql = "INSERT INTO passeio (nome,texto,imagem,descricao,localizacao,lista)
VALUES ('$nome','$texto','$imagem','$descricao','$localizacao','$lista')";

if (mysqli_query($conn, $sql)) {
  header('Location: /passeios.php');
} else {
  echo "Error" . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

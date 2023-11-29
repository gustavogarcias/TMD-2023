<?php
include "connection.php";

$id = $_REQUEST['id'];
$imagem = $_REQUEST['imagem'];
$nome = $_REQUEST['nome'];
$texto = $_REQUEST['texto'];
$descricao = $_REQUEST['descricao'];
$localizacao = $_REQUEST['localizacao'];
$lista = $_REQUEST['lista'];

$sql = "UPDATE restaurante 
SET nome='$nome',texto='$texto',descricao='$descricao',localizacao='$localizacao',lista='$lista',imagem='$imagem' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
  header('Location: /restaurantes.php');
} else {
  echo "Error" . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

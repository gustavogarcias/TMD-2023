<?php
include "connection.php";

$email = $_POST['email'];
$senha = $_POST['senha'];

$gatilho = true;

$query_select = "SELECT * FROM usuario WHERE `email` = '$email' AND `senha` = '$senha'";
$select = mysqli_query($conn, $query_select);

if (($select) && ($select->num_rows != 0)) {
    while ($rows = mysqli_fetch_array($select)) {
        $detect_email = $rows['email'];
        $detect_senha = $rows['senha'];

        if (($detect_email == $email) && ($detect_senha == $senha)) {
            $gatilho = false;
            $id = $rows['id'];
            $nome = $rows['nome'];
            $sobrenome = $rows['sobrenome'];
            $email = $rows['email'];
            $sexo = $rows['sexo'];
            $senha = $rows['senha'];
            $cargo = $rows['cargo'];

            setcookie('permiturismo_cargo', $cargo, time() + (86400 * 30), '/');
        } else {
        }
    }
}
if ($gatilho == true) {
    echo "<script language='javascript' type='text/javascript'>
        alert('O login ou senha digitados está incorreto');window.location.href='http://permiturismo/login.php';
        </script>";

    echo "deu errado";
} else {
    mysqli_close($conn);

    header('Location:/index.php ');
}

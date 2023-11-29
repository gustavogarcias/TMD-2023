<?php
include "connection.php";

$nome = $_REQUEST['nome'];
$sobrenome = $_REQUEST['sobrenome'];
$email = $_REQUEST['email'];
$sexo = $_REQUEST['sexo'];
$senha = $_REQUEST['senha'];

function checkEmail($email)
{
    include "connection.php";

    $sql = "SELECT * FROM usuario WHERE email='$email'";
    $usuarios = mysqli_query($conn, $sql);

    if ($usuarios->num_rows == 0) {
        return true;
    }

    return false;
}

if (checkEmail($email)) {
    $sql = "INSERT INTO usuario (nome,sobrenome,email,sexo,senha,cargo)
VALUES  ('$nome','$sobrenome','$email','$sexo','$senha','usuario')";

    if (mysqli_query($conn, $sql)) {
        header('Location: /login.php');
    } else {
        echo "Error" . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    echo "Email já cadastrado" . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

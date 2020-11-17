<?php

session_start();
$msg = $_POST['msg'];
$id = $_SESSION['id'];
$sql;


if ((strlen($msg) <= 0) || strlen($msg) > 140 ) {
    echo "<script> window.alert('Publicação muito grande ou vazia apenas 140 caracteres !'); </script>";
    echo "<script>window.location.href = 'home.php';</script>";

} else {
    $link = mysqli_connect('localhost', 'root', '', 'telalogincadastro');

    $sql = "insert into postagens (conteudo,fk_usuarios) values ('$msg', '$id');";

    $resultado = mysqli_query($link, $sql);

    echo "<script> window.alert('Publicação enviada !'); </script>";

    echo "<script>window.location.href = 'home.php';</script>";
}

?>
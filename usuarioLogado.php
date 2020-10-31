<?php

session_start();

$email = $_POST['email'];
$senha = md5($_POST['senha']);
$sql;
$resultado;

if((strlen($senha) > 5) && (strlen($email) > 0)) {
    $link = mysqli_connect('localhost', 'root', '', 'telalogincadastro');

    $sql = "select * from cadastrousuarios where email = '$email' and senha = '$senha';";

    $resultado = mysqli_fetch_all(mysqli_query($link, $sql));

    $_SESSION['nome'] = $resultado[0][1];
    $_SESSION['email'] = $resultado[0][2];
    $_SESSION['senha'] = $resultado[0][3];

    echo "<script>window.location.href = 'home.php';</script>";

    mysqli_close($link); 

}   elseif ((strlen($senha) == 0) || (strlen($email) == 0))  {
        echo "<script>alert('Usuario e/ou senha invalido!');</script>";
        echo "<script>window.location.href = 'index.php';</script>";
}   
?>
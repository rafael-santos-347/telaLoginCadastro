<?php

session_start();

$email = $_POST['email'];
$senha = md5($_POST['senha']);
$sql;
$resultado;

if((strlen($senha) > 5) && (strlen($email) > 0)) {
    $link = mysqli_connect('localhost', 'root', '', 'telalogincadastro');

    $sql = "select * from cadastrousuarios where email = '$email' and senha = '$senha';";

    $resultado = mysqli_fetch_assoc(mysqli_query($link, $sql));

    # Caso precise de ver toda a array
    # echo '<pre>';
    # print_r($resultado);
    # echo '</pre>';

    $_SESSION['nome'] = $resultado['nome'];
    $_SESSION['email'] = $resultado['email'];
    $_SESSION['senha'] = $resultado['senha'];
    $_SESSION['imagem'] = $resultado['imagem'];
    $_SESSION['id'] = $resultado['id_usuario'];

    echo "<script>window.location.href = 'home.php';</script>";

    mysqli_close($link); 

}   elseif ((strlen($senha) == 0) || (strlen($email) == 0))  {
        echo "<script>alert('Usuario e/ou senha invalido!');</script>";
        echo "<script>window.location.href = 'index.php';</script>";
}   
?>
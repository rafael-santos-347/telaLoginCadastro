<?php
    session_start();
  
    $id = $_GET['id'];

    if($id != $_SESSION['id']) {
        header('Location: home.php');
        exit;
    } else {
        $link = mysqli_connect('localhost', 'root', '', 'telalogincadastro');

        $sql = "delete from cadastrousuarios where id_usuario = '$id';";

        mysqli_query($link, $sql);

        session_destroy(); 

        echo "<script>window.alert('Conta apagada com sucesso !');</script>";

        header('Location: index.php');
    }
    
?>
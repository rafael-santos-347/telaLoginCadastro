<?php
    session_start();
    if(!isset($_SESSION['nome'])){
        header('Location: index.php');
        echo "<script>alert('Usuário e/ou senha inválido');</script>";
        exit;
    }
    
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>
    <link rel="stylesheet" href="css/global.css">
</head>
<body>
    <h1>Olá, <?php echo $_SESSION['nome']; ?></h1><hr style="margin-top: 10px;margin-bottom: 10px;">
    <a href="<?php session_destroy(); ?>">Sair</a>
    
</body>
</html>
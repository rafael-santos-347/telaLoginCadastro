<?php
    session_start();
    if(!isset($_SESSION['nome'])){
        header('Location: index.php');
        exit;
    }
    
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de <?php echo $_SESSION['nome']; ?></title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</head>
<body>

    <header class="container-fluid cor shadow-lg mx-0">
        <nav class="container row m-auto">
            <div class="col m-auto">
                    <a href="home.php"><img class="rounded-circle" style="height:8vh ;width:10vh;" src="<?php echo $_SESSION['imagem']; ?>" alt="Foto de <?php echo $_SESSION['nome']; ?>"></a>
                </div>
                <div class="col m-auto">
                    <h3>Olá, <?php echo $_SESSION['nome']; ?></h3>
                </div>
                <div class="col m-auto">
                <div class="dropdown">
                    <button class="btn dropdown-toggle text-white rounded-circle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        
                    </button>
                <div class="dropdown-menu  cor2" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="perfil.php">Meu Perfil</a>
                    <a class="dropdown-item" href="sair.php">Sair</a>
                </div>
                </div>

            </div>
           
        </nav>
    </header>

    <main class="container">
        <div class="card mb-3 mt-5" style="max-width: 100%;">
        <div class="row no-gutters">
            <div class="col-md-4 m-auto">
            <img class="rounded-circle card-img" style="height:28vh ;width:46vh;" src="<?php echo $_SESSION['imagem']; ?>" alt="Foto de <?php echo $_SESSION['nome']; ?>">
            </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"><?php echo $_SESSION['nome']; ?></h5>
                <p class="card-text">E-mail: <?php echo $_SESSION['email']; ?><br><div class="alert alert-danger" role="alert">
                Depois de apagar a conta, <strong>não</strong> será possivel reativa-la !
                </div></p>
                <p class="card-text"><small class="text-muted"><button onclick="msg_apaga_conta()" type="button" class="btn btn-danger">Apagar Conta</button></small></p>
            </div>

            <script>
                let validacao;
                function msg_apaga_conta() {
                    validacao = window.confirm('Deseja realmente cancelar a conta?');
                    if (!validacao) {
                        location.href = 'perfil.php';
                    } else {
                        location.href = 'apagar_conta.php?id=' + <?php echo $_SESSION['id']; ?>;
                    }
                }
            </script>

        </div>
        </div>
        </div>
    </main>

</body>
</html>
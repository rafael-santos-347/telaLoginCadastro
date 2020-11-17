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
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>

    <header class="container-fluid cor shadow-lg mx-0">
        <nav class="container row m-auto">
            <div class="col-1 m-auto">
                    <a href="perfil.php"><img class="rounded-circle" style="height:8vh ;width:10vh;" src="<?php echo $_SESSION['imagem']; ?>" alt="Foto de <?php echo $_SESSION['nome']; ?>"></a>
                </div>
                <div class="col-3 m-auto">
                    <h3>Olá, <?php echo $_SESSION['nome']; ?></h3>
                </div>
                <div class="col-4 m-auto">
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

    <main class="container mt-5 px-5">
        <form action="cadastro_postagem.php" method="POST" class="form-row m-auto">
            <input type="text" name="msg" placeholder="No que você está pensando, <?php echo $_SESSION['nome']; ?>?" class="col-7 pl-5 ml-5 form-control">
            <button type="submit" class="col-3 btn text-white">Publicar</button>
        </form>

        
        <?php
        $link = mysqli_connect('localhost', 'root', '', 'telalogincadastro');

        //$sql = "select * from postagens ;";

        $sql = "select * from postagens join cadastrousuarios where fk_usuarios = id_usuario order by id_postagem desc;";

        $resultado = mysqli_query($link, $sql);

        ## Para ver o resultado
        ## $resultado = mysqli_fetch_assoc(mysqli_query($link, $sql));
        ## echo '<pre>';
        ## print_r($resultado);
        ## echo '</pre>';

         if($resultado->num_rows > 0) {
            while($linha = $resultado->fetch_assoc()) {
            
        ?>
        
        <div class="card mt-5 px-5 mr-5">
            <div class="card-header">
            <h3><?php echo $linha['nome']; ?></h3>
            </div>
            <div class="card-body">
            <blockquote class="blockquote mb-0 row">
            <img class="rounded-circlecol"  style="height:15vh ;width:25vh;" src="<?php echo $linha['imagem']; ?>" alt="Foto de <?php echo $linha['nome']; ?>">
            <p class="col m-auto"><strong>Publicou: </strong><?php echo $linha['conteudo'];?></p>
            <cite title="140 Caracteres">Até 140 Caracteres</cite>
            </blockquote>
            </div>
        </div>

        <?php
            }
            } else {
                echo "Nenhuma postagem ainda !";
            }
         
        ?>


    </main>

</body>
</html>
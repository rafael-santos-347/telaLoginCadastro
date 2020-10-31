<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="stylesheet" href="css/global.css">
</head>
<body>
    <main>
        <section class="back">

        </section>
        <section class="quadro">
             <div class="tela_cadastro">
                <form action="cadastro_usuario.php" method="POST">
                    <h1>Cadastro</h1>
                    <input type="text" name="nome" placeholder="Digite seu nome">
                    <input type="email" name="email" placeholder="Digite seu email">
                    <input type="password" name="senha" placeholder="Digite sua senha">
                    <input type="password" name="senha2" placeholder="Confirme sua senha">
                    <button type="submit">Cadastrar</button><br>
                    <a href="index.php">Já possui cadastro? Faça o login</a>               

                </form>

             </div>
            

        </section>
    </main>
    
</body>
</html>
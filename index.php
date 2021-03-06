<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entre ou Cadastre-se</title>
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/login.css">

</head>
<body>
    <main>
        <section class="caixa_login">
            
           <div class="card">
            <form action="usuarioLogado.php" method="POST">
                <fieldset>
                    <legend><h1>Entre ou Cadastre-se</h1></legend>
                    <input type="email" name="email" placeholder="Digite seu email">
                    <input type="password" name="senha" placeholder="Digite sua senha"><br>
                    <button type="submit">Entrar</button><br>
                    <a href="cadastro.php">Ainda não possui um cadastro? Clique aqui</a>
                </fieldset>
            </form>
           </div>

        </section>

        <section id="img" class="caixa_img">
            <img src="imagens/map.png" alt="">
            <p>Imagem de <a target="_blank" href="https://pixabay.com/pt/users/graphicssc-1426978/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=961700">GraphicsSC</a> por <a target="_blank" href="https://pixabay.com/pt/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=961700">Pixabay</a></p>
        </section>

    </main>
    
</body>
</html>
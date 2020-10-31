<?php

/* boa pratica php não fechar essa tag somente para documentos que são inteiros em php */

/*  Recuperações das informações do formulario
    Validação dos dados
    cadastro em banco de dados    */
                            
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST["senha"];
$senha2 = $_POST["senha2"];

# Teste de funcionamento de conexão POST
# echo $nome .'<hr>'. $email .'<hr>'. $senha .'<hr>'. $senha2 .'<hr>';

# Verificações do cadastro
$validacao = true;
# Minimo Caracters

if (strlen($nome) <= 3 || strlen($email) <= 3) {
    $validacao = false;
    echo "<script> alert('O nome deve ter mais de 4 caracters !');</script>";
    echo "<script>window.location.href = 'cadastro.php';</script> ";
} elseif (strlen($senha) <= 5 || strlen($senha2) <= 5) {
    $validacao = false;
    echo "<script> alert('Digite no minimo 6 caracteres para senha !');</script>";
    echo "<script>window.location.href = 'cadastro.php';</script> ";
}

# Campo vazio

if (($nome == "" || $email == "") || ($senha == "" || $senha2 == "")) {
    echo "<script> alert('Preencha todos os campos !');</script>";
    echo "<script>window.location.href = 'cadastro.php';</script> ";
    $validacao = false;
} else if ($senha != $senha2) {
    $validacao = false;
    echo "<script> alert('As senhas não são iguais !');</script>";
    echo "<script>window.location.href = 'cadastro.php';</script> ";
}  else if ($validacao) {
    $link = mysqli_connect('localhost', 'root', '', 'telalogincadastro');

    # Verificação conexão

    if(!$link) {
        die ("Falha na conexão com o DB". mysqli_connect_erro());
    } 
    # Comandos SQL
    $senha_c = md5($senha);

    $sql = "insert into cadastrousuarios (nome, email, senha) 
    values ('$nome', '$email', '$senha_c')";

    $validacao_email = "select email from cadastrousuarios where email = '$email';";

    # Cadastro no BD

    $resultado = mysqli_query($link, $validacao_email);
      
    while ($linha = $resultado->fetch_assoc()) {
         echo "<script>alert('Email já cadastrado !'); window.location.href = 'cadastro.php';</script> ";
    }

    mysqli_query($link, $sql);

    # Finalizando cadastro e retornando a pagina
    echo "<script>
     alert('Cadastro realizado com sucesso !');
     window.location.href = 'index.php';
     </script>";
     # Fechando conexão
     mysqli_close($link);   
}

?>
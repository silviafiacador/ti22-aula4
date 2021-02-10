<?php
// movimentar os conteúdos do formulário para as variáveis de memória - lembrar que método post utiliza a variável superglobal $_POST[]
$nomeusuario = $_POST['nomeusuario'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];   //senha está aberta
//função trim - retira espaços antes e depois
//password_hash - criptografa

// ver o problema na validaçao
// $hashsenha = trim(password_hash($senha, PASSWORD_DEFAULT));

//montar a string $sql com os comandos necessários para a inserção de um registro no banco de dados.
$sql = "INSERT INTO tbl_usuarios (nome, usuario, email, senha) VALUES ('$nomeusuario','$usuario', '$email', '$senha')";

//incluir a rotina de conexão com o banco de dados
include "conexao.php";

//executando o comando sql no banco de dados
mysqli_query($conn, $sql);

//fechando a instância da conexão
mysqli_close($conn);
?>
<!-- retornando para o index.php com o JS -->
<script>
    alert ('Usuário inserido com sucesso!');
    window.location.href='index.php';
</script>


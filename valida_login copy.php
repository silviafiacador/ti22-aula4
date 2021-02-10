<?php
    //variáveis superglobais
    //método post -> variável superglobal $_POST[]
    //$_POST['Silvia','1234']

    $usuario=$_POST['usuario'];
    $senha=$_POST['senha'];

    $sql= "SELECT * FROM tbl_usuarios WHERE usuario='$usuario'";
 
    include_once "conexao.php";

    //executando
    $resultado = mysqli_query($conn, $sql);
    
    //verificando se encontrou o usuário cadastrado  na base de dados
    if ($campo=mysqli_fetch_array($resultado))
    {
        //encontrou um usuário cadastrado
        //caso tenha encontrado vamos compara as senhas
        $hashsenha= $campo['senha'];
        
     
        if (password_verify($senha,$hashsenha)==TRUE) {
            //a senha está correta
            //usuário está com autorização para entrar
          ?>
          <script>  
            alert ("Usuário logado");
            window.location.href="principal.php";
          </script>
          <?php  
        }
        else {
              
            ?>
            <script>  
              alert ("Senha não confere");
              // window.location.href="index.php";
          </script>

        <?php

        }
      
    }
    else {
      ?>
      <script>
        alert ("Usuário não cadastrado");
        window.location.href="index.php";
      </script>

      <?php 
    }
    
?>
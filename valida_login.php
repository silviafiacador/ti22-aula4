<?php
    //variáveis superglobais
    //método post -> variável superglobal $_POST[]
    //$_POST['Silvia','1234']

    $usuario=$_POST['usuario'];
    $senha=$_POST['senha'];

    echo "Usuário: ".$usuario;
    echo "<br>";
    echo "Senha: ".$senha;


?>
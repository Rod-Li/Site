<?php
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    function Imprimir ($nome, $email, $senha){
        echo "Nome: $nome <br/>";
        echo "Email: $email <br/>";
        echo "Senha: $senha <br/>";
    }

    Imprimir ($nome, $email, $senha);
?>

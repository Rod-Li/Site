<?php
session_start();
include "conexao_site.php";


    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    $nome_arma = filter_input(INPUT_POST, 'nome_arma', FILTER_SANITIZE_STRING);
    $fabricante = filter_input(INPUT_POST, 'fabricante', FILTER_SANITIZE_NUMBER_INT);
    $tipo_arma = filter_input(INPUT_POST, 'tipo_arma', FILTER_SANITIZE_NUMBER_INT);
    $raridade = filter_input(INPUT_POST, 'raridade', FILTER_SANITIZE_STRING);    
    $texto_red = filter_input(INPUT_POST, 'texto_red', FILTER_SANITIZE_STRING);   
    $habilidade = filter_input(INPUT_POST, 'habilidade', FILTER_SANITIZE_STRING);
    $drop = filter_input(INPUT_POST, 'drops', FILTER_SANITIZE_STRING); 

    
    $conexao = getConnection();

    $query = "UPDATE projeto SET nome_arma = '$nome_arma', fabricante = 'fabricante' , tipo_arma = '$tipo_arma' , raridade = '$raridade' , texto_red = '$texto_red' , habilidade = '$habilidade', drops = '$drops', modificar= NOW() WHERE id = '$id'";
    $resultado_usuario = mysqli_query($conexao,$query);
    if (mysqli_affected_rows($conexao)){
            echo "Arma alterada com sucesso!";
            header("Location: lista.php");
        }else{
            echo "Erro ao alterar arma!";
            header("Location: editar.php?id=$id");
        }

    mysqli_close($conexao);


?>
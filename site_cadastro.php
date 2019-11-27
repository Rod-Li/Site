<?php
session_start();
include "conexao_site.php"; 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Projeto</title>
</head>
<body>
    <h3><a href="http://localhost/p1cc/Projeto/inicio.php">Inicio</a><h3>
    <h3><a href="http://localhost/p1cc/Projeto/site_cadastro.php">Fabrica de Armas</a><h3>
    <h3><a href="http://localhost/p1cc/Projeto/lista.php">Lista de armas</a><h3>
    <h1>Fabrica de Arma</h1> 

    <?php

		if(isset($_SESSION['msg'])){
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
		}
		?>

    <form action="banco.php" method="POST">
        <p>Nome da arma: <input type="text" name="nome_arma" placeholder = "Digite o nome da arma"/></p>
        <p>Fabricante: <input type="text" name="fabricante" placeholder = "Digite  o fabricante"/></p>
        <p>Tipo de arma: <input type="text" name="tipo_arma" placeholder = "Digite o tipo da arma"/></p>
        <p>Raridade: <input type="text" name="raridade" placeholder = "Digite a raridade"/></p>
        <p>Texto Vermelho: <input type="text" name="texto_red" placeholder = "Digite o Texto Red"/></p>
        <p>Habilidade: <input type="text" name="habilidade" placeholder = "Digite a Habilidade"/></p>
        <p>Drop: <input type="text" name="drops" placeholder = "Digite o tipo de Drop"/></p>
        <button>Criar Arma</button>
    </form>

</body>
</html>
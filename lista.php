<?php
    include "conexao_site.php";
    ?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Projeto</title>
</head>
<body>
    
    <h4><a href="http://localhost/p1cc/Projeto/inicio.php">Inicio</a><h4>
    <h4><a href="http://localhost/p1cc/Projeto/site_cadastro.php">Fabrica de Armas</a><h4>
    <h4><a href="http://localhost/p1cc/Projeto/lista.php">Lista de armas</a><h4>
    <h3>Lista de Armas</h3>
<?php

    $query = "SELECT * FROM projeto";
    $listar_usuarios =  mysqli_query(getConnection(),$query);

    while($row_usuario = mysqli_fetch_assoc($listar_usuarios)){
        echo"Nome da Arma: " .  $row_usuario ['nome_arma'] . "<br>";
        echo"Fabricante: " .  $row_usuario ['fabricante'] . "<br>";
        echo"Tipo da arma: " .  $row_usuario ['tipo_arma'] . "<br>";
        echo"Raridade: " .  $row_usuario ['raridade'] . "<br>";
        echo "Texto Vermelho: " . $row_usuario['texto_red']  . "<br>";
        echo"Habilidade: " .  $row_usuario ['habilidade'] . "<br>";
        echo"Drop: " .  $row_usuario ['drops'] . "<br>";
        echo "<a href = 'editar.php?id=" . $row_usuario['id']  . "'>Editar</a>   ";
        echo "<a href = 'apagar.php?id=" . $row_usuario['id']  . "'>Apagar</a><br><hr>";
    }

?>
</body>
</html>
<?php
    include "conexao_site.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projeto</title>
</head>
<body>
<h3><a href="http://localhost/p1cc/Projeto/inicio.php">Inicio</a><h3>
    <h3><a href="http://localhost/p1cc/Projeto/site_cadastro.php">Fabrica de Armas</a><h3>
    <h3><a href="http://localhost/p1cc/Projeto/lista.php">Lista de armas</a><h3>

    <?php
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM projeto WHERE id = '$id' ";
    $resultado_usuario = mysqli_query(getConnection(),$query);
    $row_usuario = mysqli_fetch_assoc($resultado_usuario);

    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    
    <h1>Editar</h1><hr>
    <form action="proc_editar.php" method="POST">
        <input type="hidden" name="id" value = "<?php echo $row_usuario ['id']; ?>">
        
        <label>Nome da arma: </label><input type="text" name="nome_arma" placeholder = "Nome da arma" value = "<?php echo $row_usuario ['nome_arma']; ?>"/><br><br>
        <label>Fabricante: </label><input type="text" name="fabricante" placeholder = "Digite o fabricante" value = "<?php echo $row_usuario ['fabricante']; ?>"/><br><br>
        <label>Tipo da arma: </label><input type="text" name="tipo_arma" placeholder = "Tipo da arma" value = "<?php echo $row_usuario ['tipo_arma']; ?>"/><br><br>
        <label>Raridade: </label><input type="text" name="raridade" placeholder = "Digite a raridade" value = "<?php echo $row_usuario ['raridade']; ?>"/><br><br>
        <label>Texto Vermelho: </label><input type="text" name="texto_red" placeholder = "Digite o Texto Red" value = "<?php echo $row_usuario ['texto_red']; ?>"/><br><br>
        <label>Habilidade: </label><input type="text" name="habilidade" placeholder = "Digite a Habilidade" value = "<?php echo $row_usuario ['habilidade']; ?>"/><br><br>
        <label>Drop: </label><input type="text" name="drops" placeholder = "Digite o tipo de Drop" value = "<?php echo $row_usuario ['drops']; ?>"/><br><br>
        <button>Editar</button>
    </form>

    
</body>
</html>
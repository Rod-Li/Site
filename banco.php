<?php
session_start();
?>
<?php
include "conexao_site.php";

    $nome_arma = $_POST["nome_arma"];
    $fabricante = $_POST["fabricante"];
    $tipo_arma = $_POST["tipo_arma"];
    $raridade = $_POST["raridade"];
    $texto_red = $_POST["texto_red"];
    $habilidade = $_POST["habilidade"];
    $drops = $_POST["drops"];
    
    $conexao = getConnection();

    $query = "INSERT INTO projeto (nome_arma, fabricante, tipo_arma, raridade, texto_red, habilidade, drops) VALUES ('$nome_arma', '$fabricante', '$tipo_arma', '$raridade', '$texto_red', '$habilidade', '$drops')";
    mysqli_query(getConnection(),$query);

    if(mysqli_insert_id($conexao)){
        $_SESSION['msg'] = "<p style='color:green;'>Erro ao criar arma</p>";
	    header("Location: site_cadastro.php");
    }else{
        $_SESSION['msg'] = "<p style='color:green;'>Arma criada com sucesso</p>";
	    header("Location: site_cadastro.php");
    }

    mysqli_close($conexao);
?>
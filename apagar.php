<?php
session_start();

include "conexao_site.php";

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$conexao = getConnection();

$query = "DELETE FROM projeto WHERE id = '$id'";
$resultado_apagar = mysqli_query($conexao, $query);

if (mysqli_affected_rows($conexao)){
    header("Location: lista.php");
}else{
    header("Location: lista.php?id=$id");
}

mysqli_close($conexao);





?>

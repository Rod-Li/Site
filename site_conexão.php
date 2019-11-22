<?php
    function getConnection(){
        $conexao = mysqli_connect("localhost","root","","pessoasdb_p1cc");

        return $conexao;
    }
?>

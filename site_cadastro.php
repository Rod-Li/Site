<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Projeto</title>
    <style>
        p{
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 32%;
            font-size: 19px;    
        }
        h1{            
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 11%;
            font-size: 35px;
        }
        form{
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 13%;
            font-size: 16px;  
        }
        input{
            color: rgb(255, 255, 255);
            background-color: rgb(34, 34, 34);
        }
        body {
            color: rgb(255, 255, 255);
            background-color: black;
        }
        button{
            color: rgb(255, 255, 255);
            background-color: rgb(34, 34, 34);
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 75%;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <br/><br/><br/><br/><br/><br/><h1>Cadastro</h1> 
    <form id="formDados" action="site_cadastro2.php" method="POST" onsubmit="return validar()">
        <p>Nome: <br/></p> <input type="text" name="nome" /><br/><br/>
        <p>Email: <br/></p> <input type="text" name="email" /><br/><br/> 
        <p>Senha: <br/></p> <input type="text" name="senha" /><br/><br/>
        <button>Cadastrar</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script>
        let form = document.querySelector("#formDados");

        function validar(){
            if(form.nome.value == false){
                Swal.fire(
                'Error',
                'Digite um Nome!')
                return false;
            }
            if(form.email.value == false){
                Swal.fire(
                'Error',
                'Digite um Email!',
                'error')
                return false;
            }
            if(form.senha.value == false){
                Swal.fire(
                'Error',
                'Digite uma Senha!',
                'error')
                return false;
            }
                return true;
        
        }
    </script>

    <?php
        include 'conexao_site.php';

        function inserir($nome, $email, $senha){
            
            $conexao = getConnection();

            $query = "INSERT INTO projeto (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

            if (mysqli_query($conexao, $query)){
                echo "Cadastrado Com Sucesso! <br/>";
            }else{
                echo "Erro ao realizar Cadastro! <br/>";
            }

            mysqli_close($conexao);
        }
        function listarTodos(){
            $conexao = getConnection();
        
            $query = "SELECT * FROM projeto";
        
            $projeto = mysqli_query($conexao, $query);
        
            mysqli_close($conexao);
        
            return $projeto;
        }
        
        function alterar($id, $nome, $email, $senha){
            $conexao = getConnection();
        
            $query = "UPDATE projeto SET nome = '$nome', email = '$email' ,senha = '$senha' WHERE id = '$id'";
        
            if(mysqli_query($conexao, $query) == true){
                echo "Seus dados foram atualizados!";
            }else{
                echo "Erro ao alterar dados!";
            }
        
            mysqli_close($conexao);
        }
        
        function deletar($id){
            $conexao = getConnection();
    
            $query = "DELETE FROM projeto WHERE id = '$id'";
    
            if(mysqli_query($conexao, $query) == true){
                echo "Seus dados foram excluido!";
            }else{
                echo "Erro ao tentar excluir dados!";
            }
    
            mysqli_close($conexao);
        }
    ?>
</body>
</html>

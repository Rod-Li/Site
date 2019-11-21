<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Projeto</title>
</head>
<body>
<h1>Cadastro</h1>
    <form id="formPessoa" action="site_cadastro2.php" method="POST" onsubmit="return validar()">
        Nome: <input type="text" name="nome" /><br/><br/>
        Email: <input type="text" name="email" /><br/><br/> 
        Senha: <input type="text" name="senha" /><br/><br/>
        <button>Cadastrar</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <script>
        let form = document.querySelector("#formPessoa");

        function validar(){
            if(form.nome.value == false){
                Swal.fire(
                'Error',
                'Informe um Nome!')
                return false;
            }
             if(form.email.value == false){
                Swal.fire(
                'Error',
                'Informe um Email!',
                'error')
                return false;
            }
            if(form.senha.value == false){
                Swal.fire(
                'Error',
                'Informe uma Senha!',
                'error')
                return false;
            }
                return true;
        
        }
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Validação de Dados</title>
</head>
<body>
    
    <div class="container">
        
        <h1>Criar sua conta</h1>
        
            <form action="index.php" method="POST">
                <input type="text" name ="nome" class="inputUsuario" placeholder="Nome" required><br>

                <input type="password" name="senha" id="senha" onchange="onChange()" class="inputUsuario" placeholder="Senha" required><br>

                <input type="password" name="confSenha" id="confSenha" onchange="onChange()" class="inputUsuario" placeholder="Confirmar" required><br><br>

                <input type="submit" name="submit" id="submit">
            </form>
    </div>

    <!-- Verifica se as senhas coincidem -->
    <script>
        const senha = document.getElementById('senha');
        const confSenha = document.getElementById('confSenha');

        function onChange(){
            if(confSenha.value === senha.value){
                confSenha.setCustomValidity('');


                // Caso sejam iguais, o php é acionado ao apertar o botão
                <?php
                    if(isset($_POST["submit"])){

                    include_once("config.php");

                    $nome = $_POST["nome"];
                    $senha = $_POST["senha"];

                    $result = mysqli_query($conexao, "INSERT INTO clientesinfo(nome, senha) VALUES('$nome', '$senha')");
                    }       
                ?>
            }   
            else{
                confSenha.setCustomValidity('Senhas não coincidem');
            }
        }
    </script>

    
</body>
</html>
<?php
    if(isset($_POST["submit"])){

        include_once("config.php");

        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $genero = $_POST["genero"];
        $data_nasc = $_POST["data_nascimento"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $endereco = $_POST["endereco"];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, telefone, genero, data_nasc, cidade, estado, endereco) VALUES('$nome', '$email', '$telefone', '$genero', '$data_nasc', '$cidade', '$estado', '$endereco')");

    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulário</title>
</head>
<body>
    
    <div class="container">

        <!-- O action deve ser o nome do prório arquivo! -->
        <form action="index.php" method="post">
            <fieldset>
                <legend><strong>Cadastro de Clientes</strong></legend>
                <br>

                <!-- Nome do usuário -->
                <div class="inputContainer">
                    <input type="text" name="nome" id="nome" class="inputUsuario" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>

                <!-- Email -->
                <div class="inputContainer">
                    <input type="text" name="email" id="email" class="inputUsuario" required>
                    <label for="email" class="labelInput">E-mail</label>
                </div>
                <br><br>
                
                <!-- Telefone -->
                <div class="inputContainer">
                    <input type="tel" name="telefone" id="telefone" class="inputUsuario" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br><br>
                
                <!-- Gênero -->
                <p>Gênero</p>
                <br>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br><br>

                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br><br>

                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>

                <!-- Data de nascimento -->
                <label for="data_nascimento"><strong>Data de nascimento</strong></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>

                <!-- Localização -->
                <div class="inputContainer">
                    <input type="text" name="cidade" id="cidade" class="inputUsuario" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>

                <div class="inputContainer">
                    <input type="text" name="estado" id="estado" class="inputUsuario" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>

                <div class="inputContainer">
                    <input type="text" name="endereco" id="endereco" class="inputUsuario" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>

    </div>

</body>
</html>
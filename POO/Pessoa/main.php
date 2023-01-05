<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações pessoais</title>
</head>
<body>
    
    <form action="main.php" method="POST">

        <label for="nome">Nome:</label>
        <input type="text" name="nome"><br>

        <label for="idade">Idade:</label>
        <input type="number" name="idade"><br>

        <input type="submit">
    </form>

    <?php
        include_once("pessoa.php");

        $nome = $_POST["nome"];
        $idade = $_POST["idade"];

        $usuario = new Pessoa($nome,$idade);
        $usuario->socializar();
    ?>

</body>
</html>
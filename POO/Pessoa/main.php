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

        <input type="text" name="nome" placeholder="Insira seu nome">

        <select name="escolaridade">
            <option value="ens_fund">Ensino Fundamental</option>
            <option value="ens_med">Ensino Médio</option>
            <option value="ens_sup">Ensino Superior</option>
        </select>

        <input type="text" name="idade" placeholder="Sua idade">

        <input type="submit">
    </form>

    <?php

        include_once("pessoa.php");

        $nome = $_POST["nome"];
        $idade = $_POST["idade"];

        $usuario = new Pessoa($nome,$idade);
        $usuario->socializar();
        $usuario->getEscolaridade();
    ?>

</body>
</html>
<?php

    include_once('index.php');
    include_once('dbConexao.php');

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    if(isset($_POST['adicionar'])){

        $add = mysqli_query($conn, "INSERT INTO clientesinfo(nome, senha) VALUES('$nome', '$senha')");

    }

    if(isset($_POST['deletar'])){

        header('Location: deletar.php');

        $idUsuario = $_POST['idUsuario'];

        $del = mysqli_query($conn, "DELETE FROM clientesinfo WHERE id = $idUsuario");
    }

?>
<?php

    // Checar se tem o id ou não
    if(isset($_GET['id'])){

        $id = $_GET['id'];

        $dbHost = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName = 'myshop';

        // Criar conexão
        $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

        $sql = "DELETE FROM clients WHERE id=$id";
        $result = mysqli_query($conn, $sql);
    }

    header('Location: index.php');
    exit;
?>
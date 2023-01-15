<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>CRUD</title>
</head>
<body>
    
    <div class="container my-5">
        <h2>List of clients</h2>
        <a class="btn btn-primary" role="button" href="create.php">New Client</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                <?php
                    $dbHost = 'localhost';
                    $dbUsername = 'root';
                    $dbPassword = '';
                    $dbName = 'myshop';

                    // Criar conexão
                    $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

                    // Checar conexão
                    if($conn->connect_error){
                        die("Connection failed: " . $connection->connect_error);
                    }

                    // Ler todos os registros
                    $readAll = 'SELECT * FROM clients';
                    $result = mysqli_query($conn, $readAll);

                    // Caso haja um erro na solicitação
                    if(!$result){
                        die('Invalid query: ' . $conn->connect_error);
                    }

                    while($row = $result->fetch_assoc()){

                        // Depois do nome do arquivo na área do botão, pus um "? e depois o valor do id. Assim ele vai saber quem é o cliente que quero editar ou deletar ao clicar no botão."
                        echo "
                        <tr>
                            <td>$row[id]</td>
                            <td>$row[name]</td>
                            <td>$row[email]</td>
                            <td>$row[phone]</td>
                            <td>$row[address]</td>
                            <td>$row[created_at]</td>
                            <td>
                                <a class='btn btn-primary' href='edit.php?id=$row[id]'>Edit</a>
                                <a class='btn btn-danger' href='delete.php?id=$row[id]'>Delete</a>
                            </td>
                        </tr>
                        ";
                    }                
                ?> 
            </tbody>
        </table>
    </div>

</body>
</html>
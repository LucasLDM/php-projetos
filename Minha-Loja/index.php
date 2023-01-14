<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Minha Loja</title>
</head>
<body style="margin: 50px;">
    <h1>List of Employees</h1>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Action</th>
            </tr> 
        </thead>

        <tbody>
            <?php

                $dbHost = 'localhost';
                $dbUsername = 'root';
                $dbPassword = '';
                $dbName = 'minhaloja';

                // Criar conexão
                $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

                // Checar conexão
                if($conn->connect_error){
                    die ("Conexão mal sucedida!" . $conn->connect_error);
                }

                // Ler todos os registros da tabela employees
                $readAll = "SELECT * FROM employees";
                $result = mysqli_query($conn, $readAll);

                // Caso dê algum erro ao se comunicar ao banco com SQL
                if(!$result){
                    die("Solicitação inválida!");
                }

                // O código é executado até não houver mais dados para apresentar
                while($row = $result->fetch_assoc()){
                    echo
                    "
                        <tr>
                        <td>".$row['id']."</td>
                        <td>".$row['first_name']."</td>
                        <td>".$row['last_name']."</td>
                        <td>".$row['email']."</td>
                        <td>".$row['address']."</td>
                        <td>
                            <a class='btn btn-primary btn-sm' href='update'>Update</a>
                            <a class='btn btn-danger btn-sm' href='delete'>Delete</a>
                        </td>
                    "; 
                }

                
            ?>
        </tbody>
    </table>
</body>
</html>
<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'myshop';

    // Criar conexão
    $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    // Variáveis que vão armazenar dados do formulário
    $name = '';
    $email = '';
    $phone = '';
    $address = '';

    // Inicializando a mensagem de erro e sucesso
    $errorMessage = '';
    $successMessage = '';

    // Checando se os dados do formulários foram "submitados" usando o método POST (se clicou no botão de criar)
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];

        // Checando para ver se TODOS os campos foram preenchidos
        do{
            // Caso não, irá mostrar uma mensagem de erro
            if(empty($name) || empty($email) || empty($phone) || empty($address)){
                $errorMessage = 'All the fields are required!';
                break;
            }

            // Adicionando novo cliente no banco de dados

            $sql = "INSERT INTO clients(name, email, phone, address) VALUES('$name', '$email', '$phone', '$address')";

            $result = mysqli_query($conn, $sql);

            if(!$result){
                $errorMessage = "Invalid query: " . $conn->error;
                break;
            }

            $name = '';
            $email = '';
            $phone = '';
            $address = '';

            $successMessage = 'Client added successfully!';

            header('Location: index.php');
            exit; // Fecha a execução deste arquivo

        }while(false);
        
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <!-- Script para conseguir fechar a mensagem de erro -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Create client</title>
</head>
<body>
    
    <div class="container my-5">
        <h2>New Client</h2>

        <!-- A mensagem de erro irá aparecer acima do formulário -->
        <?php
            if(!empty($errorMessage)){
                echo "
                    <div class='alert alert-warning alert-dismissible fade show' role='alert'> 
                        <strong>$errorMessage</strong>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
                    </div>";
            }
        ?>
        <form action="create.php" method="POST">

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Phone</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Address</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="address" value="<?php echo $address; ?>">
                </div>
            </div>


            <!-- A mensagem de sucesso irá aparecer antes dos botões -->
            <?php
                if(!empty($successMessage)){
                    echo "
                        <div class='alert alert-success alert-dismissible fade show' role='alert'> 
                            <strong>$successMessage</strong>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
                        </div>";
                }      
            ?>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="../CRUD/index.php" role="button">Cancel</a>
                </div>
            </div>

        </form>
    </div>

</body>
</html>
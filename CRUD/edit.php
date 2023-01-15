<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'myshop';

    // Criar conexão
    $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    $id = '';
    $name = '';
    $email = '';
    $phone = '';
    $address = '';

    $errorMessage = '';
    $successMessage = '';

    if($_SERVER['REQUEST_METHOD'] == 'GET'){

        // Checando se temos o id do cliente ou não. Se o id do cliente não existe, vai redirecionar para a página principal e fechar o arquivo

        if(!isset($_GET['id'])){
            header('Location: index.php');
        }

        // Caso contrário, a variável vai receber o valor do id
        $id = $_GET['id'];

        // Ler o registro do cliente selecionado do banco de dados
        $sql = "SELECT * FROM clients WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
        $row = $result->fetch_assoc();

        // Caso não tenhamos dados dele no banco de dados
        if(!$row){
            header('Location: index.php');
            exit;
        }

        // Aqui vamos armazenar os dados do banco de dados nestas variáveis. E estas variáveis estarão mostrados no formulário 
        $name = $row['name'];
        $email = $row['email'];
        $phone = $row['phone'];
        $address = $row['address'];
    }
    else{
        
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];

        // Todos os campos devem estar preenchidos!
        do{

            if(empty($id) || empty($name) || empty($email) || empty($phone) || empty($address)){
                $errorMessage = 'All the fields are required!';
                break;
            }

            // Este sql vai atualizar os dados do cliente por meio do id
            $sql = "UPDATE clients SET name='$name', email='$email', phone='$phone', address='$address' WHERE id=$id";
            $result = mysqli_query($conn ,$sql);

            if(!$result){
                $errorMessage = 'Invalid query!' . $conn->error;
                break;
            }

            $successMessage = 'Client has been updated successfully!';
            
            header("Location: index.php");
            exit;

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
        <form action="edit.php" method="POST">

            <input type="hidden" name="id" value="<?php echo $id; ?>">

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
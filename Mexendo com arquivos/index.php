<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Reclamações</title>
</head>
<body>

    <form action="upload.php" method="POST" enctype="multipart/form-data">

        <!-- Nome da empresa -->
        <label>Nome da empresa </label>
        <input type="text" name="nomeEmpresa"><br>

        <!-- Relato -->
        <label>Relato</label><br>
        <textarea name="relato" cols="30" rows="10" maxlength="300"></textarea><br>

        <!-- Enviar arquivo -->
        <label>Envie um arquivo</label><br>
        <input type="file" name="arquivo"><br>
        <button type="submit" name="submit">Enviar</button>
    </form>

</body>
</html>
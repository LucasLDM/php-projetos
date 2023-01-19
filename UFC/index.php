<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UFC</title>
</head>
<body>

    <pre>
        <?php
            include_once "Lutador.php";

            $lutador = array();

            $lutador[0] = new Lutador("Cabeçudo", "Brasil", 30, 1.78, 68.9, 11, 2, 1);
            $lutador[1] = new Lutador("Zé Martelo", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
            $lutador[2] = new Lutador("Pedro Machado", "Brasil", 30, 1.81, 105.7, 12, 2, 4);
            $lutador[3] = new Lutador("Tonho Couve-flor", "Portugal", 37, 1.70, 119.3, 5, 4, 3);
            $lutador[4] = new Lutador("Chico Alicate", "Brasil", 35, 1.65, 80.9, 12, 2, 1);
            $lutador[5] = new Lutador("João Polvo", "Portugal", 20, 1.65, 57.1, 22, 1, 1);

            $lutador[3]->ganharLuta();
            $lutador[3]->apresentar();
            $lutador[3]->status();

            $lutador[0]->apresentar();
            $lutador[0]->status();
        ?>
    </pre>

</body>
</html>
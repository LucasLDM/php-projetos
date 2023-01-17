<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta no banco</title>
</head>
<body>
    
    <pre>
        <?php
            include_once "ContaBanco.php";

            $pessoa1 = new ContaBanco(); // Lucas
            $pessoa2 = new ContaBanco(); // Ana

            $pessoa1->abrirConta("CC");
            $pessoa1->setDono("Lucas");
            $pessoa1->setNumConta("1111");
            $pessoa1->depositar(300);
            $pessoa1->sacar(350);

            $pessoa2->abrirConta("CP");
            $pessoa2->setDono("Ana");
            $pessoa2->setNumConta("2222");
            $pessoa2->depositar(500);
            $pessoa2->sacar(650);

            $pessoa1->pagarMensalidade();
            $pessoa2->pagarMensalidade();

            $pessoa1->fecharConta();
            $pessoa2->fecharConta();

            print_r($pessoa1);
            print_r($pessoa2);
        ?>
    </pre>

</body>
</html>
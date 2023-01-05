<?php

    /*
     * Ocorrência anormal que afeta o funcionamento da aplicação.
     * Exception é a classe base para todas as Exceptions
     * message, code, file, line
     */

    class Newsletter{

        public function cadastrarEmail($email){

            // Se o e-mail não for válido (deve ter @ e . )
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

                throw new Exception("E-mail inválido!", 1);
            }
            else{
                echo "Email cadastrado com sucesso!";
            }
        }

    }

    $newsletter = new Newsletter();

    // Vai tentar validar o e-mail
    try{
        $newsletter->cadastrarEmail("ana@blab."); // Inválido (mostra a Exception)
        // $newsletter2->cadastrarEmail("ana@gmail.com"); // E-mail válido!
    }
    // Caso não dê, o objeto da classe Exception mostra a mensagem que vc colocou lá em cima, sem dar um "fatal error"
    catch (Exception $e){
        echo "Mensagem: " . $e->getMessage() . "<br>"; // "E-mail inválido!"
        echo "Código: " . $e->getCode() . "<br>"; // 1
        echo "Arquivo(path): " . $e->getFile() . "<br>"; // C:\xampp\htdocs\php-projetos\Newsletter\main.php
        echo "Linha: " . $e->getline();
    }



?>
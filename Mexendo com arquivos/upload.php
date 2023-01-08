<?php

    if(isset($_POST["submit"])){


        // Este SUPER GLOBAL pega todas as informações do arquivo
        $arquivo = $_FILES["arquivo"]; 

        // Pega o nome do arquivo
        $nomeArquivo = $arquivo["name"];

        // Caminho temporário
        $tempArquivo = $arquivo["tmp_name"];
        $tamanhoArquivo = $arquivo["size"];
        $erroArquivo = $arquivo["error"];
        $tipoArquivo = $arquivo["type"];

        // Pegando apenas a extensão do arquivo
        $arquivoExtensao = explode('.', $nomeArquivo);
        $arquivoExtensaoReal = strtolower(end($arquivoExtensao));

        $arquivosPermitidos = array("jpg", "jpeg", "png", "pdf");

        // Checando para saber se um arquivo tem uma das extensões permitidas
        if(in_array($arquivoExtensaoReal, $arquivosPermitidos)){

            // Se não houver erro, e for menor que 5mb
            if($erroArquivo === 0){

                if($tamanhoArquivo < 5_000_000){
                    // Dando um id para cada imagem, caso elas tenham o mesmo nome
                    $nomeArquivoNovo = uniqid('', true) . "." . $arquivoExtensaoReal;

                    // Inserindo o caminho da imagem
                    $arquivoDestino = 'uploads/' . $nomeArquivoNovo;

                    // Movendo o caminho antigo para o novo
                    move_uploaded_file($tempArquivo, $arquivoDestino);
                    header("Location: index.php?uploadsuccess");
                }
                else{
                    echo "O seu arquivo é muito pesado!";
                }
            }
            else{
                echo "Houve um erro ao enviar o arquivo.";
            }
        }
        else{
            echo "Você não pode enviar arquivos deste formato!";
        }

    }

?>
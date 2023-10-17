<?php
    /* coisas a fazer:
        - verificar se todas as strings tem pelo menos 10 caracteres
        - verificar se a pessoa tem mais de 18.
    */

    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $ano = $_POST["ano"];
    $mensagem = "";

    $tamNome = strlen($nome);
    $tamSobrenome = strlen($sobrenome);
    $tamEmail = strlen($email);
    $tamSenha = strlen($senha);

    if(($tamNome >= 5) && ($tamSobrenome >= 6) && ($tamEmail >= 10) && ($tamSenha >= 10)){
        if((2023 - $ano) >= 18){
            $mensagem = "Gravado com sucesso";
        }
    }
    else{
        $mensagem = "Grave uma senha mais forte e confira as informacoes digitadas";
    }

    $json = json_encode($mensagem);

    echo $json;



?>
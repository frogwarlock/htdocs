<?php

    $email = $_POST["email"]; // recebe

    $comp = strlen($email); //verif. tamanho

    $mensagem = "";

    if ($comp > 20){
        $mensagem = "maior";
    }
    else{
        $mensagem = "menor";
    }

    $json = json_encode($mensagem);

    echo $json; //imprimir somente em echo o que retorna pro front, se tiver mais de um pode dar erro.

?>
<?php

    $arquivo = $_FILES["arquivo"];

    print_r($arquivo);

    $novo_arquivo = "../upload/".$arquivo["name"];

    

    if(pathinfo($_FILES["arquivo"]["type"] != "image/png")){

        echo("Tipo de arquivo inválido.");

    } else {

        move_uploaded_file($arquivo["tmp_name"], $novo_arquivo);
    }


?>
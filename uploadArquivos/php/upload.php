<?php

    $arquivo = $_FILES["arquivo"];

    $novo_arquivo = "../upload/".$arquivo["name"];

    move_uploaded_file($arquivo["tmp_name"], $novo_arquivo);


?>
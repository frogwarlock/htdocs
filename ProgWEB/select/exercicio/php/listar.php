<?php

    $conexao = mysqli_connect("localhost:3306", "root", "test", "musicas_favoritas");

    $resultado = mysqli_query($conexao, "SELECT * FROM musica");

    $dados = array();

    while($registro = mysqli_fetch_assoc($resultado)){
        array_push($dados, $registro);
    }

    $json = json_encode($dados);

    echo $json;



?>
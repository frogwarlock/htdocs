<?php

    $conexao = mysqli_connect("localhost:3306", "root", "test", "pucpr");

    $resultado = mysqli_query($conexao, "SELECT * FROM estudante");

    $dados = array();

    // faz verificações e enquanto tiver conteudo nos fetch(verdadeiro) roda while
    while($registro = mysqli_fetch_assoc($resultado)){

        array_push($dados, $registro);
    }

    $json = json_encode($dados);
    
    echo $json;

?>
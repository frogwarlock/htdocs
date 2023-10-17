<?php 

    $pais = $_POST["pais"];

    $mensagem = "";

    if ($pais == "brasil"){
        $mensagem = "Sua moeda é o REAL";
    }
    else if($pais == 'eua'){
        $mensagem = "Sua moeda é o DÓLAR";
    }
    else if($pais == 'india'){
        $mensagem = "Sua moeda é o RÚPIA";
    }
    else if($pais == 'japao'){
        $mensagem = "Sua moeda é o IENE";
    }
    else if($pais == 'russia'){
        $mensagem = "Sua moeda é o RUBLO";
    }
    else if($pais == 'suica'){
        $mensagem = "Sua moeda é o FRANCO";
    }

    $json = json_encode($mensagem);

    echo $json;
?>
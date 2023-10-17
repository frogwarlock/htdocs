<?php

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $con = mysqli_connect("localhost:3306", "root", "test", "pucpr");

    $query = "INSERT INTO estudante (nome, email, senha) VALUE ('$nome', '$email', '$senha')";

    mysqli_query($con, $query);

?>
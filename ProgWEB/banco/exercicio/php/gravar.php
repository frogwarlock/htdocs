<?php

    $titulo = $_POST["titulo"];
    $duracao = $_POST["duracao"];
    $compositor = $_POST["compositor"];
    $album = $_POST["album"];

    $con = mysqli_connect("localhost:3306", "root", "test", "musicas_favoritas");

    $query = "INSERT INTO musica (titulo, duracao, compositor, album) VALUE ('$titulo', '$duracao', '$compositor', '$album')";

    mysqli_query($con, $query);


?>
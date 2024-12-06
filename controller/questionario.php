<?php

    include "../model/conexao.php";

    $tristeza = $_GET['tristeza'];
    $apetite = $_GET['apetite'];
    $dormir = $_GET['dormir'];
    $nervosismo = $_GET['nervosismo'];
    $panico = $_GET['panico'];
    $conflito = $_GET['conflito'];
    $isolado = $_GET['isolado'];
    $autoestima = $_GET['autoestima'];
    $negativo = $_GET['negativo'];
    $estresse = $_GET['estresse'];
    $transtorno = $_GET['transtorno'];
    $familia = $_GET['familia'];
    $drogas = $_GET['drogas'];
    $lesao = $_GET['lesao'];

    $insert = "INSERT INTO formulario (idusuario, tristeza, apetite, dormir, nervosismo, panico, conflito, isolado, autoestima, negativo, estresse, transtorno, familia, drogas, lesao) VALUES 
    (NULL, '$tristeza', '$apetite', '$dormir', '$nervosismo', 
    '$panico', '$conflito', '$isolado', '$autoestima', 
    '$negativo', '$estresse', '$transtorno', '$familia', 
    '$drogas', '$lesao')";
    
    $resultado = $conn->query($insert);

    if($resultado == TRUE){
        header("Location: ../view/formenviado.html");
    }else{
        echo "Erro!";
    }
?>
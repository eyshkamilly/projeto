<?php

    include "conexao.php";

    $nome = $_GET['nome'];
    $sobrenome = $_GET['sobrenome'];
    $email = $_GET['email'];
    $senha = $_GET['senha'];
    $confirmar = $_GET['confirmar'];

    $insert = "INSERT INTO usuario (id, nome, sobrenome, email, senha, confirmar) VALUES (NULL, '$nome', '$sobrenome', '$email', '$senha', '$confirmar')";

    $resultado = $conn->query($insert);

    if($resultado == TRUE){
        echo "Cadastrado com sucesso!"
    }else{
        echo "Erro ao cadastrar!";
    }
?>
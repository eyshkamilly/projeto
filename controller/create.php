<?php

    include "../model/conexao.php";

    $nome = $_GET['nome'];
    $sobrenome = $_GET['sobrenome'];
    $email = $_GET['email'];
    $senha = $_GET['senha'];
    $confirmar = $_GET['confirmar'];
    $sexo = $_GET['sexo'];

    $insert_usuario = "INSERT INTO usuario (id, nome, sobrenome, sexo) VALUES (NULL, '$nome', '$sobrenome', '$sexo')";
    $insert_autenticacao = "INSERT INTO autenticacao (idusuario, email, senha) VALUES (NULL, '$email', '$senha')";

    $verificar_email = "SELECT email FROM autenticacao WHERE email = '$email'";
    $resultado_verificacao = $conn->query($verificar_email);

    if (!$resultado_verificacao) {
    
        echo "Erro na consulta de verificação: " . $conn->error;
        exit();
    }
    $tem = $resultado_verificacao->num_rows;

    if ($senha !== $confirmar) {
        echo "Erro: As senhas não coincidem!";
        exit();
    }

    if ($tem > 0) {
        
        echo "Erro: Este email já está cadastrado!";
    } else {
        
        $insert_usuario = "INSERT INTO usuario (nome, sobrenome, sexo) VALUES ('$nome', '$sobrenome', '$sexo')";
        
        if ($conn->query($insert_usuario) === TRUE) {
            
            $idusuario = $conn->insert_id;

            
            $insert_autenticacao = "INSERT INTO autenticacao (idusuario, email, senha) VALUES ('$idusuario', '$email', '$senha')";
            
            if ($conn->query($insert_autenticacao) === TRUE) {
                header("Location: ../view/cadastroenviado.html");
            } else {
                echo "Erro ao cadastrar autenticação: " . $conn->error;
            }
        } else {
            echo "Erro ao cadastrar usuário: " . $conn->error;
        }
    }

?>
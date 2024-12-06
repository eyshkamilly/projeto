<?php
    include "model/conexao.php";

    if(isset($_POST['email']) || isset($_POST['senha'])){

        if(strlen($_POST['email']) == 0){
            echo "Preencha seu email";
        }else if (strlen($_POST['senha']) == 0){
            echo "Preencha sua senha";
        }else{
            $email = $conn->real_escape_string($_POST['email']);
            $senha = $conn->real_escape_string($_POST['senha']);

            $sql_code = "SELECT * FROM autenticacao WHERE email = '$email' and senha = '$senha' ";
            $sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $conn->error);


            $quantidade = $sql_query->num_rows;

            if($quantidade == 1){

                $login = $sql_query->fetch_assoc();

                if(!isset($_SESSION)){
                    session_start();
                }

                $id = $login['idusuario'];

                $select = "SELECT * FROM usuario WHERE id = '$id'";
                $result = $conn->query($select);
                $usuario = $result->fetch_assoc();

                $select = "SELECT idusuario FROM formulario WHERE idusuario = '$id'";
                $respondeu = $conn->query($select);

                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];
                $_SESSION['sexo'] = $usuario['sexo'];

                if($respondeu->num_rows > 0){
                    header("Location: view/principal.php");

                }else{
                    header("Location: view/form.html");
                    
                }


            }else{
                header("Location: view/errologar.html");
            }
        }
    }



?>


<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="view/img/logo primaria.png" type="image/x-icon">
    <link rel="stylesheet" href="view/style/index.css">
    <title>TranquilMinds</title>
</head>
<body>

    <header>
        <img id="logo" src="view/img/logo primaria.png" alt="Logo TranquilMinds">

        <form action="" method="POST">
            <nav id="auth-nav">
                <input class="login-input" placeholder="Email" type="email" id="email" name="email" required>
                <input class="login-input" placeholder="Senha" type="password" id="password" name="senha" required>
                <button type="submit" id="btn">Entrar</button>
                <button type="button" id="btn2" onclick="window.location.href='view/cadastro.html'">Cadastre-se</button>
    
                <div id="help">
                    <a href="view/esqueci.php">Esqueceu a senha?</a>
                </div>
            </nav>


        </form>

    </header>

    <main>
        <section id="desc">
            <h1>Sobre Nós</h1>
            <p>
                Bem-vindo à TranquilMinds, onde cuidar da sua saúde mental 
                é uma experiência dinâmica e criativa. Nós entendemos que cada 
                indivíduo é único, e é por isso que oferecemos uma abordagem 
                inovadora para ajudá-lo a alcançar o bem-estar emocional.
            </p>
        </section>
        <section id="gatos">
            <img id="gatinhos" src="view/img/gatitos.png" alt="Gatinhos fofos">
        </section>
    </main>

    <script src="script/login.js"></script>


</body>


</html>
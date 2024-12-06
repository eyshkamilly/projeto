<?php
    if(!isset($_SESSION)){
        session_start();
    }

?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/logo_primaria.png" type="image/png">
    <link rel="stylesheet" href="style/usuario.css">
    <title>Perfil de Usuário</title>
</head>
<body>
    <div id="caixa">
        <img src="img/perfil-removebg-preview.png" id="perfil" alt="Imagem de perfil">
        <h1><?= $_SESSION['nome'] ?></h1>
        <div id="info">
            <span><h4>Sexo: <?= $_SESSION['sexo']?></h4></span>
        

        </div>

        <div>
            <a href="principal.php">Voltar</a>
        </div>
       

        
    </div>
</body>
</html>
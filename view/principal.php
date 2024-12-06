<?php
    if(!isset($_SESSION)){
        session_start();
    }

?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/principal.css">
    <link rel="shortcut icon" href="img/logo primaria.png">
    <title>TranquilMinds</title>
</head>
<body>
    <header>
        <img id="logo_primaria" src="img/logo primaria.png" alt="Logo TranquilMinds">
        <nav id="nav_main">
            <a href="usuario.php">Usuário</a>
            <a href="videos.html">Vídeos</a>
            <a href="musica.html">Músicas</a>
            <a href="../controller/encerrar.php">Sair</a>
        </nav>
        <div id="welcome_message">
            <h4>Olá <?= $_SESSION['nome'] ?> !</h4>
        </div>

    </header>

    <main>
        <section id="content-wrapper">
            <img id="cuidado" src="img/download (33).jpg" alt="Imagem de Cuidados">
            <section id="beneficios">
                <h1>
                    Cuidar da saúde mental evita o desencadeamento de <br>
                    diversas doenças, como depressão e ansiedade. <br>
                    Confira como promover esse cuidado e ter mais <br>
                    qualidade de vida. Cuidar da saúde mental deve ser uma <br>
                    ação tão importante e presente na vida das pessoas <br>
                    quanto o cuidado com o corpo.
                </h1>
            </section>
            <img id="mulher" src="img/_O corpo é um templo, mas só se você o tratar como um__ - Astrid Alauda.jfif" alt="Imagem Motivacional">
        </section>

        <section id="motivacional">
            <h1 id="mot">Sonhe grande, mesmo que você precise começar pequeno!</h1>
        </section>
    </main>
</body>
</html>
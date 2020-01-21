<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos/CSS/estilo.css">
    <title>Curso PHP</title>
</head>

<body>

<header class="cabecalho">
    <h1>Curso PHP7</h1>
    <h2>Índice dos exercícios</h2>
</header>

<main class="principal">
    <div class="conteudo">
        <nav class="modulos">
            <div class="modulo verde">
                <h3>Módulo 01</h3>
                <ul>
                    <li>
                        <a href="exercicio.php?dir=basico&file=ola">
                            Olá php
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=basico&file=html">
                        Integração HMTL
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=basico&file=css">
                        Integração CSS
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=basico&file=comentarios">
                        Comentários PHP
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=basico&file=desafio">
                        Desafio
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</main>

<footer class="rodape">

    COD3R & ALUNOS @ <?= date('Y'); ?>

</footer>

</body>

</html>
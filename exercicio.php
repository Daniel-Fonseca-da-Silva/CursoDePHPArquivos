<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos/CSS/estilo.css">
    <link rel="stylesheet" href="recursos/CSS/exercicio.css">
    <title>Exercício</title>
</head>

<body class="exercicio">

<header class="cabecalho">
    <h1>Curso PHP7</h1>
    <h2>Visualização do Exercício</h2>
</header>

<nav class="navegacao">
    <a href="<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?> " class="verde">Sem formatação</a>
    <a href="index.php" class="vermelho">Voltar</a>
</nav>

<main class="principal">
    <div class="conteudo">
        <?php
            // include($_GET['dir'] . "/" . $_GET['file'] . "teste.php");
            // include("{$_GET['dir']}/{$_GET['file']}.php");
            // include("teste/teste.php");
            include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
        ?>
    </div>
</main>

<footer class="rodape">

    COD3R & ALUNOS @ <?= date('Y'); ?>

</footer>

</body>

</html>
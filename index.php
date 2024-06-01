<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <title>Curso PHP</title>
</head>
<body>
        <?php
            require_once(__DIR__ . '/template/header.php');
        ?>
    <main class="principal">
        <div class="conteudo">
            <?php
                require_once(__DIR__ . '/template/menu.php');
            ?>
        </div>
    </main>
        <?php
            require_once(__DIR__ . '/template/footer.php');
        ?>
</body>
</html>
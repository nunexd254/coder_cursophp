<?php
    session_start();

    if($_COOKIE['usuario']){
        $_SESSION['usuario'] = $_COOKIE['usuario'];
    }

    if(!$_SESSION['usuario']){
        header('Location: login.php');
    }
?>
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
        <?php
            require_once(__DIR__ . '/template/navbar.php');
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
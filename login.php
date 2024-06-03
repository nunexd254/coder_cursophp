<?php
    session_start();
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if(isset($_POST['email'])){
        require_once(__DIR__ . '/template/usrs.php');
        foreach($usuarios as $usuario){
            $emailValido = $email === $usuario['email'];
            $senhaValida = $senha === $usuario['senha'];

            if($emailValido && $senhaValida){
                $_SESSION['erros'] = null;
                $_SESSION['usuario'] = $usuario['nome'];
                $exp = time() + 60 * 60 * 24 * 30;
                setcookie('usuario',$usuario['nome'], $exp);
                header('Location: index.php');
            }
        }
        if(!$_SESSION['usuario']){
            $_SESSION['erros'] = ['Usuário ou senha inválidos!'];
        }

        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <link rel="stylesheet" href="recursos/css/login.css">
    <title>Curso PHP</title>
</head>
<body>
        <?php
            require_once(__DIR__ . '/template/header.php');
        ?>

    <main class="principal">
        <div class="conteudo">
            <h3>Identifique-se</h3>
            <?php if($_SESSION['erros']) :?>
                <div class="erros">
                    <?php foreach($_SESSION['erros'] as $erro) : ?>
                        <p><?= $erro ?></p>
                    <?php endforeach ?>
                </div>
            <?php endif ?>
            <form action="#" method="post">
               <div>
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email">
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha">
                </div>
                <button>Entrar</button>
            </form>
        </div>
    </main>
        <?php
            require_once(__DIR__ . '/template/footer.php');
        ?>
</body>
</html>


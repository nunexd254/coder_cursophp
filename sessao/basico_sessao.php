<?php
    
    $title = 'Sessão';
?>
<div class="titulo"><?= $title ?></div>
<?php
    session_start();
    var_dump($_SESSION) . '<br>';
    print_r($_SESSION) . '<br>';

    if(!$_SESSION['nome']){
        $_SESSION['nome'] = 'Gabriel';
    }

    if(!$_SESSION['email']){
        $_SESSION['email'] = 'gabriel@azmail.com';
    }
?>
<p>
    <a href="/sessao/basico_sessao_alterar.php">Alterar Sessão</a>
</p>

<p>
    <a href="/sessao/basico_sessao_limpar.php">Limpar Sessão</a>
</p>
<?php
    session_start();
    var_dump($_SESSION);
?>
<?php
    $_SESSION['nome'] = 'gabrielfilhoalterado';
    $_SESSION['email'] = 'gabrielfilhoalterado@azmail.com';
?>
<p>
    <b>Nome: </b><?= $_SESSION['nome'] ?>

    <b>Email: </b><?= $_SESSION['email'] ?>
</p>



<p>
    <a href="basico_sessao.php">Voltar</a>
</p>
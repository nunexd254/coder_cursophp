<?php
    $title = 'Include vs Require';
?>
<div class="titulo"><?= $title ?></div>
<?php
    echo 'Usando include com arquivo inexistente<br>';
    ini_set('display_errors',1);
    include('arquivo_inexistente.php');
    echo 'Usando include com arquivo inexistente<br>';

    echo 'Usando require com arquivo inexistente<br>';
    require('arquivo_inexistente.php');
    echo 'Não acho mesmo ... <br>';


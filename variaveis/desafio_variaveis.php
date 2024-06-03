<?php
    $title = 'Desafio Variáveis';
?>
<div class="titulo"><?= $title ?></div>

<?php
    $a = 'Nossa';
    $Nossa = 'Eu';
    $Eu = 'consegui';
    $consegui = 'responder';
    $responder = 'esse';
    $esse = 'desafio';

    echo "{$a} {$$a} {$$$a} {$$$$a} {$$$$$a} {$$$$$$a}";
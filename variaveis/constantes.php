<?php
    $title = 'Constantes';
?>
<div class="titulo"><?= $title ?></div>

<?php
    define('TAXA_DE_JUROS', 5.9);
    const NOVA_TAXA = 2.5;

    echo TAXA_DE_JUROS . '<br>' . NOVA_TAXA;
    $valorNovaTaxa = 2.10;
    define('NOVISSIMA_TAXA', $valorNovaTaxa);
    echo '<br>';
    echo NOVISSIMA_TAXA;
    echo '<br>';
    echo PHP_VERSION;
    echo '<br>';
    echo '<br> Linha: ' . __LINE__;
    echo '<br>';
    echo '<br> Linha: ' . __FILE__;
    echo '<br>';
    echo '<br> Linha: ' . __DIR__;
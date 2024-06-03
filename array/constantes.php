<?php
    $title = 'Arrays Constantes';
?>
<div class="titulo"><?= $title ?></div>

<?php
    const FRUTAS = ['laranja', 'abacaxi'];
    var_dump(FRUTAS);
    define('CIDADES', array('Belo Horizonte', 'Recife'));
    var_dump(CIDADES);
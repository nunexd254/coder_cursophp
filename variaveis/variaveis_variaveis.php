<?php
    $title = 'Variaveis Variaveis';
?>
<div class="titulo"><?= $title ?></div>

<?php
    $a = 'valorA';
    $$a = 'valorAA';

    echo "$a {$$a}";
    echo '<br>';

    $epa = 'opa';
    $opa = 'vish';

    echo "$epa {$$epa}";
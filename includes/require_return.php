<?php
    $title = 'Require & Return';
?>
<div class="titulo"><?= $title ?></div>
<?php
    $valorRetorno = require('return_usado.php');

    echo "$valorRetorno<br>";
    echo $variavelRetornada . "<br>";

    echo __DIR__ . '<br>';
    $valorRetorno2 = require(__DIR__ . '/return_nao_usado.php');
    echo "{$valorRetorno2}<br>";
    echo "{$variavel}<br>";

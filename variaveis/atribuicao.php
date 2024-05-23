<?php
    $title = 'Atribuições';
?>
<div class="titulo"><?= $title ?></div>

<?php
    $numero = 10;
    echo '<br>' . $numero;
    $numero = $numero - 1;
    echo '<br>' . $numero;
    $numero--;
    echo '<br>' . $numero--;
    echo '<br>' ;
    $variavelInexistente = 10;
    $valor = $variavelInexistente ?? 'valor default';
    echo $valor;
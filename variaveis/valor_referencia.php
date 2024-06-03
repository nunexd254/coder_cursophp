<?php
    $title = 'Valor Referencia';
?>
<div class="titulo"><?= $title ?></div>

<?php

//Atribuição por valor
    $variavel = 'valor inicial';
    echo $variavel . '<br>';
    $variavelValor = $variavel;
    echo "<br> $variavelValor";
    $variavelValor = 'Novo  valor';
    echo "<br> $variavel";
    echo "<br> $variavelValor";

//Atribuição por referencia
    $variavelReferencia = &$variavel;
    $variavelReferencia = 'mesma referencia';

    echo "<br>$variavel";
    echo "<br>$variavelReferencia";
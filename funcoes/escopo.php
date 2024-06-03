<?php
    $title = 'Escopo';
?>
<div class="titulo"><?= $title ?></div>
<?php

    function imprimirMensagens(string $mensagem){
        var_dump($mensagem);
    }

    imprimirMensagens('Imprimindo mensagem por meio de função');
    imprimirMensagens('Olá mundo');

    $variavel = 1;

    function trocaValor(){
        $variavel = 2;
        echo "Durante a função: $variavel <br>";
    }

    echo "Antes: $variavel <br>";
    trocaValor();
    echo "Depois: $variavel <br>";

    function trocaValorDeVerdade(){
        global $variavel;
        $variavel = 3;
        echo "Durante a função: $variavel <br>";
    }
    echo "Antes: $variavel <br>";
    trocaValorDeVerdade();
    echo "Depois: $variavel <br>";
    var_dump(trocaValorDeVerdade());
<div class="titulo">Variaveis</div>
<?php
    $numeroA = 3;

    echo $numeroA;
    var_dump($numeroA);

    echo '<br>';
    $a = 5;
    $b = 10;
    $soma = $a + $b;
    echo isset($soma) . '<br>';
    echo ($soma) . '<br>';
    unset($soma);
    var_dump($soma) . '<br>';

    $variavel = 10;
    echo '<br>' . $variavel;

    $variavel = "Agora sou uma string!";
    echo '<br>' . $variavel;

    $var = 'valida';
    $var2 = 'valida';
    $VAR3 = 'valida';
    $_var_4 = 'valida';
    //$6var= 'invalida';
    //$%var7 = 'invalida';

    echo '<br>' ;
    var_dump($_SERVER["HTTP_HOST"]);

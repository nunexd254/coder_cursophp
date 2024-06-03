<?php
    $title = 'Closure Callable';
?>
<div class="titulo"><?= $title ?></div>
<?php
    $soma1 = function($a, $b){
        return $a + $b;
    };

    echo $soma1(2,3) . '<br>';
    echo is_callable($soma1) ? 'Sim' : 'Não' . '<br>';

    echo $soma1(2,3) . '<br>';
    echo is_callable($soma1) ? 'Sim' : 'Não' . '<br>';

    var_dump($soma1);

    echo '<br>';

    function executar($a, $b, $op, Callable $funcao){
        $resultado = $funcao($a, $b) ?? 'Nada';
        echo "$a $op $b  = $resultado <br>";
    }

    executar(2,3,'+', $soma1);
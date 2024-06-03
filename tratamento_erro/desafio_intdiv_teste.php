<?php
    
    $title = 'Desafio Intdiv';
?>
<div class="titulo"><?= $title ?></div>
<?php
    require_once 'desafio_intdiv.php';
    use \Aritmetica\intdiv;


    try{
        echo intdiv(8,3). '<br>';
    }catch(\Aritmetica\NaoInteiroException $e){
        echo 'Resultado não é um número inteiro<br>';
    }

    try{
        echo intdiv(8,0) . '<br>';
    }catch(DivisionByZeroError $e){
        echo 'Divisão por zero<br>';
    }

    echo intdiv(8,2) . '<br>';
    echo \intdiv(8,2) . '<br>';
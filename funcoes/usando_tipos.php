<?php
    $title = 'Usando Tipos';
?>
<div class="titulo"><?= $title ?></div>
<?php
    function somar1($a, $b){
        echo "<span>Somando $a + $b = </span>";
        return $a + $b;
    }
    
    echo somar1(2,3). '<br>';
    echo somar1(1.7,2.5). '<br>';
    echo somar1(1,'4dois'). '<br>';

function somar2(int $a, int $b){
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

echo somar2(2,3). '<br>';
echo somar2(1.7,2.5). '<br>';
echo somar2(1,'4dois'). '<br>';

//marca tipo do retorno ou seja converte apenas as respostas
function somar3($a, $b): int {
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

echo somar3(2,3). '<br>';
echo somar3(1.7,2.5). '<br>';
echo somar3(1,'4dois'). '<br>';
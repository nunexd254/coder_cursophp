<?php
    $title = 'Desafio Impressão';
?>
<div class="titulo"><?= $title ?></div>
<?php
    $array = ["AAA","BBB","CCC","DDD","EEE","FFF"];

    for($i = 0; $i < count($array); $i++){
        if($i % 2 === 1) continue;
        echo "{$array[$i]}<br>";
    }

    foreach($array as $chave => $valor){
        if($chave % 2 !== 0) continue;
        echo "$valor <br>";
    }
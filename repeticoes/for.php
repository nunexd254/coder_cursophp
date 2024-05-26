<?php
    $title = 'Laço FOR';
?>
<div class="titulo"><?= $title ?></div>
<?php
    for($cont = 1; $cont <= 5; $cont++){
        echo "$cont <br>";
    }

    for(; $cont <= 10; $cont++){
        echo "$cont <br>";
    }

    for(;$cont <= 15;){
        echo "$cont <br>";
        $cont++;
    }

    $array = ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sabádo'];
    var_dump($array);

    echo '<br>';
    for($i = 0; $i < count($array); $i++){
        echo "{$array[$i]}<br>";
    }

    $matriz = [
        ['a','e','i','o','u'],
        ['b','c','d']
    ];

    for($i = 0; $i < count($matriz); $i++){
        //echo "{$matriz[$i]}<br>";
        for($j =0; $j < count($matriz[$i]); $j++){
            echo "{$matriz[$i][$j]} ";
        }
        echo "<br>";
    }
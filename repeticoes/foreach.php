<?php
    $title = 'Foreach';
?>
<div class="titulo"><?= $title ?></div>
<?php
    $array = [1 => 'Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sabádo'];

    foreach($array as $valor){
        echo "$valor <br>";
    }

    foreach($array as $indice => $valor){
        echo "$indice => $valor <br>";
    }

    $matriz = [
        ['a','e','i','o','u'],
        ['b','c','d']
    ];

    echo "<hr>";
    foreach($matriz as $linha){
        //echo "$linha <br>";
        foreach($linha as $letra){
            echo "$letra ";
        }
        echo "<br>";
    }
    
    $numeros = [1,2,3,4,5];

    foreach($numeros as &$dobrar){
        $dobrar *=2;
        echo "$dobrar <br>";
    }
    print_r($numeros);

<?php
    $title = 'Desafio PI';
?>
<div class="titulo"><?= $title ?></div>

<?php
    echo pi();
    $pi = 3.14;



    if($pi === pi()){
        echo "<br> Iguais";
    }else{
        echo "<br> Diferentes";
    }

    $piErrado = 2.8;
    echo '<br>' . ($pi - pi());
    echo '<br>' . ($pi - $piErrado);

    if($pi - pi() <= 0.01){
        echo 'Praticamente iguais';
    }else{
        echo "Fora do nível de tolerância";
    }
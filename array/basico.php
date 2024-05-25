<?php
    $title = 'Array';
?>
<div class="titulo"><?= $title ?></div>

<?php
    $lista = array(1,2,3.4,"texto");
    echo $lista . '<br>';
    var_dump($lista);
    echo '<br>';
    print_r($lista);
    echo '<br>';
    echo $lista[0] . '<br>';
    echo $lista[1] . '<br>';
    echo $lista[2] . '<br>';
    echo $lista[3] . '<br>';

    $texto = 'Esse é um texto de teste';
    echo '<br>' .  $texto[0];
    echo '<br>' .  $texto[2];
    echo '<br>' .  $texto[11]; //cuidado
    echo '<br>'; 
    echo "Usei mb_substr";
    echo '<br>' .  mb_substr($texto, 10,1); //forma correta
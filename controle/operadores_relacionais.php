<?php
    $title = 'Operadores relacionais';
?>
<div class="titulo"><?= $title ?></div>

<?php
    var_dump(1 == 1);
    var_dump(1 > 1);
    var_dump(1 < 1);
    var_dump(1 <> 1);
    var_dump(1 != 1);
    var_dump(1 === 1);

    $idade = 15;
    if($idade < 18){
        echo "Menor de idade <br>";
    }else if($idade < 65){
        echo "Adulto";
    }else{
        echo "Terceira idade";
    }

    var_dump(500<=>3);
    echo '<br>';
    var_dump(50<=>50);
    echo '<br>';
    var_dump(5<=>50);
    echo '<br>';
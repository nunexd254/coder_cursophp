<?php
    $title = 'While';
?>
<div class="titulo"><?= $title ?></div>
<?php
    const VALOR_LIMITE = 5;

    $contador = 0;

    while($contador < VALOR_LIMITE){
        echo "while $contador <br>";
        $contador++;
    }

    echo "<hr>";

    do{
        echo "do while $contador <br>";
        $contador++;
    }while ($contador < VALOR_LIMITE);

    // for($contador = 0;$contador < VALOR_LIMITE; $contador++){
    //     echo "for $contador <br>";
    // }

    $contador = 0;
    while(true){
        echo "while(true) $contador <br>";
        $contador++;
        if($contador >= VALOR_LIMITE) break;
    }
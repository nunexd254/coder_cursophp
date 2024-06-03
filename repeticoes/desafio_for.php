<?php
    $title = 'Desafio FOR';
?>
<div class="titulo"><?= $title ?></div>
<?php
    $impressao = '';
    for($i = 0; $i < 6; $i++){
    
        $impressao .= '#';
        echo "$impressao <br>";
    }

    echo "<hr>";

    for($impressao2 = '#'; $impressao2 !== '######'; $impressao2 .= '#'){
        echo "$impressao2 <br>";
    }

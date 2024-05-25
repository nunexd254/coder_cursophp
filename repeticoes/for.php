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
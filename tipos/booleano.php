<div class="titulo">Tipo Booleano</div>

<?php
    echo true;
    echo '<br>';
    echo false;
    echo '<br>';
    var_dump(true);
    echo '<br>';
    var_dump(false);
    echo '<br>';
    var_dump('false');
    echo '<br>';
    echo is_bool(false);
    echo '<br>';
    echo is_bool('true');

    echo '===============Conversões boolean===================';
    echo '<p>Regras:</p>';
    echo '<br>' . var_dump((bool) 0); //apenas zero é convertido para falso qualquer outro numero vira true
    echo '<br>' . var_dump((bool) 20);
    echo '<br>' . var_dump((bool) -1);
    echo '<br>' . var_dump((bool) ""); //string vazia é convertida para false

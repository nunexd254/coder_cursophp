<div class="titulo">Conversões</div>

<?php

    echo is_int(PHP_INT_MAX);
    
    //int para float
    echo '<br>';
    var_dump(PHP_INT_MAX + 1);
    echo '<br>';
    var_dump(1 + 1.0);
    var_dump((float) 3);

    //converter float para int
    echo '<p>Float para int</p>';
    var_dump((int)6.8);
    echo '<br>';
    var_dump(intval(2.9, 10));
    echo '<br>';
    var_dump((int) round(2.8));

    //operações com string
    echo '<p>Strings</p>';
    var_dump(3 + "2");
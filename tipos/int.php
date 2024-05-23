<div class="titulo">Tipo Inteiro</div>

<?php
    echo 11;
    echo '<br>';
    var_dump(11);
    echo '<br>';

    #mostra o maior inteiro aceitado pela máuina depende da arquitetura
    echo PHP_INT_MAX , '<br>';
    echo PHP_INT_MIN , '<br>';
    echo 011, '<br>'; //base octal
    echo 0b11000111001 , '<br>'; //base binária
    echo 0x117acf , '<br>'; //qbase hexadecimal

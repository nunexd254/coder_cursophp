<?php
    
    $title = 'Try/Catch';
?>
<div class="titulo"><?= $title ?></div>
<?php
//echo intdiv(7,0);
try{
    echo intdiv(7,0);
}catch(Error $e){ //problemas mais fatais
    echo 'Teve um erro aqui<br>';
}

try{
    throw new Exception('Um erro muito estranho'); //exceções a regra
    echo intdiv(7,0);
}catch(DivisionByZeroError $e) {
    echo 'Divisão por zero';
}catch(Throwable $e){
    echo 'Erro encontrado: ' . $e->getMessage(). '<br>';
}finally{
    echo 'Sempre executado!<br>';
}
echo 'continua executando...';
<?php
    $title = 'Classe Abstrata';
?>
<div class="titulo"><?= $title ?></div>
<?php

abstract class Abstrata { 
    public abstract function metodo1();
    protected abstract function metodo2();
}

abstract class FilhaAbstrata extends Abstrata {
    public function metodo1()
    {
        echo "Executando método 1";
    }

    public abstract function metodo3();
}

class Concreta extends FilhaAbstrata {
    public function metodo1()
    {
        echo "Executando método 1 extendido <br>";
        parent::metodo1();
    }

    protected function metodo2($parametro)
    {
        echo "Executando método 2 com parametro $parametro <br>";
    }

    public function metodo3()
    {
        echo "Executando método 3 <br>";
        $this->metodo2('interno');
    }
}
$c = new Concreta();
$c->metodo1();
//$c->metodo3('Externo');
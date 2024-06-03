<?php
    $title = 'Polimorfismo';
?>
<div class="titulo"><?= $title ?></div>
<?php
    abstract class Comida {
        public $peso;

    }

    class Arroz extends Comida {

    }
    class Feijao extends Comida {
        
    }
    class Sorvete extends Comida {
        
    }

    class Pessoa {
        public $peso;

        function __construct($peso)
        {
            $this->peso = $peso;
        }

        public function comer(Arroz $comida){
            $this->peso += $comida->$peso;
        }
    }
    $c = new Arroz();
    $c1->peso = 0.45;
    $p = new Pessoa(83.45);
    $p->comer($c1);
    $p->comer($c2);
    echo $p->peso;


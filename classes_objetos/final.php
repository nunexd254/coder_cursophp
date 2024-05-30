<?php
    $title = 'Final';
?>
<div class="titulo"><?= $title ?></div>
<?php
    abstract class Abstrata{
        public abstract function metodo1();

        public final function metodo2()
        {
            echo 'Não vou  mudar!<br>';
        }
    }
    class Classe extends Abstrata {
        public function metodo1()
        {
            echo 'Executando método 1 <br>';
        }

        // public function metodo2()
        // {
        //     echo 'Extendendo método2<br>';
        // }
    }

    $classe = new Classe();
    $classe->metodo1();
    $classe->metodo2();

    final class Unica {
        public $att = 'valor';
    }

    $unica = new Unica();
    echo $unica->att;
    // class Duplicata extends Unica {
    //     public $att2;
    // }
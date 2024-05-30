<?php
    $title = 'Visibilidade';
?>
<div class="titulo"><?= $title ?></div>
<?php
    class A{
        public $publico = 'Público';
        protected $protegido = 'Protegido';
        private $privado = 'Privado';

        public function mostrarA(){
            echo "Class A) Público = {$this->publico}<br>";
            echo "Class A) Protegido = {$this->protegido}<br>";
            //para acessar o privado tenho que ter uma função publica que acesse ele
            echo "Class A) Privado = {$this->privado}<br>";
            $this->naoMostrar();
            
        }

        protected function vaiPorHeranca(){
            echo "Serei transmitido por herança";
        }

        //funções privadas só podem ser chamadas dentro da classe
        private function naoMostrar(){
            echo 'Não vou imprimir!';
        }
    }
$a = new A();
$a->mostrarA();

class B extends A{
    public function mostrarB(){
        parent::vaiPorHeranca();
        echo "<br> Class B) Público = {$this->publico}<br>";
        echo "<br> Class B) Protegido = {$this->protegido}<br>";
        //echo "Class A) Privado = {$this->privado}<br>"; não pode ser acessado de fora da classe sem o uso de um método publico
    }
}
echo '<br>';
$b = new B();
$b->mostrarB();
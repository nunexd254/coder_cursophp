<?php
    $title = 'Herança';
?>
<div class="titulo"><?= $title ?></div>
<?php
    class Pessoa{
        public $nome;
        public $idade;

        function __construct($nome,$idade)
        {
            $this->nome = $nome;
            $this->idade = $idade;
            echo "Pessoa foi criado!<br>";
        }

        function __destruct()
        {
            echo 'Pessoa diz: Tchau!!';
        }

        public function apresentar(){
            echo "{$this->nome}, {$this->idade} anos <br>";
        }
    }
    class Usuario extends Pessoa{
        public $login;

        function __construct($nome,$idade,$login)
        {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->login = $login;

            echo "Usuário foi criado!<br>";
        }

        function __destruct()
        {
            echo "Usuário diz: Tchau <br>";
        }

        public function apresentar(){
            parent::apresentar();
            echo "@{$this->login}<br>";
        }
    }

    $usuario = new Usuario('Gustavo Mendonça', 21, 'gust_mend');
    $usuario->apresentar();
    unset($usuario);

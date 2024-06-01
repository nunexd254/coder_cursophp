<?php
    require_once('pessoa.php');
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
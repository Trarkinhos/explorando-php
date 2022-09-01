<?php 

    class Pessoa {
        public $nome;
        public $sobrenome;

        public function __construct($nome, $sobrenome){
            $this->nome = $nome;
            $this->sobrenome = $sobrenome;
        }
    
        public function mensagem(){
            return "Olá $this->nome $this->sobrenome, tudo bem com você?";
        }    
    }

    $pessoa = new Pessoa("Marcos", "Carvalho");
    echo $pessoa->mensagem();

    class Carro {
        public $cor;
        public $modelo;

        public function __construct($cor, $modelo){
            $this->cor = $cor;
            $this->modelo = $modelo;
        }

        public function mensagem(){
            return "Modelo: $this->modelo | Cor: $this->cor";
        }
    }

    $carro = new Carro("Branco", "Fusca");
    echo $carro->mensagem();

    class Animal {
        
        public $nome;
        public $habitat;

        public function __construct($nome, $habitat){
            $this->nome = $nome;
            $this->habitat = $habitat;
        }

        public function mensagem(){
            return "Nome: $this->nome | Habitat: $this->habitat";
        }
    }

    $animal = new Animal("Leão", "Savana");
    echo $animal->mensagem();
    
?>
<?php

    // Modelo
    class Funcionarios
    {
        //Atributos
        public $nome = null;
        public $fone = null;
        public $numFilhos = null;

        //getters e setters
        function setNome($nome){
            $this->nome = $nome;
        }

        function setNumFilhos($numFilhos){
            $this->numFilhos = $numFilhos;
        }

        function setFone($fone){
            $this->fone = $fone;
        }

        function getNome(){
            return $this->nome;
        }

        function getNumFilhos(){
            return $this->numFilhos;
        }

        function getFone(){
            return $this->fone;
        }

        //Métodos
        function resumirCadFunc(){
            return "$this->nome possui $this->numFilhos filhos e o seu nº de fone é $this->fone";
        }

        function modificarNumFilhos($numFilhos){
            $this->numFilhos = $numFilhos;
        }
    }

    $y = new Funcionarios();
    $y->setNome('Euclides');
    $y->setnumFilhos(89);
    $y->setFone('9999999');
    //echo $y->resumirCadFunc();
    echo $y->getNome() . ', possui ' . $y->numFilhos. ' Filhos';

    echo '<br>';

    $x = new Funcionarios();
    $x->setNome('Kinto');
    $x->setNumFilhos(3);
    $x->setfone(3333333);
    echo $x->resumirCadFunc();
<?php
    class Pet{
        public function __construct(private int $idpet = 0, private string $nome = '', private string $imagem = ''){}

        public function getIdpet(){
            return $this -> idpet;
        }
        
        public function getNome(){
            return $this -> nome;
        }

        public function getImagem(){
            return $this -> imagem;
        }


    }

?>
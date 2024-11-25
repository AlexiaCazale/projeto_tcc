<?php
    class Blocos{
        public function __construct(private int $idbloco = 0, private string $nome = ''){}

        public function getIdbloco(){
            return $this -> idbloco;
        }
        
        public function getNome(){
            return $this -> nome;
        }
        
        public function getImagem(){
            return $this -> imagem;
        }

    }

?>
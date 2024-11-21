<?php
    class Blocos{
        public function __construct(private int $idbloco = 0, private string $nome = '', private string $imagem = ''){}

        public function getIdbloco(){
            return $this -> idcurso;
        }
        
        public function getNome(){
            return $this -> nome;
        }

        public function getImagem(){
            return $this -> imagem;
        }

        // public function getSala(){
        //     return $this -> sala;
        // }

        // public function setSala(Sala $sala){
        //     $this -> sala[] = $sala;
        // }

    }

?>
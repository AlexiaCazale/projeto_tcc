<?php
    class Salas{
        public function __construct(private int $idsala = 0, private string $nome = '', private string $descricao = '', private array $bloco = array()){}

        public function getIdsala(){
            return $this -> idcurso;
        }
        
        public function getNome(){
            return $this -> nome;
        }

        public function getDescricao(){
            return $this -> descricao;
        }

        public function getBloco(){
            return $this -> bloco;
        }

        public function setBloco(Bloco $bloco){
            $this -> bloco[] = $bloco;
        }

    }

?>
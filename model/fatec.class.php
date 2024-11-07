<?php
    class Fatec{
        public function __construct(private int $idfatec = 0, private string $fotoPets = '', private string $fotoBlocos = '', private string $nome = '', private array $blocos = array()){}

        public function getIdbloco(){
            return $this -> idcurso;
        }
        
        public function getNome(){
            return $this -> nome;
        }

        public function getFotoPets(){
            return $this -> fotoPets;
        }

        public function getFotoBlocos(){
            return $this -> fotoBlocos;
        }

        public function getBlocos(){
            return $this -> blocos;
        }

        public function setBlocos(Blocos $blocos){
            $this -> blocos[] = $blocos;
        }

    }

?>
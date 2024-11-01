<?php
    class Disciplina{
        public function __construct(private int $iddisciplina = 0, private string $nome = '', private string $descricao = '', private array $curso = array()){}

        public function getIddisciplina(){
            return $this -> iddisciplina;
        }

        public function getNome(){
            return $this -> nome;
        }

        public function getDescricao(){
            return $this -> descricao;
        }

        public function getCurso(){
            return $this -> curso;
        }

        public function setCurso(Curso $curso){
            $this -> curso[] = $curso;
        }
    }

?>
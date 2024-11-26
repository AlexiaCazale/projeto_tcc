<?php
    class Curso{
        public function __construct(private int $idcurso = 0, private string $nome = ''){}

        public function getIdcurso(){
            return $this -> idcurso;
        }
        
        public function getNome(){
            return $this -> nomeCurso;
        }

        // public function getDisciplina(){
        //     return $this -> disciplina;
        // }

        // public function setDisciplina(Disciplina $disciplina){
        //     $this -> disciplina[] = $disciplina;
        // }

    }

?>
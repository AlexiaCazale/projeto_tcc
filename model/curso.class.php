<?php
    class Curso{
        public function __construct(private int $idcurso = 0, private string $nome = '', private string $descricao = ''){}

        public function getIdcurso(){
            return $this -> idcurso;
        }
        
        public function getNome(){
            return $this -> nomeCurso;
        }

        public function getDescricao(){
            return $this -> descricaoCurso;
        }

        // public function getDisciplina(){
        //     return $this -> disciplina;
        // }

        // public function setDisciplina(Disciplina $disciplina){
        //     $this -> disciplina[] = $disciplina;
        // }

    }

?>
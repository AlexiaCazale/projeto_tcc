<?php
    class Curso{
        public function __construct(private int $idcurso = 0, private string $nomeCurso = '', private string $descricaoCurso = '', private array $disciplina = array()){}

        public function getIdcurso(){
            return $this -> idcurso;
        }
        
        public function getNomeCurso(){
            return $this -> nomeCurso;
        }

        public function getDescricaoCurso(){
            return $this -> descricaoCurso;
        }

        public function getDisciplina(){
            return $this -> disciplina;
        }

        public function setDisciplina(Disciplina $disciplina){
            $this -> disciplina[] = $disciplina;
        }

    }

?>
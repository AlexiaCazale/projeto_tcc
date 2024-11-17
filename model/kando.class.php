<?php
    class KanDO{

        public function __construct(private int $idkando = 0, private string $nome = '', private string $descricao = '', private string $data_entrega = '', private string $statusAtv = '', private string $disciplina = ''){}

        public function getIdkando(){
            return $this -> idkando;
        }   
        
        public function getNome(){
            return $this -> nome;
        }   

        public function getDescricao(){
            return $this -> descricao;
        }   

        public function getDataEntrega(){
            $date = new DateTime($this->data_entrega);
            return $date->format('d/m/Y');
        }   

        public function getStatus(){
            return $this -> statusAtv; //Fazer / Fazendo / Feito
        }   

        public function getDisciplina(){
            return $this -> disciplina;
        }   

    }

?>
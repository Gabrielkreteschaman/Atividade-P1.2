<?php

    class Categoria{
        private $descricao;
        private $id;

        public function __construct($descricao, $id){
            $this->descricao = $descricao;
            $this->id = $id;
        }

        public function getDescricao(){
            return $this->descricao;
        }

        public function setDescricao($descricao){
            $this->descricao = $descricao;
        }

        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }
    }

?>
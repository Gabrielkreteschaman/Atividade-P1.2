<?php

    class Cliente {
        private $nome;
        private $data;

        public function __construct($nome, $data) {
            $this->nome = $nome;
            $this->data = $data;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function getData() {
            return $this->data;
        }

        public function setData($data) {
            $this->data = $data;
        }
    }

?>
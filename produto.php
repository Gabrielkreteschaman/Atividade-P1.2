<?php

    class Produto {
        private $id;
        private $nome;
        private $marca;
        private $preco;
        private $categoria;

        public function __construct($id, $nome, $marca, $preco, Categoria $categoria) {
            $this->id = $id;
            $this->nome = $nome;
            $this->marca = $marca;
            $this->preco = $preco;
            $this->categoria = $categoria;
        }

                public function getId() {
            return $this->id;
        }

        public function getNome() {
            return $this->nome;
        }

        public function getMarca() {
            return $this->marca;
        }

        public function getPreco() {
            return $this->preco;
        }

        public function getCategoria() {
            return $this->categoria;
        }
    }

?>
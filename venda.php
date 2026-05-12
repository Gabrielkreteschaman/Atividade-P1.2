<?php

class Venda {
    private $id;
    private $cliente;
    private $produtos = [];

    public function __construct($id, Cliente $cliente) {
        $this->id = $id;
        $this->cliente = $cliente;
    }

    public function adicionarProduto(Produto $produto) {
        $this->produtos[] = $produto;
    }

    public function calcularTotal() {
        $total = 0;

        foreach ($this->produtos as $produto) {
            $total += $produto->getPreco();
        }

        return $total;
    }

    public function imprimir() {
    echo "Cliente: " . $this->cliente->getNome() . "<br><br>";

    echo "Produtos:<br>";

    foreach ($this->produtos as $produto) {
            echo "id: " . $produto->getId() . "<br>";
            echo "nome: " . $produto->getNome() . "<br>";
            echo "marca: " . $produto->getMarca() . "<br>";
            echo "preço: R$ " . $produto->getPreco() . "<br>";
            echo "categoria: " . $produto->getCategoria()->getDescricao() . "<br><br>";
        }

        echo "Total: R$ " . $this->calcularTotal();
    }   
}
?>
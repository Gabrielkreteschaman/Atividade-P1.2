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
        echo "Cliente: " . $this->cliente->getNome() . "<br>";

        echo "Produtos:<br>";

        foreach ($this->produtos as $produto) {
            echo "- " . $produto->getNome() . "<br>";
        }

        echo "Total: R$ " . $this->calcularTotal();
    }
}
?>
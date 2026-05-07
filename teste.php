<?php
    
    require 'categoria.php';
    require 'produto.php';
    require 'cliente.php';
    require 'venda.php';

    $nome = $_POST['cliente'] ?? '';
    $produtoSelecionado = $_POST['produto'] ?? '';

    $categoria = new Categoria(1, "Eletrônicos");

    $p1 = new Produto(1, "Mouse", "Logitech", 120, $categoria);
    $p2 = new Produto(2, "Teclado", "Redragon", 250, $categoria);

    $cliente = new Cliente($nome, date('Y-m-d'));

    $venda = new Venda(1, $cliente);

    if ($produtoSelecionado == "Mouse") {
        $venda->adicionarProduto($p1);
    }else if ($produtoSelecionado == "Teclado") {
        $venda->adicionarProduto($p2);
    }

    $venda->imprimir();

?>
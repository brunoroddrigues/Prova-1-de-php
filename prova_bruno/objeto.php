<?php
    require_once "pessoa.php";
    require_once "fornecedor.php";
    require_once "comprador.php";
    require_once "itenscompra.php";
    require_once "compra.php";
    require_once "produto.php";


    $fornecedor = new Fornecedor("3000.5000.7000-0001","São paulo");
    $comprador = new Comprador("55555","453.778.708-24","Bruno Aparecido Rodrigues");
   

    $itenscompra1 = new Itenscompra("150", array("Luva de muay thai"));
    $itenscompra2 = new Itenscompra("150", array("Protetor Bucal"));
    $itenscompra3 = new Itenscompra("150", array("Caneleira"));
    $itenscompra4 = new Itenscompra("150", array("Bandagem"));

    $compra = new Compra("09/10/2023",$fornecedor,$comprador, array ($itenscompra1, $itenscompra2, $itenscompra3, $itenscompra4));

    

    echo "<h2>Compra</h2>";
    echo "Data da compra: {$compra->getData_compra()}<br>";
    
    echo "<h2>Fornecedor</h2>";
    echo "CNPJ: {$compra->getFornecedor()->getCnpj()}<br>";
    echo "Nome: {$compra->getFornecedor()->getNome()}<br>";

    echo "<h2>Comprador</h2>";
    echo "ID comprador: {$compra->getComprador()->getId_comprador()}<br>";
    echo "CPF: {$compra->getComprador()->getCpf()}<br>";
    echo "Nome: {$compra->getComprador()->getNome()}<br>";

    echo "<h2>Itens de compra</h2>";
    foreach($compra->getItenscompra() as $itenscompra)
    {
        echo "Quantidade: {$itenscompra->getQuantidade()}<br>";
        echo "Produto: {$itenscompra->getProduto()[0]}<br>";
    }    
       
?>
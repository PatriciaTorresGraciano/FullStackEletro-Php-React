<?php
    require_once ("./conexao/conexao.php");

    $result = query('SELECT p.nome_cliente, p.endereco, p.telefone, p.valor_unitario, p.quantidade, (p.valor_unitario*p.quantidade) as valor_compra, pr.nome_produto, c.nome
    FROM pedidos p
    INNER JOIN produtos pr ON p.produto_fk = pr.id
    INNER JOIN categorias c ON p.categorias_fk = c.id
    ');
    $pc=[];

    while($row=mysqli_fetch_assoc($result)){
        $pc[]=$row;
    }     
    header("Access-Control-Allow-Origin: *");
    //header("Content-type: application/json");
    echo json_encode($pc);


    
    
?>

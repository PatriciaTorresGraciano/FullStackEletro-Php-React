<?php
    require_once ("./conexao/conexao.php");

    $result = query('SELECT * FROM loja');
    $lojas=[];

    while($row=mysqli_fetch_assoc($result)){
        $lojas[]=$row;
    }
            
            
    header("Access-Control-Allow-Origin: *");
    //header("Content-type: application/json");
    echo json_encode($lojas);
    
?>
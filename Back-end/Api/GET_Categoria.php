<?php

    require_once ("./conexao/conexao.php");

    $result = query('SELECT * FROM categorias');
    $categorias=[];

    while($row=mysqli_fetch_assoc($result)){
        $categorias[]=$row;
    }
        
    header("Access-Control-Allow-Origin: *");
    //header("Content-type: application/json");
    echo json_encode($categorias);
    
?>
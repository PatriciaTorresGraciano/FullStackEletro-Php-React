<?php
      require_once ("./conexao/connection.php");
    class Pedidos{
        
        public $nome_categoria; 
        public $nome_cliente; 
        public $endereco; 
        public $telefone; 
        public $valor_unitario;  
        public $quantidade;
        public $valor_total;
        public $nome_produto;

       

        public function controleEnvio()
        {
            $conn = Connection::getDb();
            $inserirDados = $conn->query("INSERT INTO pedidos(categorias_fk, nome_cliente, endereco, telefone, valor_unitario, quantidade, valor_total, produto_fk)  VALUES ('$this->$nome_categoria','$this->$nome_cliente', '$this->$endereco', '$this->$telefone', '$this->$nome_produto', '$this->$valor_unitario', '$this->$quantidade', '$this->$valor_total','$this->$nome_produto')");

            if ($inserirDados->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        }
    }
    

    $pedidos = new Pedidos;
    $pedidos->nome_categoria= $_POST['categorias_fk'];
    $pedidos->nome_cliente = $_POST['nome_cliente'];
    $pedidos->endereco = $_POST['endereco'];
    $pedidos->telefone = $_POST['telefone'];
    $pedidos->valor_unitario = $_POST['valor_unitario'];
    $pedidos->quantidade = $_POST['quantidade'];
    $pedidos->valor_total=(($_POST['valor_unitario'])*($_POST['quantidade']));
    $pedidos->nome_produto = $_POST['produto_fk'];
    $validar = $pedidos->controleEnvio();
    
    if ($validar == true) {
        echo json_encode(true);
    } else {
        echo json_encode(false);
    }

    header("Access-Control-Allow-Origin: *");
    //header("Content-type: application/json");
    
?>
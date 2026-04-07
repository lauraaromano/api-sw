<?php
    //CABECALHO
    header("Content-Type: application/json"); //Define o tipo de resposta

    $metodo = $_SERVER['REQUEST_METHOD'];

    //echo "Método de requesição: ".$metodo;

    switch ($metodo) {
        case 'GET':
            echo "AQUI AÇÕES DO MÉTODO GET";
            break;
        case 'POST':
            echo "AQUI AÇÕES DO MÉTODO POST";
            break;
        
        default:
            echo "MÉTODO NÃO ENCONTRADO";
            break;
    }

    // //CONTEUDO
    //  $usuarios = [
    //       ["id" => 1, "nome" => "Maria Souza", "email" => "maria@email.com"],
    //       ["id" => 2, "nome" => "João Silva", "email" => "joao@email.com"]
    // ];

    // //Converte para JSON e retorna
    // echo json_encode($usuarios);
    
?>
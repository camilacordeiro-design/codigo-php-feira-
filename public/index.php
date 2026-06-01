<?php
include '../config/conexao.php';
include '../controllers/ComidaController.php';
include '../views/layouts/header.php';

$cntroller = new ComidaController ($conexao);


if (isset($_GET['action'])){
    $action = $_GET['action'];
    $id = $_GET['id']?? null;

    switch ($acition){
        case 'adicionar':
            include '../views/comida/adiconar.php';
            break;

        case 'editar':
            if ($id){
                $comida = $controller->buscar($id);
                include '../views/comida/editar.php';


            }    
            break;
            case 'deletar':
                if($id) {
                    $controller->deletar($id);
                    header("ocation:/public/index.php?mensagem=filme deletado com sucesso ");
                }
    }
}
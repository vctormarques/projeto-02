<?php
//rotas da aplicação
//a variável $uri já contém os dados da rota solicitada

switch ($uri) {

     case '/':
        $messageController->index();
        break;
    
    case '/game':
        $messageController->game();
        break;
   
   case '/win':
        $messageController->win();
        break;

    case '/save':

        $messageController->saveScore();

        break;

    case '/score':

    $messageController->score();

    break;
           
    default:
        die('Essa rota não é valida');
        break;
}

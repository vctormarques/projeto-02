<?php
//declaração dos namespaces dos controladores e instanciação dos objetos

use Project\Controller\MessageController;
$messageController = new MessageController();


//configuração do banco de dados
$_ENV['config'] = [
    'host' => 'localhost',
    'dbname' => 'bancoJogo',
    'user' => 'root',
    'password' => '',
];

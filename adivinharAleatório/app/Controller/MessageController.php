<?php
namespace Project\Controller;

use Project\Db\QueryBuilder;

class MessageController
{

     public function index()
    {
        require './app/views/index.php';
    }

     public function game()
    {
        $_SESSION['name'] = isset($_POST['name']) ? $_POST['name'] : '';
        $_SESSION['numero'] = rand(0,1000);
        $_SESSION['tentativas'] = 0;
        $entrada = $_POST['entrada'];
        $mensagem = '';

        session_start(); 

        if ($entrada = '') 
        { 
             $mensagem = 'Digite um número.';
        }

        elseif ($_SESSION['numero'] === $entrada) 
        { 
               require './app/views/win.php';
        }

        elseif ($_SESSION['numero'] > $entrada)
        { 
            $mensagem = 'Chute um número maior.';
            require './app/views/game.php'; 
        }

        else 
        { 
            require './app/views/game.php';
            $mensagem = 'Chute um número menor.';
        } 

        $_SESSION['tentativa']++;
    } 
         
     public function win()
    {
        require './app/views/win.php';
    }

    public function saveScore()
    {
        //acessar o banco
        $q = new QueryBuilder();
        //recebo os dados
        $dados['name'] = $_POST['name'];
        $dados['tentativas'] = $_POST['tentativas'];
        
        $q->insert('jogo', $dados);
        header('Location: /score');
    }

     public function score()
    {
        //acessar o bd
        $q = new QueryBuilder();
        //busca os dados
        $dados = $q->select('jogo');
       
        //acessar a view
        require './app/views/score.php';
    }
}

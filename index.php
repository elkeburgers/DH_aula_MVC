<?php 
    //var_dump($_GET);
    //$rota = key($_GET); //retorna as chaves de um array. Retorna o que o usuário digita.

    // ponto de entrada do meu usuário, tudo passará por aqui primeiro
    //o que ele digitou na url (ifternário para validar- caso ele não digite nada, vai pra home)
    //caso o usuário não digite nada, automaticamente ele será direcionado para a home: (if ternário)
    //primeira validação:
    $rota = key($_GET)?key($_GET):"home"; 

    $controller = $rota."Controller"; 
    //pego o que o usuário digitou e aqui chamo um controle especifico
    //qualquer coisa que o usuário digitar será somado a Controller.php, Home ou home dará o mesmo resultado

    include "controllers/".$controller.".php"; //inclui o view no controller

    $objeto = new $controller(); //instancia: gera um objeto para acessar o controler
    //criando obj do controller que que chamei
    //$objeto->viewHome(); //executando o método - aqui não é dinamico
    
    $objeto->acao($rota); //o método vai pegar o que o usuário digitar.

    //var_dump($rota); //devolve: string(4) "home".
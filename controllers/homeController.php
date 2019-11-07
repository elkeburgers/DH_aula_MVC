<?php
//no model o padrão de criação de classes é a primeira letra maiúscula e no plural.


class homeController{
//cria o método para os casos de o usuário digitar coisas diferentes, redireciona para as páginas que eu mandar.
//o parametro $acao é a rota, posso colocar $rota (que tem na index)
    public function acao($acao){
        switch($acao){
            case "home":
                $this->viewHome();
            break;
            default:
                $this->viewHome();
            break;
        }
    }

    public function viewHome(){ //quando o usuário digitar a home, o sistema retorna a viewHome.
       include "views/home.php";
    }
}

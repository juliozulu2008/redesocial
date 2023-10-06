<?php

namespace RedeSocial;

class Application
{
    private $controller;
    private function setApp()
    {
        $loadName = 'RedeSocial\Controllers\\'; //Contruindo a classe a ser chamada baseada nessa string
        $url = explode('/', @$_GET['url']); // pegar as urls
        if ($url[0] == '') {
            $loadName .= 'Home'; // Loadaname caso nao tenha rota joga para o Home
        } else {
            $loadName .= ucfirst(strtolower($url[0])); // ucfrist deixa a string com a primeira letra maiuscula e tolower miniscula
        }
        $loadName .= 'Controller'; //Busca o controller da pagina solicitada
        if (file_exists($loadName . '.php')) { //verifica exitencia do arquivo
            $this->controller = new $loadName(); // estacia a classe
        } else {
            include('Views/pages/404.php'); //Paginma de erro persomnalizada
            die(); // Mata a aplicação
        }
    }
    public function run()    //Roda a aplicaçao
    {
        $this->setApp();
        $this->controller->index();
    }
}

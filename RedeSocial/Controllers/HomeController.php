<?php

namespace RedeSocial\Controllers;

class HomeController
{ // Controler da pagina Inicial
    public function index()
    {
        if (isset($_SESSION['login'])) {
            //Renderiza para a Home do Usuario.
            \RedeSocial\Views\MainView::render('home');
        } else {
            //Renderizar para Criar Conta.
            \RedeSocial\Views\MainView::render('login');
        }
    }
}

<?php

namespace RedeSocial\Views;

class MainView   //Clse de controller das Views
{
    public static function render($filename)
    {
        include('pages/' . $filename . '.php');
    }
}

<?php

namespace Controllers;
use MVC\Router;

class OfertaController{

    public static function presencial(Router $router){
        $router->render('/oferta/presencial');
    }

    public static function distancia(Router $router){
        $router->render('/oferta/distancia');
    }
}
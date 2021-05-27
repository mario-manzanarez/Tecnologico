<?php

namespace Controllers;
use MVC\Router;
class ConocenosController{

    public static function index(Router $router){
        $router->render('/nosotros/principal');
    }

    public static function nosotros(Router $router){
        $router->render('/nosotros/nosotros');
    }

    public static function mensaje(Router $router){
        $router->render('/nosotros/mensaje');
    }

    public static function mision(Router $router){
        $router->render('/nosotros/mision');
    }

    public static function vision(Router $router){
        $router->render('/nosotros/vision');
    }

    public static function valores(Router $router){
        $router->render('/nosotros/valores');
    }

    public static function calidad(Router $router){
        $router->render('/nosotros/calidad');
    }

    public static function organigrama(Router $router){
        $router->render('/nosotros/organigrama');
    }

    public static function directorio(Router $router){
        $router->render('/nosotros/directorio');
    }

    public static function avisos(Router $router){
        $router->render('/nosotros/avisos');
    }

    public static function normateca(Router $router){
        $router->render('/nosotros/normateca');
    }

}
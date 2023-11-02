<?php
/*
 * Created on Tue Oct 31 2023
 *
 * Copyright (c) 2023 BitsHost
 */

namespace MVC;

use Test\TestController; //doar pentru test - o sa avem modul special
//use Users\UserRoutes;

/**
 * Routes
 */
class Routes
{

    /**
     * startRoutes
     *
     * @param  mixed $url
     * @return void
     */
    public function startRoutes($url)
    {
        $router = new Router();

        //-1. default system routes
        $router->addRoute('/abba', TestController::class, 'display');
        ///////////////////route, class, function()////////////////



        ///////////////////////////////////////////////////////////

        //-2. modules routes
        //$userR = new UserRoutes();
        //$userR->Routes($router);

        //combining all module initialization into a single file
        include "./etc/InitMods.php";



        ///////////////////////////////////////////////////////////

        #c-3. call Dispatcher

        $router->dispatcher($url);


    }
}

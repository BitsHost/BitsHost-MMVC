<?php
/*
 * Created on Tue Oct 31 2023
 *
 * Copyright (c) 2023 BitsHost
 */

namespace Test\Routes;

use MVC\Routes;
use Test\TestController;


/**
 * TestRoutes
 */
class TestRoutes extends Routes
{


    /**
     * Routes
     *
     * @param  mixed $router
     * @return void
     */
    public function Routes($router)
    {

        $router->addRoute('/', TestController::class, 'display');
        $router->addRoute('/test.php', TestController::class, 'display');
        $router->addRoute('/test', TestController::class, 'display');
        $router->addRoute('/test/subpage', TestController::class, 'display');
        //GET parameters, check .htacces
        //one parameter
        $router->addRoute('/test-one', TestController::class, 'display');
        $router->addRoute('/test-page-one', TestController::class, 'display');
        //two parameters
        $router->addRoute('/test-one/two', TestController::class, 'display');
        $router->addRoute('/test-page-one/two', TestController::class, 'display');

        //test with an array of values e.g. you have products, articles, etc.
        //you can collect data from Database here
        //avoid adding:
        // $router->addRoute('test-a0', TestController::class, 'display');
        // $router->addRoute('test-a1', TestController::class, 'display');...
        // ...one by one

        $i           = 0;
        $routesArray = [];
        while ($i < 5) {
            $routesArray[$i] = ['/test-a' . $i, TestController::class, 'display'];
            $i++;
        }

        foreach ($routesArray as $key => $value) {
            $router->addRoute($value[0], "$value[1]", $value[2]);
        }



    }




}
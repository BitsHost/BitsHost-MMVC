<?php
/*
 * Created on Tue Oct 31 2023
 *
 * Copyright (c) 2023 BitsHost
 */
//add all your modules routes

use Test\Routes\TestRoutes;

$testR = new TestRoutes();
$testR->Routes($router);

use Moda\Routes\ModaRoutes;

$ModaR = new ModaRoutes();
$ModaR->Routes($router);

use Suba\Routes\SubaRoutes;

$SubaR = new SubaRoutes();
$SubaR->Routes($router);
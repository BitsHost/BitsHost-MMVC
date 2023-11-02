<?php
/*
 * Created on Tue Oct 31 2023
 *
 * Copyright (c) 2023 BitsHost
 */

namespace Test;

use MVC\Controller;
use Test\TestModel;
use Test\TestView;

/**
 * TestController
 */
class TestController extends Controller
{
    /**
     * display
     *
     * @return void
     */
    public function display()
    {
        $users = [
            new TestModel('John Doe', 'john@example.com'),
            new TestModel('Jane Doe', 'jane@example.com')
        ];


        //test for logged in user
        if (isset($_SESSION["username"])) {
            echo "<br>";
            echo $_SESSION["username"];
            echo "<br>";

        }
        else {
            echo " Not Logged In! Something else.";
        }

        $this->render('moda/ModaView', ['users' => $users]);

        //$newView = new TestView();
        //$newView->view();

    }

}
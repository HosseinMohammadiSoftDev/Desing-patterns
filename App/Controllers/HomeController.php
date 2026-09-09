<?php
namespace App\Controllers;

use App\DesignPatterns\Creational\FactoryMethod\Clinet;

class HomeController{

    public function index(){
        $clinet = new Clinet();
        $clinet->run();
    }

}